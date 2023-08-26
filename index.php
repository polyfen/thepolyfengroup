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

        document.getElementById('tpg-wordmark').style.transform ='rotate(' + theta + 'rad)';
        }
    </script>
  </head>

  <body>
    <header>
        <img src="imgs/the-polyfen-group-ideogram.svg" id="tpg-ideogram">
        <img src="imgs/the-polyfen-group-wordmark.svg" id="tpg-wordmark">
        <nav>
            <a href="https://business.thepolyfengroup.com" target="_blank" class="external-url"><img src="imgs/icons/external-url.svg" class="external-url-icon">Business Plan</a>
            <a href="https://wiki.thepolyfengroup.com" target="_blank" class="external-url"><img src="imgs/icons/external-url.svg" class="external-url-icon">Team Wiki</a>
            <a href="https://brand.thepolyfengroup.com" target="_blank" class="external-url"><img src="imgs/icons/external-url.svg" class="external-url-icon">Brand Guidelines</a>
        </nav>
    </header>
    <main>
        <section id="cover">
            <h2 class="title-2">We explore new ways of using tech in creative projects.</h2>
            <p>The Polyfen Group LLC is a small corporation parent of multiple brands related to software development and the creative industry.</p>
        </section>
        <section id="sub-brands-container">
            <h2 class="heading-1">Our Family of Ventures</h2>
            <hr>
            <section class="sub-brand">
                <img src="imgs/sub-brands/polyfen-logo.svg" alt="Polyfen">
                <p>Creative agency offering design, marketing, and software development services for new and emerging businesses.</p>
                <a href="https://polyfen.com" target="_blank" class="web-url"><img src="imgs/icons/globe.svg" class="web-icon">polyfen.com</a>
            </section>
            <hr>
            <section class="sub-brand">
                <img src="imgs/sub-brands/poly-atlas-logo.svg" alt="Poly Atlas">
                <p>Open-source step-by-step guide to the Branding process, including practical tips, case studies, template files, and many other useful resources.</p>
                <a href="https://polyatlas.wiki" target="_blank" class="web-url"><img src="imgs/icons/globe.svg" class="web-icon">polyatlas.wiki</a>
            </section>
            <hr>
            <section class="sub-brand">
                <img src="imgs/sub-brands/poly-cookies-logo.svg" alt="Poly Cookies">
                <p>Open-source solution to privacy policy implementing a cookie consent banner with Google Tag Manager.</p>
                <a href="https://polycookies.com" target="_blank" class="web-url"><img src="imgs/icons/globe.svg" class="web-icon">polycookies.com</a>
            </section>
            <hr>
            <section class="sub-brand">
                <img src="imgs/sub-brands/poly-forum-logo.svg" alt="Poly Forum">
                <p>Non-profit organization dedicated to promoting free and open education and professional growth in the creative industry.</p>
                <a href="https://polyforum.org" target="_blank" class="web-url"><img src="imgs/icons/globe.svg" class="web-icon">polyforum.org</a>
            </section>
            <hr>
            <section class="sub-brand" style="display:none;">
                <img src="imgs/sub-brands/poly-qwerty-logo.svg" alt="Poly Qwerty">
            </section>
        </section>
    </main>
    <footer></footer>
  </body>
</html>