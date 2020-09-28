<?php
    $title = " Autes Produits";
    ob_start();
?>

    <section>
        <div class="section-inner">
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading" style="color: #1C563D; "><strong >Nos Produits</strong></h2>
                        
                    </div>
                       <div class="col-md-12">
                        <div id="post-content" class="gap row">
                            <div class="col-md-12">
                                 <ul class="direction-aware row">
                                    <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                        <a class="view-link" href="index.php?action=produit1" title="Orange">
                                            <img src="satimg/img11.jpg" class="img-responsive" alt="" style="height: 150px; width: 150px;">
                                            <div>
                                                <div class="portfolio-hover-content">
                                                    <i class="pe-7s-close fa-3x"></i>
                                                </div>
                                            </div>                                
                                        </a>
                                        <div class="item-caption">

                                            <a class="pull-right btn btn-primary btn-outlined" href="index.php?action=produit1">Lire Plus</a> 
                                            <h4 class="pull-left">PC Dell</h4>
                                        </div>
                                    </li>
                                    <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                        <a class="view-link" href="index.php?action=produit2" title="Orange">
                                            <img src="satimg/img14.jpg" class="img-responsive" alt="" style="height: 150px; width: 150px;">
                                            <div>
                                                <div class="portfolio-hover-content">
                                                    <i class="pe-7s-close fa-3x"></i>
                                                </div>
                                            </div>                                
                                        </a>
                                        <div class="item-caption">
                                            <h4 class="pull-left">PC HP</h4> 
                                            <a class="pull-right btn btn-primary btn-outlined" href="index.php?action=produit2">Lire Plus</a> 
                                        </div>
                                    </li>
                                    <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                        <a class="view-link" href="index.php?action=produit3" title="Orange">
                                            <img src="satimg/ordi.png" class="img-responsive" alt=""  style="height: 150px; width: 150px;">
                                            <div>
                                                <div class="portfolio-hover-content">
                                                    <i class="pe-7s-close fa-3x"></i>
                                                </div>
                                            </div>                               
                                        </a>
                                        <div class="item-caption">
                                            <h4 class="pull-left">Accessoires informatique</h4>
                                            <a class="pull-right btn btn-primary btn-outlined" href="index.php?action=produit3">Lire Plus</a> 
                                        </div>
                                    </li>
                                    <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                            <a class="view-link" href="index.php?action=produit4" title="Orange">
                                            <img src="satimg/img8.jpg" class="img-responsive" alt=""  style="height: 150px; width: 150px;">
                                            <div>
                                                <div class="portfolio-hover-content">
                                                    <i class="pe-7s-close fa-3x"></i>
                                                </div>
                                            </div>                              
                                        </a>
                                        <div class="item-caption">
                                            <h4 class="pull-left">Alienware</h4>
                                            <a class="pull-right btn btn-primary btn-outlined" href="index.php?action=produit4">Lire Plus</a> 
                                        </div>
                                    </li>
                                    <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                        <a class="view-link" href="index.php?action=produit5" title="Orange">
                                            <img src="satimg/s5.jpg" class="img-responsive" alt=""  style="height: 150px; width: 150px;">
                                            <div>
                                                <div class="portfolio-hover-content">
                                                    <i class="pe-7s-close fa-3x"></i>
                                                </div>
                                            </div>                               
                                        </a>
                                        <div class="item-caption">
                                            <h4 class="pull-left">Connexion internet</h4>
                                            <a class="pull-right btn btn-primary btn-outlined" href="index.php?action=produit5">Lire Plus</a> 
                                        </div>
                                    </li>
                                    <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                        <a class="view-link" href="index.php?action=produit6" title="Oignon">
                                            <img src="satimg/s2.png" class="img-responsive" alt=""  style="height: 150px; width: 150px;">
                                            <div>
                                                <div class="portfolio-hover-content">
                                                    <i class="pe-7s-close fa-3x"></i>
                                                </div>
                                            </div>                                
                                        </a>
                                        <div class="item-caption">
                                            <h4 class="pull-left">Câblage réseau</h4> 
                                            <a class="pull-right btn btn-primary btn-outlined" href="index.php?action=produit6">Lire Plus</a> 
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-navigation" style="text-align: center;">
                                <a  class=" btn btn-lg btn-primary btn-outlined" href="#">Voir autres Produits</a> 
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