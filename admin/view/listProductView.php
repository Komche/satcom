<?php
$title = "Listes produit";

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
        <h2>Produits </h2>

        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">

              <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Nom du produit</th>
                    <th>prix</th>
                    <th>Quantité</th>
                    <th>Catégorie</th>
                    <th>État</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>


                <tbody>
                  <?php
                  $sql = "UPDATE produit SET etat=? WHERE quantite<=?";
                  Manager::modifRecord($sql, [0, 3]);
                  $sql = "UPDATE produit SET etat=? WHERE quantite=?";
                  Manager::modifRecord($sql, [-1, 0]);
                  $sql = "SELECT * FROM produit p, type_produit t WHERE t.id_type_produit=p.type_produit";

                  $data = Manager::getMultiplesRecords($sql);
                  if (is_array($data) || is_object($data)) :
                    foreach ($data as $key => $value) :
                  ?>
                      <tr>
                        <td><?= $value['libelle_produit'] ?></td>
                        <td><?= $value['prix'] ?></td>
                        <td><?= $value['quantite'] ?></td>
                        <td><?= $value['libelle_type_produit'] ?></td>
                        <td class="<?= getEtatClass($value['etat']) ?>"><?= getEtat($value['etat']) ?></td>
                        <td><img src="<?= $value['src_img'] ?>" alt="produit" width="100" srcset=""></td>
                        <td><a class="btn btn-primary" href="index.php?action=addProduct&modif=<?= $value['id_produit'] ?>"><i class="fa fa-edit"></i></a>
                          <a class="btn btn-warning" href="index.php?action=product&comment=<?= $value['id_produit'] ?>"><i class="fa fa-comment"></i></a></td>
                      </tr>
                  <?php endforeach;
                  endif; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
require('template.php');
?>