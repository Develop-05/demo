const menuIcon = document.querySelector('.menu-icon');
const sidebar = document.querySelector('.top-header-mobile');

const sidebarToggleBtn = document.querySelector('.menu-icon-wrapper');


sidebarToggleBtn.onclick = function () {
  menuIcon.classList.toggle('menu-icon-active');
  sidebar.classList.toggle('top-header-mobile-active');
};