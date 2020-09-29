<?php
$title = " SATCOM";
ob_start();
?>

<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="satimg/s1.jpg" alt="" width="800"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <p style="color: #fff; padding-left:700px;">Installation et configiration des réseaux informatique.</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="satimg/img1.jpg" alt="" width="1400"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 style="padding-top: 440px; color: #fff;">La nouvelle technologie de l'information et de la communication</h2>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="satimg/sat.gif" alt="" width="1400"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <p style="color: orange; padding-bottom: 200px;">Seminaire de formation en informatique! </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="satimg/img11.jpg" alt="" width="1400"></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h3 style="padding-top: 380px; color:blue;padding-left:1000px;">Ordinateurs et accessoires en informatique</h3>
                        </div>
                    </div>
                </div>


            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- End Intro Section -->

<!-- ======= About Us Section ======= -->
<section id="about">
    <div class="container">

        <header class="section-header">
            <div class="col-lg-12 text-center wow fadeInDown">
                <h2 class="section-heading" style="color: #1C563D; "><strong>Qui sommes-nous</strong>
                    <br><br></h2>

            </div>
        </header>

        <div class="row about-cols">

            <div class="col-md-4 wow fadeInUp">
                <div class="about-col" style="height: 500px;">
                    <div class="img">
                        <img src="" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="#">Nos Objectifs</a></h2>
                    <p>
                        Former,faire des installations réseaux et maintenance, dévelloper des applications et mobile</p>
                    <p style="text-align: center;"><a class=" btn btn-success btn-outlined" href="index.php?action=objectif">Lire Plus</a></p>
                </div>
                <br>
                <br>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="about-col" style="height: 500px;">
                    <div class="img">
                        <img src="" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-list-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="#">Ce que nous faisons</a></h2>
                    <p>Spécialisation dans le domaine de l'informatique:</p>
                    <p style="text-align: center;"><a class=" btn btn-success btn-outlined" href="index.php?action=faisons">cliquer ici</a></p>
                </div>
                <br>
                <br>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-col" style="height: 500px;">
                    <div class="img">
                        <img src="" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="#">Notre Vocation</a></h2>
                    <p>Lutter contre l'ignorance dans le monde numérique.</p>
                    <p style="text-align: center;"><a class=" btn btn-success btn-outlined" href="index.php?action=vocation">Lire Plus</a></p>

                </div>
            </div>

        </div>

    </div>
</section><!-- End About Us Section -->

<section>
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInDown">
                    <h2 class="section-heading" style="color: #1C563D; "><strong>Nos Produits</strong></h2>

                </div>
                <div class="col-md-12">
                    <div id="post-content" class="gap row">
                        <div class="col-md-12">
                            <ul class="direction-aware row">
                                <?php
                                $sql = "SELECT * FROM produit p, type_produit t WHERE t.id_type_produit=p.type_produit LIMIT 10";

                                $data = Manager::getMultiplesRecords($sql);
                                if (is_array($data) || is_object($data)) :
                                    foreach ($data as $key => $value) :
                                ?>
                                        <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                            <a class="lb-link" href="admin/<?= $value['src_img'] ?>" style="height:150px; width:150px;" title="Orange">
                                                <img src="admin/<?= $value['src_img'] ?>" style="height: 150px; width:150px;" class="img-responsive" alt="">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="item-caption">

                                                <a class="pull-right btn btn-primary btn-outlined" href="index.php?action=produit1">Lire Plus</a>
                                                <h4 class="pull-left"><?= $value['libelle_produit'] ?></h4>
                                            </div>
                                        </li>
                                <?php endforeach;
                                endif; ?>
                                
                            </ul>
                        </div>
                        <div class="post-navigation" style="text-align: center;">
                            <a class=" btn btn-lg btn-primary btn-outlined" href="index.php?action=produit">Voir autres Produits</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Activites-->
