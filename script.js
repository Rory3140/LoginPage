console.log('script.js Linked');

var navBar = document.getElementById('navbar');
var navDim = navbar.offsetTop;

window.onscroll = function () {
  // Sticky navbar
  if (window.pageYOffset >= navDim) {
    navBar.classList.add("sticky")
  } else {
    navBar.classList.remove("sticky");
  }
};

var menuButton = document.getElementById('menu-icon');
var navButtons = navBar.getElementsByClassName('button');
var navHidden = true;

menuButton.onclick = function () {
  if (navHidden) {
    navBar.style.width = '200px';
    navHidden = false;
    console.log(navButtons.length);
    for (let i = 0; i < navButtons.length; i++) {
      navButtons[i].style.display = 'flex';
    }
  } else {
    navBar.style.width = '50px';
    navHidden = true;
    for (let i = 0; i < navButtons.length; i++) {
      navButtons[i].style.display = 'none';
    }
  }
};