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
        <h2 class="caption">Brand Guidelines</h2>
        <ul>
            <li><a href="#download-assets" class="caption">1. Download assets</a></li>
            <li><a href="#market-research" class="caption">2. Market research</a></li>
            <li><a href="#brand-strategy" class="caption">3. Brand strategy</a></li>
            <li><a href="#visual-identity" class="caption">4. Visual identity</a></li>
        </ul>
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
            <img class="plfn-logo" src="imgs/polyfen-logo.svg" alt="Polyfen" height="80px" width="auto">
            <img src="imgs/lightbulb-illustration.svg" alt="Folder Illustration" height="250px" width="auto">
            <h1 class="title-2">Brand Guidelines</h1>
            <h2 class="caption">The Polyfen Group LLC<br>Est. 2018</h2>
        </section>
        <hr>
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
        <!-- INCLUDE OUR-TEAM.PHP start -->
        <?php include 'content/our-team.php';?>
        <!-- INCLUDE OUR-TEAM.PHP end  -->
        <hr>
    </main>
</body>

</html>