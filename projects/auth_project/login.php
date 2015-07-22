<?php
    session_start();
    $_SESSION['badUserPassword'] = NULL;
?>
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
<div class="row">
    <div class="large-12 column panel text-center">
        <h1>Please login:</h1>
    </div>
    <form action="verify.php" method="POST" data-abide>
        <div class="name-field">
            <label>Username<small>required</small>
            <input type="alpha_numeric" required name="uName">
            </label>
            <small class="error">Username cannot contain symbols</small>
        </div>
        <div class="password-field">
            <label>Password<small>required</small>
            <input type="password" required name="password">
            </label>
        </div>
        <?php
        $bad = $_SESSION['badUserPassword'];
        if($bad != null){
            echo "<small class=\"error\">Bad username or Password, please try again.</small>";
        }
        ?>
        <button type="submit">Submit</button>
    </form>
</div>
<script src="../../js/vendor/jquery.js"></script>
<script src="../../js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
