<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Auth Project</title>
    <link rel="stylesheet" href="../../css/foundation.css"/>
    <script src="../../js/vendor/modernizr.js"></script>
</head>
<body>
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="../index.php">3volution</a></h1>
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
                        echo "<li><a href='?project=$row[4]'>$row[1]</a></li>";
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
<div class="large-12 column large-centered">
    <button><a href="login.php">Login</a></button>
</div>
<script src="../../js/vendor/jquery.js"></script>
<script src="../../js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
