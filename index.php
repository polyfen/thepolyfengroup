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

<body class="light-mode polyfen-site home">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBRK5MR5" height="0" width="0"
            style="display:none; visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- INCLUDE HELLO's start -->
    <?php include 'includes/hellobar.php';?>
    <!-- INCLUDE HELLO's end -->

    <header>
        <!-- <div class="logo-container"> -->
            <img src="imgs/the-polyfen-group-ideogram.svg" id="tpg-ideogram" alt="">
            <img src="imgs/the-polyfen-group-wordmark.svg" id="tpg-wordmark" alt="">
        <!-- </div> -->
        <?php include 'includes/navbar.php';?>
    </header>

    <main>
        <section class="home-cover">
            <h1 class="title-1">We <span class="gradient-text">play</span><span class="gradient-text">build</span><span class="gradient-text">conquer</span><br>with tech</h1>
            <style>
                .gradient-text {
                    display: none;
                }

                .gradient-text.active {
                    display: inline;
                }
            </style>
            <script>
                var spans = document.getElementsByClassName('gradient-text');
                var index = 0;

                function showNextSpan() {
                    for (var i = 0; i < spans.length; i++) {
                        spans[i].classList.remove('active');
                    }
                    spans[index].classList.add('active');
                    index = (index + 1) % spans.length;
                }

                setInterval(showNextSpan, 2000); // Change span every 2 seconds
            </script>
            <p>We own and operate multiple services and products in the software
                and creative industries.</p>
        </section>
        <section class="container sub-brands">
            <h2 class="heading-1 align-center">Family of Brands</h2>
            <hr>
            <?php include './includes/family-of-brands.php'; ?>
            <hr>
        </section>
    </main>

    <script src="https://polykit.xyz/app/js/polykit-v0-3.js"></script>
    <script src="app/scripts.js"></script>

</body>

</html>