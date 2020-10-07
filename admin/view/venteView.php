<?php
$title = "Vente";
$product = null;
if (!empty($_GET['produit'])) {
  extract($_GET);
  $product = Manager::getData('produit', 'id_produit', $produit)['data'];
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
        <h2>Vente du <?= $product['libelle_produit'] ?> </small></h2>
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
            <label class="col-form-label col-md-3 col-sm-3  label-align">Quantité à vendre<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <input onkeyup="getTotal()" onchange="getTotal()" value="<?= (!empty($_GET['modif']) && is_array($vente)) ? $vente['quantite'] : 1 ?>" min="1" max="<?= $product['quantite'] ?>" class="form-control" type="number" name="quantite" id="quantite" placeholder="ex. 5" required="required">
              <input hidden class="form-control" value="<?= (!empty($_GET['modif']) && is_array($vente)) ? $vente['produit'] : $_GET['produit'] ?>" type="number" name="produit" required="required">
              <input hidden class="form-control" value="<?= (!empty($_GET['modif']) && is_array($vente)) ? $vente['produit'] : $product['quantite'] ?>" type="number" name="max" required="required">
            </div>
          </div>
          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Montant du vente<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <input onkeyup="getTotal()" onchange="getTotal()" value="<?= (!empty($_GET['modif']) && is_array($vente)) ? $vente['montant'] : $product['prix'] ?>" class="form-control" type="number" name="montant" id="montant" placeholder="ex. 1200" required="required">
            </div>
          </div>
          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Montant total<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <input value="<?= (!empty($_GET['modif']) && is_array($vente)) ? $vente['montant_total'] : $product['prix'] ?>" class="form-control" name="montant_total" id="montant_total" placeholder="ex. Ordinateur HP" required="required">
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
  <div class="col-sm-12">
    <div class="card-box table-responsive">

      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>Nom du produit</th>
            <th>Montant</th>
            <th>Quantité</th>
            <th>Montant du vente</th>
            <th>État</th>
            
          </tr>
        </thead>


        <tbody>
          <?php
           $sql = "UPDATE produit SET etat=? WHERE quantite<=?";
           Manager::modifRecord($sql, [0, 3]);
           $sql = "UPDATE produit SET etat=? WHERE quantite=?";
           Manager::modifRecord($sql, [-1, 0]);
          $sql = "SELECT id_vente, montant, v.quantite, montant_total, libelle_produit, etat  FROM produit p, vente v WHERE v.produit=p.id_produit";

          $data = Manager::getMultiplesRecords($sql);
          if (is_array($data) || is_object($data)) :
            foreach ($data as $key => $value) :
          ?>
              <tr>
                <td><?= $value['libelle_produit'] ?></td>
                <td><?= $value['montant'] ?></td>
                <td><?= $value['quantite'] ?></td>
                <td><?= $value['montant_total'] ?></td>
                <td class="<?= getEtatClass($value['etat']) ?>"><?= getEtat($value['etat']) ?></td>
                <!-- <td><a class="btn btn-primary" href="index.php?action=addProduct&modif=<?= $value['id_vente'] ?>"><i class="fa fa-edit"></i></a>
                  </td> -->
              </tr>
          <?php endforeach;
          endif; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>