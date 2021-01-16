<?php
empty($_GET['modif']) ? $title = "Ajouter un membre" : $title = "Modifier un membre";

$equipe = null;
if (!empty($_GET['modif'])) {
    extract($_GET);
    $equipe = Manager::getData('equipe', 'id_equipe', $modif)['data'];
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
                <h2>Memebre d'équipe</small></h2>
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
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nom">Nom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input value="<?= (!empty($_GET['modif']) && is_array($equipe)) ? $equipe['nom'] : '' ?>" type="text" id="nom" name="nom" required="required" class="form-control" data-parsley-id="5">

                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="prenom">Prénom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" value="<?= (!empty($_GET['modif']) && is_array($equipe)) ? $equipe['prenom'] : '' ?>" id="prenom" name="prenom" required="required" class="form-control" data-parsley-id="7">

                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="poste" class="col-form-label col-md-3 col-sm-3 label-align">Poste</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="poste" class="form-control" type="text" value="<?= (!empty($_GET['modif']) && is_array($equipe)) ? $equipe['poste'] : '' ?>" name="poste" data-parsley-id="9">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="twitter" class="col-form-label col-md-3 col-sm-3 label-align">Lien compte twitter</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input value="<?= (!empty($_GET['modif']) && is_array($equipe)) ? $equipe['twitter'] : '' ?>" id="twitter" class="form-control" type="text" name="twitter" data-parsley-id="8">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="facebook" class="col-form-label col-md-3 col-sm-3 label-align">Lien compte facebook</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input value="<?= (!empty($_GET['modif']) && is_array($equipe)) ? $equipe['facebook'] : '' ?>" id="facebook" class="form-control" type="text" name="facebook" data-parsley-id="10">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="linkden" class="col-form-label col-md-3 col-sm-3 label-align">Lien compte linkden</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input value="<?= (!empty($_GET['modif']) && is_array($equipe)) ? $equipe['linkden'] : '' ?>" id="linkden" class="form-control" type="text" name="linkden" data-parsley-id="11">
                            <input hidden class="form-control" value="<?= (!empty($_GET['modif']) && is_array($equipe)) ? $equipe['utilisateur'] : $_SESSION['user-sat']['id_utilisateur'] ?>" type="number" name="utilisateur" required="required">
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <img src="<?= (!empty($_GET['modif'])) ? $equipe['src_img'] : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="photo">
                        <!-- hidden file input to trigger with JQuery  -->
                        <input type="file" name="src_img" id="profile_input" value="" style="display: none;">
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