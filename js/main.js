const menuIcon = document.querySelector('.menu-icon');
const sidebar = document.querySelector('.top-header-mobile');

const sidebarToggleBtn = document.querySelector('.menu-icon-wrapper');


sidebarToggleBtn.onclick = function () {
  menuIcon.classList.toggle('menu-icon-active');
  sidebar.classList.toggle('top-header-mobile-active');
};


window.addEventListener("DOMContentLoaded", function() {
  var select1 = document.getElementsByClassName("sf-field-taxonomy-ad_cat")[0].getElementsByClassName("sf-input-select")[0],
    select2 = document.getElementsByClassName("sf-field-taxonomy-ad_cat")[1].getElementsByClassName("sf-input-select")[0],
    opt = [].slice.call(select1.options, 0),
    opt2 = [].slice.call(select2.options, 0);
  var value;
  select1.onchange = function() {
    opt.forEach(function(option, i) {
      if (option.selected) {
        value = option.value;
        return false;
      }
    });
    opt2.forEach(function(option, i) {
      var parent = option.parentNode;
      if (option.classList.contains("sf-level-1") || !i) {
        select2.appendChild(option);
      } else {
        if (parent) {
          parent.removeChild(option);
        }
      }
    });
  }
});