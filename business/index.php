<!DOCTYPE html>
<html lang="en">

<head>
    <title>Business Plan | Polyfen</title>

    <!-- INCLUDE HEAD.PHP start --->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

</head>

<body>
    <?php include '../includes/hello-nav.php';?>
    <nav id="navbar">
    <a href="https://thepolyfengroup.com" rel="dofollow" class="link-logo">
        <img class="plfn-logo" src="imgs/the-polyfen-group-logo.svg" alt="The Polyfen Group" height="40px" width="auto">
    </a>
        <h2 class="caption">Business Plan</h2>

        <ul>
            <li><a href="#overview" class="caption">1. Overview</a></li>
            <li><a href="#purpose" class="caption">2. Purpose</a></li>
            <li><a href="#core-values" class="caption">3. Core Values</a></li>
            <ul>
                <li><a href="#education" class="caption">3.1. Education</a></li>
                <li><a href="#collaboration" class="caption">3.2. Collaboration</a></li>
                <li><a href="#flexibility" class="caption">3.3. Flexibility</a></li>
                <li><a href="#transparency" class="caption">3.4. Transparency</a></li>
            </ul>
            <li><a href="#family-of-brands" class="caption">4. Family of Brands</a></li>
            <ul>
                <li><a href="#polyfen" class="caption">4.1. Polyfen</a></li>
                <li><a href="#poly-atlas" class="caption">4.2. Poly Atlas</a></li>
                <li><a href="#poly-cookies" class="caption">4.3. Poly Cookies</a></li>
                <li><a href="#poly-qwerty" class="caption">4.4. Poly Qwerty</a></li>
                <li><a href="#polykit" class="caption">4.5. Polykit</a></li>
                <li><a href="#polypress" class="caption">4.6. Polypress</a></li>
                <li><a href="#poly-forum" class="caption">4.7. Poly Forum</a></li>
            </ul>
            <li><a href="#services" class="caption">5. Services</a></li>
            <ul>
                <li><a href="#build" class="caption">5.1. Build</a></li>
                <li><a href="#hire" class="caption">5.2. Hire</a></li>
            </ul>
            <li><a href="#differential" class="caption">6. Differential</a></li>
            <ul>
                <li><a href="#low-cost-high-value" class="caption">6.1. Low cost, High vlaue</a></li>
                <li><a href="#wealth-of-experience" class="caption">6.2. Wealth of Experience</a></li>
                <li><a href="#high-performance" class="caption">6.3. High-Performance</a></li>
                <li><a href="#end-to-end-service" class="caption">6.4. End-to-End Service</a></li>
                <li><a href="#fast-track-kick-off" class="caption">6.5. Fast-track Kick-off</a></li>
                <li><a href="#fast-track-kick-off" class="caption">6.6. Socially-cohesive Team</a></li>
                <li><a href="#fast-track-kick-off" class="caption">6.7. Near-shore Availability</a></li>
            </ul>
            <li><a href="#target" class="caption">7. Target</a></li>
            <br><br>
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
            <img src="imgs/folder-illustration.svg" alt="Folder Illustration" height="200px" width="auto" >
            <h1 class="title-2">Business Plan</h1>
            <h2 class="caption">The Polyfen Group LLC<br>Est. 2018</h2>
        </section>
        <!-- INCLUDE OVERVIEW.PHP start -->
        <?php include 'content/overview.php';?>
        <!-- INCLUDE OVERVIEW.PHP end -->
        <hr>
        <!-- INCLUDE OUR-GOAL.PHP start -->
        <?php include 'content/purpose.php';?>
        <!-- INCLUDE OUR-GOAL.PHP end -->
        <hr>
        <!-- INCLUDE OUR-GOAL.PHP start -->
        <?php include 'content/values.php';?>
        <!-- INCLUDE OUR-GOAL.PHP end -->
        <hr>
        <!-- INCLUDE OUR-VALUES.PHP start -->
        <?php include 'content/brands.php';?>
        <!-- INCLUDE OUR-VALUES.PHP end -->
        <hr>
        <!-- INCLUDE OUR-VALUES.PHP start -->
        <?php include 'content/services.php';?>
        <!-- INCLUDE OUR-VALUES.PHP end -->
        <hr>
        <!-- INCLUDE OUR-VALUES.PHP start -->
        <?php include 'content/differential.php';?>
        <!-- INCLUDE OUR-VALUES.PHP end -->
        <hr>
        <!-- INCLUDE OUR-VALUES.PHP start -->
        <?php include 'content/target.php';?>
        <!-- INCLUDE OUR-VALUES.PHP end -->
        <hr>
    </main>
</body>

</html>