<section>
    <div>
    </div>
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInDown">
                    <h2 class="section-heading" style="color: #1C563D;"><strong>Nos Activités</strong></h2>

                </div>
                <div class="col-md-12">
                    <div id="post-content" class="gap row">
                        <div class="col-md-12">
                            <ul class="direction-aware row">
                                <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                    <a class="view-link" href="#" title="View Post">
                                        <img src="satimg/unite.jpg" class="img-responsive" alt="" style="height: 150px; width: 150px;">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">
                                        <h4 class="pull-left">Unité centrale</h4>

                                        <a class="pull-right btn btn-primary btn-outlined" href="#">Lire Plus</a>
                                    </div>
                                </li>
                                <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                    <a class="view-link" href="#" title="View Post">
                                        <img src="satimg/sat3.jpg" class="img-responsive" alt="" style="height: 150px; width: 150px;">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">
                                        <h4 class="pull-left">Activités réaliser</h4>

                                        <a class="pull-right btn btn-primary btn-outlined" href="#">Lire Plus</a>
                                    </div>
                                </li>
                                <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                    <a class="view-link" href="#" title="View Post">
                                        <img src="satimg/emig.jpg" class="img-responsive" alt="" style="height: 150px; width: 150px;">
                                        <div>
                                            <div class="portfolio-hover-content">
                                                <i class="pe-7s-close fa-3x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item-caption">
                                        <h4 class="pull-left">Présentation des projets</h4>

                                        <a class="pull-right btn btn-primary btn-outlined" href="#">Lire Plus</a>
                                    </div>
                                </li>


                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section equipe-->
<section id="team" class="divider-wrapper opaqued" data-parallax="scroll" data-image-src="" data-speed="0.7" style="background: #1C563D;">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInDown">
                    <h2 class="section-heading"><strong>Notre Equipe</strong> </h2>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-md-3">
                    <div class="team-member">
                        <div class="team-card">
                            <img src="satimg/img5.jpg" class="img-responsive" alt="" style="height: 300px;">
                            <ul class="list-inline social-buttons">
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <h4>Ali Soumana</h4>
                        <p class="text-muted">Directeur Général</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member">
                        <div class="team-card">
                            <img src="assets/img/team/team2.jpg" class="img-responsive" alt="" style="height: 300px;">
                            <ul class="list-inline social-buttons">
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <h4>DDK</h4>
                        <p class="text-muted">Camera man</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member">
                        <div class="team-card">
                            <img src="assets/img/team/team3.jpg" class="img-responsive" alt="" style="height: 300px;">
                            <ul class="list-inline social-buttons">
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <h4>Barry</h4>
                        <p class="text-muted">Marketeur</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team-member">
                        <div class="team-card">
                            <img src="assets/img/team/team4.jpg" class="img-responsive" alt="" style="height: 300px;">
                            <ul class="list-inline social-buttons">
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <h4>Habsatou</h4>
                        <p class="text-muted">Communicatrice</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <ul class="direction-aware owl-carousel wow fadeInUp" data-items="1" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                        <li>
                            <div class="col-xs-5">
                                <img src="satimg/img1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-7 item-caption">
                                <p style="color: #333;">Lancement de la formation sur la programmation mobile par SATCOM</p>
                                <span><strong style="font-size: 16px; color: #1C563D;">Formation</strong></span>
                            </div>
                        </li>
                        <li>
                            <div class="col-xs-5">
                                <img src="satimg/s5.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-7 item-caption">
                                <p style="color: #333;">Découverte des nouvelles technologie de l'information et de la communication par le groupe SATCOM</p>
                                <span><strong style="font-size: 16px; color: #1C563D;">Internet</strong></span>
                            </div>
                        </li>
                        <li>
                            <div class="col-xs-5">
                                <img src="satimg/img4.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-7 item-caption">
                                <p style="color: #333;">rentré universitaire aujourd'hui effectuer à l'université Abdou moumouni de Niamey-Niger</p>
                                <span><strong style="font-size: 16px; color: #1C563D;">Info en temps réel</strong></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section partenaires-->
<section id="about-us">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center wow fadeInDown">
                    <h2 class="section-heading"><strong>Nos partenaires</strong> </h2>

                </div>
            </div>
            <div class="row">
                <ul class="owl-carousel wow fadeInUp list-unstyled" data-items="4" data-items-tablet="[768,4]" data-items-mobile="[479,2]">
                    <li>
                        <img src="satimg/cipmen.jpg" style="width:150px; height: 150px;" class="img-responsive" />
                    </li>
                    <li>
                        <img src="satimg/banque.png" style="width:150px; height: 150px;" class="img-responsive" />
                    </li>
                    <li>
                        <img src="satimg/care.jpg" style="width:150px;; height: 150px;" class="img-responsive" />
                    </li>
                    <li>
                        <img src="satimg/acted.jpg" style="width:150px; height: 150px;" class="img-responsive" />
                    </li>
                    <li>
                        <img src="satimg/enabel.jpg" style="width:150px; height: 150px;" class="img-responsive" />
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require('template.php');
?>