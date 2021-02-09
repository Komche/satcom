<?php
empty($_GET['modif']) ? $title = "Ajouter slider" : $title = "Modifier slider";

$slider = null;
if (!empty($_GET['modif'])) {
    extract($_GET);
    $slider = Manager::getData('slider', 'id_slider', $modif)['data'];
}

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
        <div class="x_panel">
            <div class="x_title">
                <h2>Ajouter image déroulante</small></h2>
                <!-- <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                        <li><a class="dropdown-item" href="#">Settings 1</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul> -->
                <div class="clearfix"></div>
            </div>
            <div class="x_content" style="display: block;">
                <br>
                <form enctype="multipart/form-data" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="img1">Image 1 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" value="<?= (!empty($_GET['modif']) && is_array($slider)) ? $slider['img1'] : '' ?>" id="img1" name="img1" required="required" class="form-control">

                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="text1" class="col-form-label col-md-3 col-sm-3 label-align">Text 1</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input value="<?= (!empty($_GET['modif']) && is_array($slider)) ? $slider['text1'] : '' ?>" id="text1" class="form-control" type="text" name="text1">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="img2">Image 2 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" value="<?= (!empty($_GET['modif']) && is_array($slider)) ? $slider['img2'] : '' ?>" id="img2" name="img2" required="required" class="form-control">

                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="text2" class="col-form-label col-md-3 col-sm-3 label-align">Text 2</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input value="<?= (!empty($_GET['modif']) && is_array($slider)) ? $slider['text2'] : '' ?>" id="text2" class="form-control" type="text" name="text2">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="img3" class="col-form-label col-md-3 col-sm-3 label-align">Image 3</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="img3" class="form-control" type="file" value="<?= (!empty($_GET['modif']) && is_array($slider)) ? $slider['img3'] : '' ?>" name="img3">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="text3" class="col-form-label col-md-3 col-sm-3 label-align">Text 3</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input value="<?= (!empty($_GET['modif']) && is_array($slider)) ? $slider['text3'] : '' ?>" id="text3" class="form-control" type="text" name="text3">
                        </div>
                    </div>
                   
                    <?php
                    if (!empty($_SESSION['messages'])) {
                        Manager::messages($_SESSION['messages']['msg'], $_SESSION['messages']['code']);
                    }
                    ?>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <!-- <button class="btn btn-primary" type="button">Cancel</button> -->
                            <button class="btn btn-primary" type="reset">Effacer</button>
                            <button type="submit" class="btn btn-success">Valider</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>