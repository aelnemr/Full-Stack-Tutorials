<?php

require_once '../config/config.php';

_header_admin("ADMIN");

if (!isset($_SESSION['user'])) {
    exit(header("Location:" . BASE_ADMIN . "login.php"));
}

?>

<div class="container">
    ADMIN
</div>


<?php
_footer_admin();
?>