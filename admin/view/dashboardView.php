<?php
$title = "Dashboard";

ob_start();
?>
<div class="page-title">
  <div class="title_left">
    <h3><?= $title ?></h3>
  </div>


</div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 ">
  
  </div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>