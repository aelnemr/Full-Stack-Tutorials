<?php

function _header_admin($pageName) {
    ?>

    <html>
    <head>
        <title> <?php echo APP_NAME; ?> | <?php echo $pageName; ?> </title>
        <link rel="stylesheet" href="<?php echo CSS_DIR; ?>bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo CSS_ADMIN_DIR; ?>base.css">
    </head>

    <body>
    <a href="<?php echo BASE_ADMIN; ?>logout.php">Logout</a>
    Header
    <hr>
    Navbar
    <hr>
<?php
}

function _footer_admin() {
    ?>

    <hr>
    Footer

    </body>
    </html>


<?php
}