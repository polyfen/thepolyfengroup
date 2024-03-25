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
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentPage = window.location.pathname;
        /* console.log(currentPage); */
        let navLinks = document.querySelectorAll('header nav a');
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('current-page');
            }
        })
    });
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
            style="display:none;visibility:hidden"></iframe></noscript>
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
            <?php include './includes/family-of-brands.php'; ?>
            <hr>
        </section>
    </main>

</body>

</html>