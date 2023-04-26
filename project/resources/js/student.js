import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();




const navbar = document.querySelector('.majid');
const title = document.querySelector('h1');
const navigate = document.querySelector('a');
const toggleBtn = document.querySelector('#toggle-btn');
const body = document.querySelector('body');
const minitext = document.querySelector('.rounded-tl-3xl');
const title2 = document.querySelector('.title2');

// Check if the toggle state is stored in localStorage
if (localStorage.getItem('toggleState') === 'on') {
  navbar.classList.add('bg-orange');
  title.classList.add('text-white');
  body.classList.add('bg-black');
  navigate.classList.add('text-white');
  minitext.classList.add('bg-orange');
  title2.classList.add('text-white');
}

toggleBtn.addEventListener('click', () => {
  navbar.classList.toggle('bg-orange');
  body.classList.toggle('bg-black');
  navigate.classList.toggle('text-white');
  title.classList.toggle('text-white');
  minitext.classList.toggle('bg-orange');
  title2.classList.toggle('text-white');


  // Store the toggle state in localStorage
  if (navbar.classList.contains('bg-orange')) {
    localStorage.setItem('toggleState', 'on');
  } else {
    localStorage.setItem('toggleState', 'off');
  }
});