<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Business Plan | Polyfen</title>
        <!-- INCLUDE HEAD.PHP start --->
        <?php include 'includes/head.php';?>
        <!-- INCLUDE HEAD.PHP end -->
    </head>

    <body class="light-mode docs-theme polyfen-site business-plan-page">

        <!-- INCLUDE HELLO's start -->
        <?php include '../includes/hellobar.php';?>
        <?php include '../includes/navbar.php';?>
        <!-- INCLUDE HELLO's end -->

        <div class="main-wrapper">
            <aside>
                <a href="/" class="logo">
                    <img src="imgs/the-polyfen-group-logo.svg" alt="The Polyfen Group" height="40px" width="auto">
                </a>
                <h2 class="caption uppercase">Business Plan</h2>
                <ul class="table-of-contents">
                    <li><a href="#overview" class="caption">1. Overview</a></li>
                    <li><a href="#purpose" class="caption">2. Purpose</a></li>
                    <li><a href="#core-values" class="caption">3. Core Values</a></li>
                    <ul>
                        <li><a href="#transparency" class="caption">3.1. Transparency</a></li>
                        <li><a href="#collaboration" class="caption">3.2. Collaboration</a></li>
                        <li><a href="#exploration" class="caption">3.3. Exploration</a></li>
                        <li><a href="#flexibility" class="caption">3.4. Flexibility</a></li>
                    </ul>
                    <li><a href="#services" class="caption">4. Services</a></li>
                    <ul>
                        <li><a href="#subscribe" class="caption">4.1. Subscribe</a></li>
                        <li><a href="#hire" class="caption">4.2. Hire</a></li>
                        <li><a href="#build" class="caption">4.3. Build</a></li>
                    </ul>
                    <li><a href="#buyer-personas" class="caption">5. Buyer Personas</a></li>
                    <li><a href="#value-proposition" class="caption">6. Value Proposition</a></li>
                    <ul>
                        <li><a href="#low-cost-high-value" class="caption">6.1. Low cost, high value</a></li>
                        <li><a href="#owner-managed" class="caption">6.2. Owner-managed</a></li>
                        <li><a href="#end-to-end-service" class="caption">6.3. End-to-End service</a></li>
                        <li><a href="#fast-track-kick-off" class="caption">6.4. Fast-track kick-off</a></li>
                        <li><a href="#top-tier-talent" class="caption">6.5. Top-tier talent</a></li>
                        <li><a href="#near-shore-availability" class="caption">6.6. Near-shore availability</a></li>
                    </ul>
                </ul>
            </aside>

            <main> 
                <section class="cover">
                    <img src="imgs/folder-illustration.svg" alt="Folder Illustration" height="200px" width="auto" >
                    <h1 class="title-1">Business Plan</h1>
                </section>
                <hr>
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
                <?php include 'content/services.php';?>
                <!-- INCLUDE OUR-VALUES.PHP end -->
                <hr>
                <!-- INCLUDE OUR-VALUES.PHP start -->
                <?php include 'content/target.php';?>
                <!-- INCLUDE OUR-VALUES.PHP end -->
                <hr>
                <!-- INCLUDE OUR-VALUES.PHP start -->
                <?php include 'content/value-proposition.php';?>
                <!-- INCLUDE OUR-VALUES.PHP end -->
                <hr>
            </main>
        </div>
        
    </body>

    <script src="https://polykit.xyz/app/js/polykit-v0-3.js"></script>

</html>