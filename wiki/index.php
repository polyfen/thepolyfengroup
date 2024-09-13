<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Team Wiki | Polyfen</title>
        <!-- INCLUDE HEAD.PHP start --->
        <?php include 'includes/head.php';?>
        <!-- INCLUDE HEAD.PHP end -->
    </head>

    <body class="light-mode docs-theme polyfen-site">

        <!-- INCLUDE HELLO's start -->
        <?php include '../includes/hellobar.php';?>
        <?php include '../includes/navbar.php';?>
        <!-- INCLUDE HELLO's end -->

        <div class="main-wrapper">
            <aside>
                <a href="/" class="logo">
                    <img src="imgs/the-polyfen-group-logo.svg" alt="The Polyfen group" height="40px"
                        width="auto">
                </a>
                <h2 class="caption uppercase">Team Wiki</h2>
                <ul class="table-of-contents">
                    <li><a href="#tech-stack" class="caption">1. Tech stack</a></li>
                    <li><a href="#sprints" class="caption">2. Sprints</a></li>
                    <li><a href="#team-messaging" class="caption">3. Team Messaging</a></li>
                    <li><a href="#branding-workflow" class="caption">4. Branding workflow</a></li>
                </ul>
            </aside>
            
            <main>
                <section class="cover">
                    <img src="imgs/videogame-illustratrion.svg" alt="Videogame Illustration" height="200px" width="auto">
                    <h1 class="title-1">Team Wiki</h1>
                </section>
                <hr class="small-separator">
                <!-- INCLUDE TECH-STACK.PHP start  -->
                <?php include 'content/tech-stack.php';?>
                <!-- INCLUDE TECH-STACK.PHP end -->
                <hr>
                <!-- INCLUDE SPRINTS.PHP start -->
                <?php include 'content/sprints.php';?>
                <!-- INCLUDE SPRINTS.PHP end -->
                <hr>
                <!-- INCLUDE TEAM-MESSAGING.PHP start -->
                <?php include 'content/team-messaging.php';?>
                <!-- INCLUDE TEAM-MESSAGING.PHP end -->
                <hr>
                <!-- INCLUDE BRANDING-WORKFLOW.PHP start -->
                <?php include 'content/branding-workflow.php';?>
                <!-- INCLUDE BRANDING-WORKFLOW.PHP end -->
            </main>
        </div>

        <script src="https://polykit.xyz/app/js/polykit-v0-3.js"></script>

    </body>

</html>