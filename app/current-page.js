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


// hello-nav position  when scrolling down
document.addEventListener('DOMContentLoaded', function () {
    let nav = document.querySelector("#navbar");

    window.addEventListener('scroll', function () {
        let scroll = window.scrollY;
        if (window.innerWidth >= 768) {
            if (scroll >= 60) {
                nav.style.top = '-50px';
            } else {
                nav.style.top = '0px';
            }
        }
    });
});

console.log('current-page.js loaded!!')