console.log("Soy el docs-nav-v3.js");

/* Mobile nav */

const navOpener = document.querySelector('.nav-hamburger')
const navCloser = document.querySelector('.nav-close')
const navLinks = document.querySelector('.nav-links')
/* let navItems = navbar.querySelectorAll("li"); */


navOpener.addEventListener('click', () => {
	navLinks.classList.add('open-nav')
	navCloser.classList.add('open-nav')
	navOpener.classList.add('close-nav')
})
navCloser.addEventListener('click', () => {
	navLinks.classList.remove('open-nav')
	navCloser.classList.remove('open-nav')
	navOpener.classList.remove('close-nav')
})

/* if (window.innerWidth <= 768) {
    navItems.forEach(item => {
        item.addEventListener('click', () => {
            nav.classList.remove('open-nav');
            closer.classList.remove('open-nav');
            opener.classList.remove('close-nav');
        });
    });
} */

/* hamburger menu scroll obdserver */
/* document.addEventListener("DOMContentLoaded", function() {
    let navHamburger = document.querySelector(".nav-hamburger");
    let close = document.querySelector(".nav-close");

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
 */


/* /* /* Mobile nav Scroll observer for nav-title active */
/* const menuItems = document.querySelectorAll('#navbar ul li a');
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
	threshold: 0.3
}); */

/* const sections = document.querySelectorAll('section');
sections.forEach((section) => {
	observer.observe(section);
}); */