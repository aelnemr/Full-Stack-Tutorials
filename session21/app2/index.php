<?php
require_once 'config/config.php';

_header('HOME');
//ECHO "Location:" . BASE_URL . "404.php";

?>

<div class="container">
    <?php print_r(getAllCar()); ?>
</div>



<?php
_footer();