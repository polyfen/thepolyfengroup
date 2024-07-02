const header = document.querySelector('header');



document.addEventListener("DOMContentLoaded", function () {
    let header = document.querySelector('header');
    if (header) {
        let body = document.querySelector("body");
        
        window.addEventListener("scroll", function () {
            let scroll = window.scrollY;
    
            if (window.innerWidth > 768) {
                if (scroll >= 60) {
                    header.classList.add("header-position-fixed");
                } else {
                    header.classList.remove("header-position-fixed");
                }
            }
    
            if (scroll >= 60) {
                header.style.top = '0px';
            } else {
                if (body.classList.contains("landing-page")) {
                    header.style.top = '0px';
                } else {
                    header.style.top = `${hellobarHeight + 0}px`;
                }
            }
        });
    }
});