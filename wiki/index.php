<!DOCTYPE html>
<html lang="en">

<head>
    <title>Team Wiki | Polyfen</title>

    <!-- INCLUDE HEAD.PHP start --->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

</head>

<body>
    <!-- INCLUDE HELLO's start -->
    <?php include '../includes/hellobar.php';?>
    <?php include '../includes/navbar.php';?>
    <!-- INCLUDE HELLO's end -->

    <div class="sub-sites-container">
        <nav id="navbar" class="sub-sites">
            <a href="/" rel="dofollow" class="link-logo">
                <img class="plfn-logo" src="imgs/the-polyfen-group-logo.svg" alt="The Polyfen group" height="40px"
                    width="auto">
            </a>
            <h2 class="caption">Team Wiki</h2>
            <ul class="toc">
                <li><a href="#tech-stack" class="caption">1. Tech stack</a></li>
                <li><a href="#sprints" class="caption">2. Sprints</a></li>
                <li><a href="#team-messaging" class="caption">3. Team Messaging</a></li>
                <li><a href="#naming-conventions" class="caption">4. Naming Conventions</a>
                    <ul>
                        <li><a href="#client-codes" class="caption">4.1. Client Codes</a></li>
                        <li><a href="#project-types" class="caption">4.2. Project Types</a></li>
                    </ul>
                </li>
                <li><a href="#projects-and-tasks" class="caption">5. Projects &amp; Tasks</a>
                    <ul>
                        <li><a href="#backlog" class="caption">5.1. Backlog</a></li>
                        <li><a href="#to-do" class="caption">5.2. To Do</a></li>
                        <li><a href="#in-progress" class="caption">5.3. In Progress</a></li>
                        <li><a href="#for-review" class="caption">5.4. For Review</a></li>
                        <li><a href="#complete" class="caption">5.5. Complete</a></li>
                        <li><a href="#archived" class="caption">5.6. Archived</a></li>
                    </ul>
                </li>
                <li><a href="#time-tracking" class="caption">6. Time tracking</a></li>
                <li><a href="#getting-paid" class="caption">7. Getting paid</a></li>
                <li><a href="#time-off" class="caption">8. Time off</a></li>
                <li><a href="#google-drive" class="caption">9. Google Drive</a></li>
                <li><a href="#branding-workflow" class="caption">10. Branding workflow</a></li>
                <li><a href="#development-workflow" class="caption">11. Development workflow</a>
                    <ul>
                        <li><a href="#website-project-set-up" class="caption">11.1. Website Project Set-up</a></li>
                        <li><a href="#github-commits" class="caption">11.2. Github Commits</a></li>
                        <li><a href="#changelog-update" class="caption">11.3. Changelog Update</a></li>
                        <li><a href="#plkt-release-checklist" class="caption">11.4. PLKT release checklist</a>
                            <ul>
                                <li><a href="#release-checklist" class="caption">11.4.1 New Release Checklist</li>
                                <li><a href="#version-checklist" class="caption">11.4.2 New Version Checklist</a></li>
                        </li>
                    </ul>
                </li>
                <li><a href="#accounting-workflow" class="caption">12. Accounting workflow</a></li>
            </ul>
        </nav>
        <main class="sub-sites">
            <section class="cover">
                <img src="imgs/videogame-illustratrion.svg" alt="Videogame Illustration" height="200px" width="auto">
                <h1 class="title-1">Team Wiki</h1>
            </section>
            <hr>
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
            <!-- INCLUDE NAMING-CONVENTIONS.PHP start -->
            <?php include 'content/naming-conventions.php';?>
            <!-- INCLUDE NAMING-CONVENTIONS.PHP end -->
            <hr>
            <!-- INCLUDE PROJECTS-AND-TASKS.PHP start -->
            <?php include 'content/projects-and-tasks.php';?>
            <!-- INCLUDE PROJECTS-AND-TASKS.PHP end -->
            <hr>
            <!-- INCLUDE TIME-TRACKING.PHP start -->
            <?php include 'content/time-tracking.php';?>
            <!-- INCLUDE TIME-TRACKING.PHP end -->
            <hr>
            <!-- INCLUDE GETTING-PAID.PHP start -->
            <?php include 'content/getting-paid.php';?>
            <!-- INCLUDE GETTING-PAID.PHP end -->
            <hr>
            <!-- INCLUDE VACATIONS-HOLIDAYS-AND-DAYS-OFF.PHP start -->
            <?php include 'content/time-off.php';?>
            <!-- INCLUDE VACATIONS-HOLIDAYS-AND-DAYS-OFF.PHP end -->
            <hr>
            <!-- INCLUDE GOOGLE-DRIVE.PHP start -->
            <?php include 'content/google-drive.php';?>
            <!-- INCLUDE GOOGLE-DRIVE.PHP end -->
            <hr>
            <!-- INCLUDE BRANDING-WORKFLOW.PHP start -->
            <?php include 'content/branding-workflow.php';?>
            <!-- INCLUDE BRANDING-WORKFLOW.PHP end -->
            <hr>
            <!-- INCLUDE DEVELOPMENT-WORKFLOW.PHP start -->
            <?php include 'content/development-workflow.php';?>
            <!-- INCLUDE DEVELOPMENT-WORKFLOW.PHP end -->
            <hr>
            <!-- INCLUDE ACCOUNTING-WORKFLOW.PHP start -->
            <?php include 'content/accounting-workflow.php';?>
            <!-- INCLUDE ACCOUNTING-WORKFLOW.PHP end -->
            <hr>
        </main>
    </div>
</body>

</html>