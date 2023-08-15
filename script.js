console.log('script.js Linked');

var navbar = document.querySelector('.navbar');
var navDim = navbar.offsetTop;

window.onscroll = function () {
  // Sticky navbar
  if (window.pageYOffset >= navDim) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
};

