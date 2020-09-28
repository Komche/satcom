<?php
$title = "Ajouter une activité";

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
        <h2>Activité</small></h2>
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
            <label class="col-form-label col-md-3 col-sm-3  label-align">Nom de l'activité<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <input class="form-control" name="libelle_activite" placeholder="ex. Reception des matériels" required="required">
            </div>
          </div>
          <div class="field item form-group">
            <label class="col-form-label col-md-3 col-sm-3  label-align">Type activité<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6">
              <select class="form-control" required name="type_activite" id="type_activite">
                <?php
                $data = Manager::getData('type_activite')['data'];
                if (is_array($data) || is_object($data)) :
                  foreach ($data as $key => $value) :
                ?>
                    <option value="<?= $value['id_type_activite'] ?>"><?= $value['libelle_type_activite'] ?></option>
                <?php
                  endforeach;
                endif;
                ?>
              </select>
            </div>
          </div>
          <div class="x_content">
            <div id="alerts"></div>
            <label class="col-form-label col-md-12 col-sm-12">Detail<span class="required">*</span></label>
            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
              <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                <ul class="dropdown-menu">
                </ul>
              </div>

              <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a data-edit="fontSize 5">
                      <p style="font-size:17px">Huge</p>
                    </a>
                  </li>
                  <li>
                    <a data-edit="fontSize 3">
                      <p style="font-size:14px">Normal</p>
                    </a>
                  </li>
                  <li>
                    <a data-edit="fontSize 1">
                      <p style="font-size:11px">Small</p>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="btn-group">
                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
              </div>

              <div class="btn-group">
                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
              </div>

              <div class="btn-group">
                <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
              </div>

              <div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                <div class="dropdown-menu input-append">
                  <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                  <button class="btn" type="button">Add</button>
                </div>
                <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
              </div>

              <div class="btn-group">
                <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
              </div>

              <div class="btn-group">
                <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
              </div>
            </div>

            <div id="editor-one" class="editor-wrapper"></div>

            <textarea name="detail" id="detail" style="display:none;"></textarea>

            <br />

            <div class="ln_solid"></div>
          </div>
          <div class="form-group" style="text-align: center;">
            <img src="<?= (!empty($_GET['modif'])) ? $src : 'public/img/150x150.png' ?>" id="profile_img" style="height: 100px; border-radius: 50%" alt="">
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