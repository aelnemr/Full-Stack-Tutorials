<?php

function _header($pageName) {
    ?>

    <html>
    <head>
        <title> <?php echo APP_NAME; ?> | <?php echo $pageName; ?> </title>
        <link rel="stylesheet" href="<?php echo CSS_DIR; ?>bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo CSS_DIR; ?>base.css">
    </head>

    <body>
    Header
    <hr>
    Navbar
    <hr>
<?php
}

function _footer() {
    ?>

    <hr>
    Footer

    </body>
    </html>


<?php
}