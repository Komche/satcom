<?php
$title = "Commenter produit";
$data = null;
if (!empty($_GET['comment'])) {
  $data = Manager::getData('produit', 'id_produit', $_GET['comment'])['data'];
} else {
  header('Location:index.php');
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
        <h2>Detail</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-3 col-sm-3  profile_left">
          <div class="profile_img">
            <div id="crop-avatar">
              <!-- Current avatar -->
              <img width="100" class="img-responsive avatar-view" src="<?= $data['src_img'] ?>" alt="Avatar" title="Change the avatar">
            </div>
          </div>
          <h3><?= $data['libelle_produit'] ?></h3>
          <a href="index.php?action=vendre&produit=<?= $data['id_produit'] ?>" class="btn btn-primary">Vendre</a>
        </div>
        <div class="col-md-9 col-sm-9 ">

          <div class="profile_title">
            <div class="col-md-6">
              <h2>Description</h2>
            </div>
            <div class="col-md-6">
              <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span><?= strftime('%a %e %b %G', strtotime($value['date_pub'])); ?></span> <b class="caret"></b>
              </div>
              <p><?= $data['detail'] ?></p>
            </div>
          </div>

          <div style="margin-top: 20px;" class="" role="tabpanel" data-example-id="togglable-tabs">
            
            <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">
                <form class="form-horizontal" method="post" action="">
                 
                  <div class="field item form-group">
                    <div class="col-md-12 col-sm-12">
                      <input class="form-control" type="hidden" name="produit" value="<?= $data['id_produit'] ?>" placeholder="Votre nom" required>
                      <input class="form-control" type="hidden" name="utilisateur" value="<?= $_SESSION['user-sat']['id_utilisateur'] ?>" placeholder="Votre nom" required>
                      <textarea class="form-control" name="detail" placeholder="Veuillez écrire votre commentaire"></textarea>
                    </div>
                  </div>
                  <?php
                  if (!empty($_SESSION['messages'])) {
                    Manager::messages($_SESSION['messages']['msg'], $_SESSION['messages']['code']);
                  }
                  ?>
                  <button type="submit" class="btn btn-success">Commenter</button>
                </form>
                <!-- start recent activity -->
                <ul class="messages">
                  <?php
                  $sql = "SELECT cl.nom cln, u.nom, u.prenom, c.detail, date_commentaire, u.src_img uimg,
                  c.client clt, c.utilisateur utl, cl.src_img cimg FROM commentaire c
                  LEFT JOIN client cl ON cl.id_client=c.client
                  LEFT JOIN utilisateur u ON  u.id_utilisateur = c.utilisateur  
                  WHERE  c.produit=?  GROUP BY id_commentaire ORDER BY date_commentaire DESC";

                  $commentaire = Manager::getMultiplesRecords($sql, [$data['id_produit']]);
                  // Manager::showError($commentaire);
                  if (is_array($commentaire) || is_object($commentaire)) :
                    foreach ($commentaire as $key => $value) :

                      $date = new DateTime($value['date_commentaire']);
                      $dateObj   = DateTime::createFromFormat('!m', $date->format('m'));
                      $monthName = $dateObj->format('F'); // March
                  ?>
                      <li>
                        <img src="<?= empty($value['clt']) ? $value['uimg']: $value['cimg']  ?>" class="avatar" alt="Avatar">
                        <div class="message_date">
                          <h3 class="date text-info"><?= strftime('%a %e', strtotime($value['date_commentaire'])); ?></h3>
                          <p class="month"><?= strftime('%b %G', strtotime($value['date_commentaire'])); ?></p>
                        </div>
                        <div class="message_wrapper">
                          <h4 class="heading"><?= empty($value['clt']) ? $value['nom'] . ' ' . $value['prenom'] : $value['cln']  ?></h4>
                          <blockquote class="message"><?= $value['detail'] ?></blockquote>

                        </div>
                      </li>
                  <?php endforeach;
                  endif; ?>

                </ul>
                <!-- end recent activity -->

              </div>

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