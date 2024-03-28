console.log("Soy el docs-nav-v3.js");

/* eventListener para el hello-nav para manejar el display con clases */

const navOpener = document.querySelector('.nav-hamburger')
const navCloser = document.querySelector('.nav-close')
const navLinks = document.querySelector('.nav-links')

navOpener.addEventListener('click', () => {
    navLinks.classList.add('open-nav')
/*     navCloser.classList.add('open-nav') */
    /* navOpener.classList.add('close-nav') */
})
navCloser.addEventListener('click', () => {
    navLinks.classList.remove('open-nav')
/*     navCloser.classList.remove('open-nav')
    navOpener.classList.remove('close-nav') */
})

/* Agrega el .position-fixed al nav */

document.addEventListener("DOMContentLoaded", function () {
    let nav = document.querySelector(".nav-links");
    let buttons = document.querySelector(".nav-buttons");

    window.addEventListener("scroll", function () {
        let scroll = window.scrollY;

        if (window.innerWidth > 768) {
            if (scroll >= 60) {
                nav.classList.add("position-fixed");
            } else {
                nav.classList.remove("position-fixed");
            }
        }

        if (scroll >= 60) {
            buttons.style.top = '18px';
        } else {
            buttons.style.top = '55px';
        }
    });
});




/* end position fixed on nav */

/* Mobile nav Scroll observer for nav-title active */
const menuItems = document.querySelectorAll('#navbar ul li a');
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        const targetId = entry.target.getAttribute('id');
        if (entry.isIntersecting) {
            menuItems.forEach((menuItem) => {
                menuItem.classList.remove('active');
                if (menuItem.getAttribute('href') === `#${targetId}`) {
                    menuItem.classList.add('active');
                }
            });
        }
    });
}, {
    threshold: 0.1
});

const sections = document.querySelectorAll('section:not(:first-of-type)');
sections.forEach((section) => {
    observer.observe(section);
});
/* END mobile nav scroll observer for nat-title active */

/* ACCORDEON */

let acc = document.getElementsByClassName("acc-button");
let i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        }
        else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }

    });
}

console.log("accordion.js loaded");
