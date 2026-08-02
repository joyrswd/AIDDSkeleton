const state = { todos: [], filter: 'all' };
const list = document.querySelector('#todo-list');
const form = document.querySelector('#todo-form');
const input = document.querySelector('#todo-title');
const empty = document.querySelector('#empty');
const loading = document.querySelector('#loading');
const count = document.querySelector('#count');
const notice = document.querySelector('#notice');

const api = async (path = '', options = {}) => {
  const response = await fetch(`/api/todos${path}`, {
    ...options,
    headers: { 'Content-Type': 'application/json', ...options.headers },
  });
  if (!response.ok) {
    const body = await response.json().catch(() => ({}));
    throw new Error(body.error || '通信に失敗しました。');
  }
  return response.status === 204 ? null : response.json();
};

const announce = (message) => {
  notice.textContent = message;
  notice.classList.add('show');
  window.setTimeout(() => notice.classList.remove('show'), 2400);
};

const visibleTodos = () => state.todos.filter((todo) => (
  state.filter === 'all' || (state.filter === 'completed' ? todo.completed : !todo.completed)
));

const render = () => {
  list.replaceChildren();
  const todos = visibleTodos();
  todos.forEach((todo) => {
    const item = document.createElement('li');
    item.className = `todo${todo.completed ? ' completed' : ''}`;
    const check = document.createElement('button');
    check.className = 'check';
    check.type = 'button';
    check.setAttribute('aria-label', todo.completed ? `${todo.title}を未完了にする` : `${todo.title}を完了にする`);
    check.textContent = todo.completed ? '✓' : '';
    check.addEventListener('click', () => updateTodo(todo.id, { completed: !todo.completed }));
    const title = document.createElement('span');
    title.className = 'title';
    title.textContent = todo.title;
    const actions = document.createElement('div');
    actions.className = 'actions';
    const edit = document.createElement('button');
    edit.type = 'button'; edit.textContent = '編集';
    edit.addEventListener('click', () => editTodo(todo));
    const remove = document.createElement('button');
    remove.type = 'button'; remove.className = 'delete'; remove.textContent = '削除';
    remove.addEventListener('click', () => deleteTodo(todo));
    actions.append(edit, remove);
    item.append(check, title, actions);
    list.append(item);
  });
  empty.hidden = todos.length > 0;
  const active = state.todos.filter((todo) => !todo.completed).length;
  count.textContent = `${active} 件の未完了 Todo`;
};

const updateTodo = async (id, changes) => {
  try {
    const { todo } = await api(`/${id}`, { method: 'PATCH', body: JSON.stringify(changes) });
    state.todos = state.todos.map((current) => current.id === id ? todo : current);
    render();
  } catch (error) { announce(error.message); }
};

const editTodo = async (todo) => {
  const title = window.prompt('Todo のタイトルを編集', todo.title);
  if (title !== null && title.trim() && title.trim() !== todo.title) await updateTodo(todo.id, { title });
};

const deleteTodo = async (todo) => {
  if (!window.confirm(`「${todo.title}」を削除しますか？`)) return;
  try {
    await api(`/${todo.id}`, { method: 'DELETE' });
    state.todos = state.todos.filter((current) => current.id !== todo.id);
    render(); announce('Todo を削除しました。');
  } catch (error) { announce(error.message); }
};

form.addEventListener('submit', async (event) => {
  event.preventDefault();
  const title = input.value.trim();
  if (!title) return;
  const button = form.querySelector('button');
  button.disabled = true;
  try {
    const { todo } = await api('', { method: 'POST', body: JSON.stringify({ title }) });
    state.todos.unshift(todo); input.value = ''; state.filter = 'all';
    document.querySelectorAll('[data-filter]').forEach((item) => item.classList.toggle('active', item.dataset.filter === 'all'));
    render(); announce('Todo を追加しました。'); input.focus();
  } catch (error) { announce(error.message); }
  finally { button.disabled = false; }
});

document.querySelectorAll('[data-filter]').forEach((button) => button.addEventListener('click', () => {
  state.filter = button.dataset.filter;
  document.querySelectorAll('[data-filter]').forEach((item) => item.classList.toggle('active', item === button));
  render();
}));

const today = new Date();
document.querySelector('#date-day').textContent = String(today.getDate()).padStart(2, '0');
document.querySelector('#date-detail').textContent = new Intl.DateTimeFormat('ja-JP', { year: 'numeric', month: 'short', weekday: 'short' }).format(today);

api().then(({ todos }) => { state.todos = todos; loading.hidden = true; render(); })
  .catch((error) => { loading.textContent = '読み込みに失敗しました。'; announce(error.message); });
