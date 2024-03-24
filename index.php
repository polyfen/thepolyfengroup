<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Polyfen Group</title>

    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <script>
    window.onscroll = function() {
        var theta = document.documentElement.scrollTop / 400 % Math.PI;

        document.getElementById('tpg-wordmark').style.transform = 'rotate(' + theta + 'rad)';
    }
    </script>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PBRK5MR5');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBRK5MR5" height="0" width="0"
            style="display:none; visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <img src="imgs/the-polyfen-group-ideogram.svg" id="tpg-ideogram" alt="">
        <img src="imgs/the-polyfen-group-wordmark.svg" id="tpg-wordmark" alt="">
        <nav>
            <a href="/">Home</a>
            <a href="/business/">Business Plan</a>
            <a href="/wiki/">Team Wiki</a>
            <a href="/brand/">Brand Guidelines</a>
        </nav>
    </header>
    <main>
        <section id="cover">
            <h1 class="title-2">We explore new ways of using tech in creative projects.</h1>
            <p><strong>The Polyfen Group LLC</strong> is a fully-remote, US based company parent to multiple brands in the creative and software engineering industries.</p>
        </section>
        <section class="sub-brands-container">
            <h2 class="heading-1">Family of Brands</h2>
            <hr>
            <section class="sub-brand">
                <a class="screen" href="https://polyfen.com" target="_blank" rel="dofollow">
                    <img src="imgs/sub-brands/polyfen-screen.webp" alt="Polyfen screenshot">
                </a>
                <h3 class="polyfen --sub-brand">
                    <a href="https://polyfen.com" target="_blank" class="web-url" rel="dofollow">Polyfen<span></span></a>
                </h3>
                <p>Creative &amp; Software boutique offering design, marketing, and engineering services for US businesses.</p>
                <a href="https://polyfen.com" target="_blank" class="links web-url" rel="dofollow"><img src="imgs/icons/globe.svg"
                        class="web-icon" alt="">polyfen.com</a>
            </section>
            <hr>
            <section class="sub-brand">
                <h3 class="polyatlas --sub-brand">
                    <a href="https://polyatlas.wiki" target="_blank" class="web-url" rel="dofollow">Polyatlas<span></span></a>
                </h3>
                <a class="screen" href="https://polyatlas.wiki" target="_blank" rel="dofollow">
                    <img src="imgs/sub-brands/polyatlas-screen.webp" alt="Polyatlas screenshot">
                </a>
                <p>Open-source step-by-step guide to the Branding process, including practical tips, case studies,
                    template files, and many other useful resources.</p>
                <a href="https://polyatlas.wiki" target="_blank" class="links web-url" rel="dofollow"><img src="imgs/icons/globe.svg"
                        class="web-icon" alt="">polyatlas.wiki</a>
            </section>
            <hr>
            <section class="sub-brand">
                <h3 class="polycookies --sub-brand">
                    <a href="https://polycookies.com" target="_blank" class="web-url" rel="dofollow">Polycookies<span></span></a>
                </h3>
                <a class="screen" href="https://polycookies.com" target="_blank" rel="dofollow">
                    <img src="imgs/sub-brands/polycookies-screen.webp" alt="Polycookies screenshot">
                </a>
                <p>Open-source solution to privacy policy implementing a cookie consent banner with Google Tag Manager.
                </p>
                <a href="https://polycookies.com" target="_blank" class="links web-url" rel="dofollow"><img src="imgs/icons/globe.svg"
                        class="web-icon" alt="">polycookies.com</a>
            </section>
            <hr>
            <section class="sub-brand">
                <h3 class="polyqwerty --sub-brand">
                    <a href="https://polyqwerty.com" target="_blank" class="web-url" rel="dofollow">polyqwerty<span></span></a>
                </h3>
                <a class="screen" href="https://polyqwerty.com" target="_blank" rel="dofollow">
                    <img src="imgs/sub-brands/polyqwerty-screen.webp" alt="Polyqwerty screenshot">
                </a>
                <p>Your keyboard's assistant. Click on a character to copy it.</p>
                <a href="https://polyqwerty.com" target="_blank" class="links web-url" rel="dofollow"><img src="imgs/icons/globe.svg"
                        class="web-icon" alt="">polyqwerty.com</a>
            </section>
            <hr>
            <section class="sub-brand">
                <h3 class="polykit --sub-brand">
                    <a href="https://polykit.xyz" target="_blank" class="web-url" rel="dofollow">polykit<span></span></a>
                </h3>
                <a class="screen" href="https://polykit.xyz" target="_blank" rel="dofollow">
                    <img src="imgs/sub-brands/polykit-screen.webp" alt="Polikit screenshot">
                </a>
                <p>Open-source design system for User Interfaces with CSS code for developers and Figma library for
                    designers.
                    <small class="caption" style="opacity: 0.6;"><br>// Work in Progress //</small>
                </p>
                <a href="https://polykit.xyz" target="_blank" class="links web-url" rel="dofollow"><img src="imgs/icons/globe.svg"
                        class="web-icon" alt="">polykit.xyz</a>
            </section>
            <hr>
        </section>
    </main>

    <!-- INCLUDE HELLO's start -->
    <?php include 'includes/hello-social.php';?>
    <?php include 'includes/hello-nav.php';?>
    <!-- INCLUDE HELLO's end -->
    <div class="home-container">
        <header class="home">
            <!-- <div class="logo-container"> -->
                <img src="imgs/the-polyfen-group-ideogram.svg" id="tpg-ideogram" alt="">
                <img src="imgs/the-polyfen-group-wordmark.svg" id="tpg-wordmark" alt="">
            <!-- </div> -->
        </header>
        <main class="home">
            <section id="home-cover">
                <h1 class="title-2">We explore new ways of using tech in creative projects.</h1>
                <p>The Polyfen Group LLC is a small company parent of multiple brands related to software development
                    and
                    the creative industry.</p>
            </section>
            <section class="sub-brands-container">
                <h2 class="heading-1">Family of Brands</h2>
                <hr>
                <section class="sub-brand">
                    <h3 class="polyfen --sub-brand">
                        <a href="https://polyfen.com" target="_blank" class="web-url"
                            rel="dofollow">Polyfen<span></span></a>
                    </h3>
                    <a class="screen" href="https://polyfen.com" target="_blank" rel="dofollow">
                        <img src="imgs/sub-brands/polyfen-screen.webp" alt="Polyfen screenshot">
                    </a>
                    <p>Creative agency offering design, marketing, and software development services for new and
                        emerging
                        businesses.</p>
                    <a href="https://polyfen.com" target="_blank" class="links web-url" rel="dofollow"><img
                            src="imgs/icons/globe.svg" class="web-icon" alt="">polyfen.com</a>
                </section>
                <hr>
                <section class="sub-brand">
                    <h3 class="polyatlas --sub-brand">
                        <a href="https://polyatlas.wiki" target="_blank" class="web-url"
                            rel="dofollow">Polyatlas<span></span></a>
                    </h3>
                    <a class="screen" href="https://polyatlas.wiki" target="_blank" rel="dofollow">
                        <img src="imgs/sub-brands/polyatlas-screen.webp" alt="Polyatlas screenshot">
                    </a>
                    <p>Open-source step-by-step guide to the Branding process, including practical tips, case studies,
                        template files, and many other useful resources.</p>
                    <a href="https://polyatlas.wiki" target="_blank" class="links web-url" rel="dofollow"><img
                            src="imgs/icons/globe.svg" class="web-icon" alt="">polyatlas.wiki</a>
                </section>
                <hr>
                <section class="sub-brand">
                    <h3 class="polycookies --sub-brand">
                        <a href="https://polycookies.com" target="_blank" class="web-url"
                            rel="dofollow">Polycookies<span></span></a>
                    </h3>
                    <a class="screen" href="https://polycookies.com" target="_blank" rel="dofollow">
                        <img src="imgs/sub-brands/polycookies-screen.webp" alt="Polycookies screenshot">
                    </a>
                    <p>Open-source solution to privacy policy implementing a cookie consent banner with Google Tag
                        Manager.
                    </p>
                    <a href="https://polycookies.com" target="_blank" class="links web-url" rel="dofollow"><img
                            src="imgs/icons/globe.svg" class="web-icon" alt="">polycookies.com</a>
                </section>
                <hr>
                <section class="sub-brand">
                    <h3 class="polyqwerty --sub-brand">
                        <a href="https://polyqwerty.com" target="_blank" class="web-url"
                            rel="dofollow">polyqwerty<span></span></a>
                    </h3>
                    <a class="screen" href="https://polyqwerty.com" target="_blank" rel="dofollow">
                        <img src="imgs/sub-brands/polyqwerty-screen.webp" alt="Polyqwerty screenshot">
                    </a>
                    <p>Your keyboard's assistant. Click on a character to copy it.</p>
                    <a href="https://polyqwerty.com" target="_blank" class="links web-url" rel="dofollow"><img
                            src="imgs/icons/globe.svg" class="web-icon" alt="">polyqwerty.com</a>
                </section>
                <hr>
                <section class="sub-brand">
                    <h3 class="polykit --sub-brand">
                        <a href="https://polykit.xyz" target="_blank" class="web-url"
                            rel="dofollow">polykit<span></span></a>
                    </h3>
                    <a class="screen" href="https://polykit.xyz" target="_blank" rel="dofollow">
                        <img src="imgs/sub-brands/polykit-screen.webp" alt="Polikit screenshot">
                    </a>
                    <p>Open-source design system for User Interfaces with CSS code for developers and Figma library for
                        designers.
                        <small class="caption" style="opacity: 0.6;"><br>// Work in Progress //</small>
                    </p>
                    <a href="https://polykit.xyz" target="_blank" class="links web-url" rel="dofollow"><img
                            src="imgs/icons/globe.svg" class="web-icon" alt="">polykit.xyz</a>
                </section>
                <hr>
            </section>
        </main>
    </div>
</body>

</html>