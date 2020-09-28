<?php
    $title = "Acceuil";

    ob_start();
?>


<?php
    $content = ob_get_clean();
    require('template.php');
?>

