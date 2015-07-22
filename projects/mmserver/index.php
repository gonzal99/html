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
    <script>
        $(document).ready(function () {
            $('#yes').on('click', function () {
                $('#question').hide('slow');
                $('#reg').show('slow');
            });
        });
        $(document).ready(function () {
            $('#no').on('click', function () {
                $('#question').hide('slow');
                $('#nreg').show('slow');
            });
        });
    </script>
</head>
<body>
<div class="off-canvas-wrap" data-offcanvas>
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
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
                <li><a href="#">Item 4</a></li>
            </ul>
        </aside>
        <section class="main-section">
            <div class="row panel" align="center">
                <div class="large-12 column" id="question">
                    <p>Are you already registered?</p>
                </div>
                <div class="large-6 column">
                    <button id="yes">Yes</button>
                </div>
                <div class="large-6 column">
                    <button id="no">No</button>
                </div>
            </div>
            <div class="row" id="reg" style="display:none">
                <p>reg</p>
            </div>
            <div class="row" id="nreg" style="display:none">
                <p>nreg</p>
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
