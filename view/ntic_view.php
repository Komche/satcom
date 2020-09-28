<?php
$title = " Technologies";
ob_start();
?>
<section id="filterable-portfolio">
    <h2 style="text-align: center; color: #1C563D;">Changement avec la NTIC</h2>
    <div class="section-inner">
        <div class="container">
            <div class="row wow fadeInUp">
                <?php
                $sql = "SELECT * FROM produit p, type_produit t WHERE t.id_type_produit=p.type_produit";
                $sql_2 = "SELECT * FROM type_produit";
                $data = Manager::getMultiplesRecords($sql);
                $data_2 = Manager::getMultiplesRecords($sql_2);
                if (is_array($data_2) || is_object($data_2)) :
                ?>
                    <ul class="portfolio-filter gap text-center list-inline wow fadeInDown">
                        <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">Tous</a></li>
                        <?php
                        foreach ($data_2 as $key => $value) :

                        ?>
                            <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".<?= $value['id_type_produit'] ?>"><?= $value['libelle_type_produit'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <!--/#portfolio-filter-->

                    <ul class="portfolio-items col-3 isotope direction-aware">
                        <?php
                        foreach ($data as $key => $value) :

                        ?>
                            <li class="col-md-4 portfolio-item da-item <?= $value['id_type_produit'] ?> isotope-item">
                                <a class="lb-link" href="admin/<?= $value['src_img'] ?>" title="View Image">
                                    <img src="admin/<?= $value['src_img'] ?>" class="img-responsive" alt="">
                                    <div>
                                        <div class="portfolio-hover-content">
                                            <i class="pe-7s-close fa-3x"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-caption">
                                    <h4><?= $value['libelle_produit'] ?></h4>

                                </div>
                            </li>
                        <?php endforeach; ?>


                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require('template.php');
?>