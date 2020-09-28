<?php
$title = " Activites";
ob_start();
?>
<!-- Section Activites-->
<section style="background: #1C563D;">
    <div>
    </div>
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInDown">
                    <h2 class="section-heading" style="color: #fff;"><strong>Nos Activités</strong></h2>

                </div>
                <div class="col-md-12">
                    <div id="post-content" class="gap row">
                        <div class="col-md-12">
                            <ul class="direction-aware row">
                                <?php
                                $sql = "SELECT * FROM activite p, type_activite t WHERE t.id_type_activite=p.type_activite AND type_activite=?";

                                $data = Manager::getMultiplesRecords($sql, [1]);
                                if (is_array($data) || is_object($data)) :
                                    foreach ($data as $key => $value) :
                                ?>
                                        <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                            <a class="view-link" href="admin/<?= $value['src_img'] ?>" title="View Post">
                                                <img src="admin/<?= $value['src_img'] ?>" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="item-caption">
                                                <h4 class="pull-left"><?= $value['libelle_activite'] ?></h4>

                                                <a class="pull-right btn btn-primary btn-outlined" href="#">Lire Plus</a>
                                            </div>
                                        </li>
                                <?php endforeach;
                                endif;
                                ?>
                               


                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require('template.php');
?>