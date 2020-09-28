<?php
    $title = " Actualités";
    ob_start();
?>
        <section id="testimonies" class="divider-wrapper opaqued" data-parallax="scroll" data-image-src="" data-speed="0.7">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading" style="color: #1C563D;"><strong>Actualités</strong> </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                    <ul class="direction-aware owl-carousel wow fadeInUp" data-items="1" data-items-tablet="[768,1]"  data-items-mobile="[479,1]">
                    <?php
                                $sql = "SELECT * FROM activite p, type_activite t WHERE t.id_type_activite=p.type_activite AND type_activite=?";

                                $data = Manager::getMultiplesRecords($sql, [2]);
                                if (is_array($data) || is_object($data)) :
                                    foreach ($data as $key => $value) :
                                ?>
                        <li>
                            <div class="col-xs-5">
                                <img src="admin/<?= $value['src_img'] ?>" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-7 item-caption">
                                <p style="color: #333;"><?= $value['detail'] ?></p>
                                <span><strong style="font-size: 16px; color: #1C563D;"><?= $value['libelle_activite'] ?></strong></span>
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
    </section>
   
<?php
    $content = ob_get_clean();
    require('template.php');
  ?>
