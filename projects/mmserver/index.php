<?php
session_start();
if (!isset($_SERVER['HTTPS'])) {
    header("Location: https://3volution.io/projects/mmserver/index.php");
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>mmserver</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/displayHelper.js"></script>
    <script src="js/postHelper.js"></script>
</head>
<body>
<div class="off-canvas-wrap fillPage" data-offcanvas>
    <div class="inner-wrap">
        <nav class="tab-bar">
            <section class="left-small">
                <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
            </section>
            <section class="right tab-bar-section">
                <h1 class="title"><a href="index.php">PlexWire</a></h1>
            </section>
        </nav>
        <aside class="left-off-canvas-menu">
            <ul class="off-canvas-list">
                <li><label>Menu</label></li>
                <?php
                $link = mysqli_connect('localhost', 'public', 'XZmMSa7fZHfR5a8C', 'mmserver') or die("error " . mysqli_error($link));
                $username = $_SESSION['username'];
                $user_status = $_SESSION['isPayed'];
                echo "<li><a href='index.php?page=donate'>Donate</a></li> ";
                if ($user_status == 1) {
                    echo "<li><a href='#'>Media Request</a></li> ";
                } else {
                    echo "<li><a href='#'>Sign Up</a></li> ";
                }
                if (isset($_SESSION['username'])) {
                    echo "<li><label>Account</label></li>
                <li><a href=\"logout.php\">Logout</a></li>";
                }
                ?>


            </ul>
        </aside>
        <section class="main-section ">
            <br>
            <br>
            <?php
            if (isset($_SESSION['username'])) {
                echo "<div class=\"row panel\" align=\"center\" id=\"question\" style=\"display:none\">";
            } else {
                echo "<div class=\"row panel\" align=\"center\" id=\"question\">";
            }
            ?>

            <div class="large-12 column">
                <p>Are you already registered?</p>
            </div>
            <div class="large-6 column">
                <button id="yes">Yes</button>
            </div>
            <div class="large-6 column">
                <button id="no">No</button>
            </div>
    </div>
    <div class="row panel callout" id="reg" style="display:none">
        <form name="loginform">
            <div class="row">
                <div class="large-6 column">
                    <label style="color: black !important;">Username</label>
                    <input type="text" name="username" id="username">
                </div>
            </div>
            <div class="row">
                <div class="large-6 column">
                    <label style="color: black !important;">Password</label>
                    <input type="password" name="password" id="password">
                </div>
            </div>

            <div class="row">
                <div class="large-4 large-offset-4 column">
                    <button type="button" class="button" autofocus onclick="post();">Submit</button>
                </div>
            </div>
        </form>
        <div class="large-12 column text-center">
            <label id="status" style="color: black !important;></label>
                </div>
            </div>

            <div class=" id="nreg" style="display:none">

        </div>
    </div>
    <div class="row">
        <?php
        if ($_GET['page'] == "donate") {
            include "php/donate.php";
        }
        ?>
    </div>
    </section>
    <a class="exit-off-canvas"></a>
</div>
</div>


<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
