document.addEventListener("DOMContentLoaded", function () {
    let currentPage = window.location.pathname;
    /* console.log(currentPage); */
    let navLinks = document.querySelectorAll('.hello-nav a');
    navLinks.forEach(link => {
        /* console.log(link.getAttribute('href')); */
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('current-page');
        }
    })
});

// planeo remplazar con sticky
/* // hello-nav position  when scrolling down
document.addEventListener('DOMContentLoaded', function () {
    let nav = document.querySelector("#navbar");
    let navHamb = document.querySelector('.nav-hamburger');
    let navcloser = document.querySelector('.nav-close');
    let navLinks = document.querySelector('.nav-links');

    window.addEventListener('scroll', function () {
        let scroll = window.scrollY;

            if (scroll >= 60) {
                nav.style.top = '-30px';
                navHamb.style.top = '15px';
                navcloser.style.top = '15px';
                navLinks.style.paddingTop = '90px';
            } else {
                nav.style.top = '12px';
                navHamb.style.top = '60px';
                navcloser.style.top = '60px';
                navLinks.style.paddingTop = '135px';
            }
    });
});
 */
console.log('current-page.js loaded!!')