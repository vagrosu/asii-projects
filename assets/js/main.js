

//Sticky Navbar

// window.onscroll = function() {toggleSticky()};

var header = document.getElementById("navbar");
var sticky = header.offsetTop;

function toggleSticky() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

//Side Navigation

function openNav() {
  document.getElementById("sidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}
