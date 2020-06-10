const body = document.body;
const btnShowNav = document.getElementById('btn-menu');
btnShowNav.addEventListener('click', _ => { body.classList.toggle('show') });
btnShowNav.addEventListener('mousedown', (e) => { e.preventDefault() });
