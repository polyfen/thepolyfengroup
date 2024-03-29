console.log("Soy el docs-mobile-nav-v2-local.js");

/* Mobile nav */

const opener = document.querySelector('.hamburger')
const closer = document.querySelector('.close')
const nav = document.getElementById('navbar')
let navItems = navbar.querySelectorAll("li");


opener.addEventListener('click', () => {
	nav.classList.add('open-nav')
	closer.classList.add('open-nav')
	opener.classList.add('close-nav')
})
closer.addEventListener('click', () => {
	nav.classList.remove('open-nav')
	closer.classList.remove('open-nav')
	opener.classList.remove('close-nav')
})

if (window.innerWidth <= 768) {
    navItems.forEach(item => {
        item.addEventListener('click', () => {
            nav.classList.remove('open-nav');
            closer.classList.remove('open-nav');
            opener.classList.remove('close-nav');
        });
    });
}

/* hamburge menu scroll obdserver */
document.addEventListener("DOMContentLoaded", function() {
    let hamburger = document.querySelector(".hamburger");
    let close = document.querySelector(".close");

    window.addEventListener("scroll", function() {
        let scroll = window.scrollY || document.documentElement.scrollTop;

        if (window.innerWidth < 426) {
            if (scroll >= 40) {
                console.log("scroll");
                hamburger.style.top = "12px";
                close.style.top = "12px";
            } else {
                hamburger.style.top = "47px";
                close.style.top = "47px";
            }
        }
    });
});





