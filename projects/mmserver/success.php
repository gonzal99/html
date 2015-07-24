<?php
    session_start();
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
<p>success, welcome </p>
<?php
 echo $_SESSION['username'];
?>
<button onclick="<?php session_destroy(); header("Location: index.php"); ?>">Logout</button>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
