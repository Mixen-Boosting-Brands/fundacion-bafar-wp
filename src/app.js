// Libraries
window.bootstrap = require("bootstrap/dist/js/bootstrap.bundle.js");
import "jquery-parallax.js";

// Local Scripts
import "../src/smooth-scrolling";
import "../src/form-ajax";
import "../src/aos";
import "../src/swipers";
import "../src/modals";

// Header
document.addEventListener("DOMContentLoaded", function () {
    // Cache the DOM elements
    var header = document.getElementById("navbar");
    var logoNavbar = document.getElementById("logo-navbar");
    var isHomePage = document.body.classList.contains("home");
    var originalLogoSrc = logoNavbar ? logoNavbar.src : "";

    function updateScroll() {
        var scroll = window.pageYOffset || document.documentElement.scrollTop;
        var navbarHome = document.querySelector(".navbar-home");

        if (scroll >= 1) {
            header.classList.add("navbar-scroll");
            if (isHomePage) {
                if (navbarHome) {
                    header.classList.remove("navbar-home");
                }
                if (logoNavbar) {
                    logoNavbar.src = logoNavbar.src.replace(
                        "logo-azul@2x.png",
                        "logo@2x.png"
                    );
                }
            }
        } else {
            header.classList.remove("navbar-scroll");
            if (isHomePage) {
                header.classList.add("navbar-home");
                if (logoNavbar) {
                    logoNavbar.src = originalLogoSrc;
                }
            }
        }
    }

    window.addEventListener("scroll", updateScroll);
    updateScroll(); // Call once to set initial state
});

// Function that closes menu
function cerrarMenu() {
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    if (menu) {
        menu.classList.remove("menu-abierto");
    }
    if (navbar) {
        navbar.classList.remove("opacity-0");
    }
    if (backdrop) {
        backdrop.classList.remove("backdrop-opacity-1");
    }
}

// Navigation menu
document.getElementById("mburger").addEventListener("click", function (e) {
    e.stopPropagation();
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    menu.classList.toggle("menu-abierto");
    navbar.classList.toggle("opacity-0");
    backdrop.classList.toggle("backdrop-opacity-1");
});

document.querySelector(".menu").addEventListener("click", function (e) {
    e.stopPropagation();
});

document.body.addEventListener("click", function (e) {
    var menu = document.querySelector(".menu");
    var navbar = document.getElementById("navbar");
    var backdrop = document.getElementById("backdrop");

    menu.classList.remove("menu-abierto");
    navbar.classList.remove("opacity-0");
    backdrop.classList.remove("backdrop-opacity-1");
});

document
    .getElementById("cerrar-menu")
    .addEventListener("click", cerrarMenu, false);
document
    .getElementById("btn-logo")
    .addEventListener("click", cerrarMenu, false);

// Get the ul element by its ID
var ulElement = document.getElementById("navmenu");

// Get all li elements within the ul element
var liElements = ulElement.getElementsByTagName("li");

// Loop through each li element
for (var i = 0; i < liElements.length; i++) {
    // Do stuff with each li element
    var currentLi = liElements[i];
    currentLi.addEventListener("click", function () {
        var menu = document.querySelector(".menu");
        var navbar = document.getElementById("navbar");
        var backdrop = document.getElementById("backdrop");

        menu.classList.remove("menu-abierto");
        navbar.classList.remove("opacity-0");
        backdrop.classList.remove("backdrop-opacity-1");
    });
}

document
    .getElementById("btn-contacto")
    .addEventListener("click", cerrarMenu, false);

// Cerrar menú con Esc
document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        cerrarMenu();
    }
});
