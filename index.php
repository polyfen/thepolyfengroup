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

    <!-- INCLUDE HELLO's start -->
    <?php include 'includes/hellobar.php';?>
    <?php include 'includes/navbar.php';?>
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
                <h1 class="title-1">We play with tech</h1>
                <p>The Polyfen Group is a small company parent of multiple brands in the software development
                    and
                    the creative industries.</p>
            </section>
            <section class="sub-brands-container">
                <h2 class="heading-1">Family of Brands</h2>
                <hr>
                <?php include './includes/family-of-brands.php'; ?>
                <hr>
            </section>
        </main>
    </div>
</body>

</html>