const menuToggle = document.getElementsByClassName('menu-toggle');

function showMenuBar() {

  const nav = document.getElementById('nav');
  const menuIcon = document.getElementById('menu-icon');

  nav.classList.toggle('active');
  menuIcon.classList.toggle('fa-times');

}