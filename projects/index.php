<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="../css/foundation.css"/>
    <script src="../js/vendor/modernizr.js"></script>
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
            <li><a href="#">Menu Item 1</a></li>
            <li class="has-dropdown"><a href="#">Tools</a>
                <ul class="dropdown">
                    <li><a href="#">Submenu Item 1</a></li>
                    <li><a href="#">Submenu Item 2</a></li>
                    <li><a href="#">Submenu Item 3</a></li>
                </ul>
            </li>
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
<?php
$project = $_GET['project'];
echo $project;
$query = "SELECT project_name FROM projects WHERE project_name=$project";
echo $query;
$result = $link->query($query ) or die("error ". mysqli_error($result));
$projectName = $result[1];
echo $projectName;
?>
<div class="row">
    <div class="large-12 column text-center">
        <h1><?php echo $projectName;?></h1>
    </div>
</div>
<script src="../js/vendor/jquery.js"></script>
<script src="../js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
