// hello-nav position  when scrolling down
document.addEventListener('DOMContentLoaded', function () {
    let nav = document.querySelector("#navbar");

    window.addEventListener('scroll', function () {
        let scroll = window.scrollY;
        if (window.innerWidth >= 768) {
            if (scroll >= 60) {
                nav.style.top = '0px';
            } else {
                nav.style.top = '12px';
            }
        }
    });
});

console.log('privacy-scroll.js loaded')