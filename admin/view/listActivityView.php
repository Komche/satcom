<?php
$title = "les activités";

ob_start();
?>
<div class="page-title">
  <div class="title_left">
    <h3><?= $title ?></h3>
  </div>


</div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Activités</h2>

        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <div class="row">
          <?php
          $sql = "SELECT * FROM activite p, type_activite t WHERE t.id_type_activite=p.type_activite";

          $data = Manager::getMultiplesRecords($sql);
          if (is_array($data) || is_object($data)) :
            foreach ($data as $key => $value) :
          ?>
              <div class="col-md-55">
                <div class="thumbnail">
                  <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="<?= $value['src_img'] ?>" alt="image" />
                    <div class="mask">
                      <p><?= $value['libelle_activite'] ?></p>
                      <div class="tools tools-bottom">
                        <a href="#"><i class="fa fa-link"></i></a>
                        <a href="#"><i class="fa fa-pencil"></i></a>
                        <a href="#"><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="caption">
                    <p><?= $value['detail'] ?></p>
                  </div>
                </div>
              </div>
          <?php endforeach;
          endif;
          ?>
          <div class="col-md-55">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                <div class="mask">
                  <p>Your Text</p>
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p>Snow and Ice Incoming for the South</p>
              </div>
            </div>
          </div>
          <div class="col-md-55">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                <div class="mask">
                  <p>Your Text</p>
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p>Snow and Ice Incoming for the South</p>
              </div>
            </div>
          </div>
          <div class="col-md-55">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                <div class="mask">
                  <p>Your Text</p>
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p>Snow and Ice Incoming for the South</p>
              </div>
            </div>
          </div>
          <div class="col-md-55">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                <div class="mask">
                  <p>Your Text</p>
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p>Snow and Ice Incoming for the South</p>
              </div>
            </div>
          </div>


          <div class="col-md-55">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                <div class="mask no-caption">
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p><strong>Image Name</strong>
                </p>
                <p>Snow and Ice Incoming</p>
              </div>
            </div>
          </div>
          <div class="col-md-55">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                <div class="mask no-caption">
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p><strong>Image Name</strong>
                </p>
                <p>Snow and Ice Incoming</p>
              </div>
            </div>
          </div>
          <div class="col-md-55">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                <div class="mask no-caption">
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p><strong>Image Name</strong>
                </p>
                <p>Snow and Ice Incoming</p>
              </div>
            </div>
          </div>
          <div class="col-md-55">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                <div class="mask no-caption">
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p><strong>Image Name</strong>
                </p>
                <p>Snow and Ice Incoming</p>
              </div>
            </div>
          </div>
          <div class="col-md-55">
            <div class="thumbnail">
              <div class="image view view-first">
                <img style="width: 100%; display: block;" src="images/media.jpg" alt="image" />
                <div class="mask no-caption">
                  <div class="tools tools-bottom">
                    <a href="#"><i class="fa fa-link"></i></a>
                    <a href="#"><i class="fa fa-pencil"></i></a>
                    <a href="#"><i class="fa fa-times"></i></a>
                  </div>
                </div>
              </div>
              <div class="caption">
                <p><strong>Image Name</strong>
                </p>
                <p>Snow and Ice Incoming</p>
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