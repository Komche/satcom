<?php
    $title = " Contact";
    ob_start();
?>
     <!-- Section contact -->


    <?php
    $content = ob_get_clean();
    require('template.php');
  ?>