<?php
empty($_GET['modif']) ? $title = "Ajouter un produit" : $title = "Modifier un produit";

$product = null;
if (!empty($_GET['modif'])) {
    extract($_GET);
    $product = Manager::getData('produit', 'id_produit', $modif)['data'];

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
        <h2>Produit</small></h2>
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
        <form enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate method="POST">

          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Nom du produit<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <input value="<?= (!empty($_GET['modif']) && is_array($product)) ? $product['libelle_produit'] : '' ?>" class="form-control" name="libelle_produit" placeholder="ex. Ordinateur HP" required="required">
            </div>
          </div>
          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Pix du produit<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <input value="<?= (!empty($_GET['modif']) && is_array($product)) ? $product['prix'] : '' ?>" class="form-control" type="number" name="prix" placeholder="ex. 1200" required="required">
            </div>
          </div>
          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Quantité du produit<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <input value="<?= (!empty($_GET['modif']) && is_array($product)) ? $product['quantite'] : '' ?>" class="form-control" type="number" name="quantite" placeholder="ex. 5" required="required">
              <input hidden class="form-control" value="<?= (!empty($_GET['modif']) && is_array($product)) ? $product['utilisateur'] : $_SESSION['user-sat']['id_utilisateur'] ?>" type="number" name="utilisateur" required="required">
            </div>
          </div>
          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Type du produit<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <select class="form-control" required name="type_produit" id="type_produit">
                <?php
                $data = Manager::getData('type_produit')['data'];
                if (is_array($data) || is_object($data)) :
                  foreach ($data as $key => $value) :
                ?>
                    <option <?= (!empty($_GET['modif']) && is_array($product)) ?( ($product['type_produit']==$value['id_type_produit']) ? 'selected' : '') : '' ?>  value="<?= $value['id_type_produit'] ?>"><?= $value['libelle_type_produit'] ?></option>
                <?php
                  endforeach;
                endif;
                ?>
              </select>
            </div>
          </div>
          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Detail<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <textarea class="form-control" required="required" name="detail"><?= (!empty($_GET['modif']) && is_array($product)) ? $product['libelle_produit'] : '' ?></textarea></div>
          </div>
          <div class="form-group" style="text-align: center;">
            <img src="<?= (!empty($_GET['modif'])) ? $product['src_img'] : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="">
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