<?php
if(isset($_SERVER['HTTPS'])){
    header("Location: https://3volution.io");
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>3volution</title>
    <link rel="stylesheet" href="css/foundation.css"/>
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="index.php">3volution</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
        <ul class="right">

            <li class="has-dropdown"><a href="#">Projects</a>
                <ul class="dropdown">
                    <?php
                    $link = mysqli_connect('localhost','public','XZmMSa7fZHfR5a8C','main') or die("error ". mysqli_error($link));
                    $query = "SELECT * FROM projects";
                    $result = $link->query($query);
                    while($row = mysqli_fetch_array($result)){
                        echo "<li><a href='projects/?project=$row[4]'>$row[1]</a></li>";
                    }
                    ?>
                </ul>
            </li>
            <li class="has-form">
                <div class="row collapse">
                    <div class="large-8 small-9 columns">
                        <input type="text" placeholder="Search">
                    </div>
                    <div class="large-4 small-3 columns">
                        <a href="#" class="alert button expand">Go</a>
                    </div>
                </div>
            </li>
        </ul>
    </section>
</nav>
<br>

<div class="row">
    <div class="large-12 column">
        <img src="img/hd1080.png">
    </div>
</div>
<br>

<div class="row section1 sections">

    <div class="large-offset-1 column left-align">
        <h1>About</h1>
    </div>

    <div class="large-offset-2">

    </div>

</div>
<div class="row section2 sections">
    <div class="large-offset-1 column left-align">
        <h1>What we do...</h1>
    </div>

    <div class="large-offset-2">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis suscipit sagittis. Quisque posuere
            massa elit, sed gravida arcu suscipit id. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae; Maecenas ac augue ut ex ultricies varius sit amet sit amet lorem. In at dui
            dignissim, fringilla elit eu, accumsan libero. Sed porttitor sollicitudin arcu, nec aliquam urna luctus ac.
            Integer vestibulum, augue ut volutpat bibendum, massa nibh viverra turpis, ut fermentum sapien felis vitae
            ligula. Donec in mattis quam. Etiam tincidunt tempus est in viverra.
        </p>
    </div>

</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
