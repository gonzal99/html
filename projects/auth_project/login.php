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
    <form action="verify.php" data-abide>
        <div class="name-field">
            <label>Username<small>required</small>
            <input type="alpha_numeric" required>
            </label>
            <small class="error">Username cannot contain symbols</small>
        </div>
    </form>
</div>
<script src="../../js/vendor/jquery.js"></script>
<script src="../../js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
