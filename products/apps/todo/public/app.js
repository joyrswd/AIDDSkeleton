const form = document.querySelector('#todo-form');
const input = document.querySelector('#todo-input');
const list = document.querySelector('#todo-list');
const loading = document.querySelector('#loading');
const empty = document.querySelector('#empty-state');
const message = document.querySelector('#message');
const countLabel = document.querySelector('#count-label');
const progressNumber = document.querySelector('#progress-number');
const progressRing = document.querySelector('.ring-value');

let todos = [];

document.querySelector('#today-label').textContent = new Intl.DateTimeFormat('ja-JP', {
  month: 'long', day: 'numeric', weekday: 'long'
}).format(new Date());

async function api(path, options = {}) {
  const response = await fetch(path, {
    ...options,
    headers: { 'Content-Type': 'application/json', ...(options.headers || {}) }
  });
  const data = response.status === 204 ? null : await response.json().catch(() => ({}));
  if (!response.ok) throw new Error(data.error || '通信に失敗しました。');
  return data;
}

function announce(text, success = false) {
  message.textContent = text;
  message.classList.toggle('success', success);
}

function updateSummary() {
  const completed = todos.filter((todo) => todo.completed).length;
  const percent = todos.length ? Math.round((completed / todos.length) * 100) : 0;
  countLabel.textContent = `${todos.length} 件 · ${completed} 件完了`;
  progressNumber.textContent = `${percent}%`;
  progressRing.style.strokeDashoffset = String(125.66 * (1 - percent / 100));
  empty.hidden = todos.length !== 0;
}

function iconButton(label, icon, className, handler) {
  const button = document.createElement('button');
  button.type = 'button';
  button.className = `icon-button ${className}`;
  button.setAttribute('aria-label', label);
  button.textContent = icon;
  button.addEventListener('click', handler);
  return button;
}

function render() {
  list.replaceChildren();
  todos.forEach((todo, index) => {
    const item = document.createElement('li');
    item.className = `todo-item${todo.completed ? ' completed' : ''}`;
    item.style.animationDelay = `${Math.min(index * 35, 210)}ms`;

    const checkbox = document.createElement('input');
    checkbox.type = 'checkbox'; checkbox.className = 'check'; checkbox.checked = todo.completed;
    checkbox.setAttribute('aria-label', `「${todo.title}」を${todo.completed ? '未完了' : '完了'}にする`);
    checkbox.addEventListener('change', () => updateTodo(todo.id, { completed: checkbox.checked }));

    const title = document.createElement('span');
    title.className = 'todo-title'; title.textContent = todo.title;
    const actions = document.createElement('div'); actions.className = 'actions';
    actions.append(
      iconButton('編集', '✎', 'edit', () => beginEdit(item, todo)),
      iconButton('削除', '×', 'delete', () => removeTodo(todo.id))
    );
    item.append(checkbox, title, actions);
    list.append(item);
  });
  updateSummary();
}

function beginEdit(item, todo) {
  const title = item.querySelector('.todo-title');
  const editor = document.createElement('input');
  editor.className = 'edit-input'; editor.value = todo.title; editor.maxLength = 200;
  title.replaceWith(editor); editor.focus(); editor.select();
  let saved = false;
  const save = async () => {
    if (saved) return; saved = true;
    if (editor.value.trim() === todo.title) return render();
    await updateTodo(todo.id, { title: editor.value });
  };
  editor.addEventListener('blur', save);
  editor.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') editor.blur();
    if (event.key === 'Escape') { saved = true; render(); }
  });
}

async function updateTodo(id, changes) {
  try {
    const updated = await api(`/api/todos/${id}`, { method: 'PATCH', body: JSON.stringify(changes) });
    todos = todos.map((todo) => todo.id === id ? updated : todo);
    announce('更新しました。', true); render();
  } catch (error) { announce(error.message); render(); }
}

async function removeTodo(id) {
  try {
    await api(`/api/todos/${id}`, { method: 'DELETE' });
    todos = todos.filter((todo) => todo.id !== id);
    announce('削除しました。', true); render();
  } catch (error) { announce(error.message); }
}

form.addEventListener('submit', async (event) => {
  event.preventDefault(); announce('');
  if (!input.value.trim()) { announce('Todo の内容を入力してください。'); input.focus(); return; }
  const button = form.querySelector('button'); button.disabled = true;
  try {
    const todo = await api('/api/todos', { method: 'POST', body: JSON.stringify({ title: input.value }) });
    todos.unshift(todo); input.value = ''; announce('Todo を追加しました。', true); render(); input.focus();
  } catch (error) { announce(error.message); }
  finally { button.disabled = false; }
});

(async () => {
  try { todos = (await api('/api/todos')).todos; render(); }
  catch (error) { announce(error.message); }
  finally { loading.hidden = true; }
})();
