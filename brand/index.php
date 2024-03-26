<!DOCTYPE html>
<html lang="en">

<head>
    <title>Brand Guidelines | Polyfen</title>

    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->
</head>

<body>
    <?php include '../includes/hello-nav.php';?>
    <nav id="navbar">
        <a href="/" rel="dofollow" class="link-logo">
            <img class="plfn-logo" src="imgs/the-polyfen-group-logo.svg" alt="The Polyfen Group" height="40px" width="auto">
        </a>
        <h2 class="caption">Brand Guidelines</h2>
            <ul class="toc">
                <li><a href="#download-assets" class="caption">1. Download assets</a></li>
                <li><a href="#market-research" class="caption">2. Market research</a></li>
                <ul>
                    <li><a href="#business-analysis" class="caption">2.1. Business overview</a></li>
                    <li><a href="#industry-analysis" class="caption">2.2. Industry analysis</a></li>
                    <li><a href="#target-analysis" class="caption">2.3. Target analysis</a></li>
                    <ul>
                        <li><a href="#end-to-end-project" class="caption">2.3.1. End-to-end project</a></li>
                        <li><a href="#executive-consulting" class="caption">2.3.2. Executive consulting</a></li>
                        <li><a href="#staff-augmentation" class="caption">2.3.3. Staff augmentation</a></li>
                    </ul>
                </ul>
                <li><a href="#brand-strategy" class="caption">3. Brand strategy</a></li>
                <ul>
                    <li><a href="#keywords" class="caption">3.1. Keywords</a></li>
                    <li><a href="#creative-concept" class="caption">3.2. Creative concept</a></li>
                    <li><a href="#moodboard" class="caption">3.3. Moodboard</a></li>
                    <li><a href="#naming" class="caption">3.4. Naming</a></li>
                    <ul>
                        <li><a href="#etymology" class="caption">3.4.1. Etymology</a></li>
                        <li><a href="#name-architecture" class="caption">3.4.2. Name architecture</a></li>
                    </ul>
                    <li><a href="#brand-architecture" class="caption">3.5. Brand architecture</a></li>
                    <li><a href="#voice" class="caption">3.6. Voice</a></li>
                    <li><a href="#motto" class="caption">3.7. Motto</a></li>
                </ul>
                <li><a href="#visual-identity" class="caption">4. Visual identity</a></li>
                <ul>
                    <li><a href="#logo-system" class="caption">4.1. Logo system</a></li>
                    <ul>
                        <li><a href="#symbol" class="caption">4.1.1. Symbol</a></li>
                        <li><a href="#logotype" class="caption">4.1.2. Logotype</a></li>
                        <li><a href="#family" class="caption">4.1.3. Family</a></li>
                    </ul>
                    <li><a href="#color-scheme" class="caption">4.2. Color scheme</a></li>
                    <li><a href="#visual-language" class="caption">4.3. Visual language</a></li>
                    <ul>
                        <li><a href="#icons" class="caption">4.3.1. Icons</a></li>
                        <li><a href="#illustrations" class="caption">4.3.2. Illustrations</a></li>
                        <li><a href="#pearls" class="caption">4.3.3. Pearls</a></li>
                    </ul>
                </ul>
            </ul>
            <br><br>
    </nav>
    <button aria-label="Open/Close navbar" class="hamburger">
        <img src="imgs/icons/hamburger_icon.svg" alt="" height="30px" width="auto">
    </button>
    <button class="close">
        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24">
            <path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m16 16l-4-4m0 0L8 8m4 4l4-4m-4 4l-4 4" />
        </svg>
    </button>
    <main>
        <section class="cover">
            <img src="imgs/lightbulb-illustration.svg" alt="Folder Illustration" height="250px" width="auto" >
            <h1 class="title-2">Brand Guidelines</h1>
            <h2 class="caption">The Polyfen Group LLC<br>Est. 2018</h2>
        </section>
        <!-- INCLUDE OVERVIEW.PHP start -->
        <?php include 'content/download-assets.php';?>
        <!-- INCLUDE OVERVIEW.PHP end  -->
        <hr>
        <!-- INCLUDE OUR-GOAL.PHP start -->
        <?php include 'content/market-research.php';?>
        <!-- INCLUDE OUR-GOAL.PHP end -->
        <hr>
        <!-- INCLUDE OUR-VALUES.PHP start -->
        <?php include 'content/brand-strategy.php';?>
        <!-- INCLUDE OUR-VALUES.PHP end -->
        <hr>
        <!-- INCLUDE OUR-BRANDS.PHP start -->
        <?php include 'content/visual-identity.php';?>
        <!-- INCLUDE OUR-BRANDS.PHP  end -->
        <hr>
    </main>
</body>

</html>