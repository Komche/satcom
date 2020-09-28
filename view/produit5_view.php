<?php
    $title = " Produit 5";
    ob_start();
?>
    <!-- Single Section -->
    <section>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading" style="color: #1C563D;">Besoin des accessoires informatique
                        </h2>
                        
                    </div>
                    <div class="row gap">
                    <div class="col-md-4 wow fadeInLeft">
                        <img src="satimg/satcom.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-8 wow fadeInRight">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
                        <div id="related-items" class="gap row">
                            <div class="col-md-12">
                                <h3 class="single-section-title"><strong>Produits & services disponible</h3>
                                <div class="row">
                                    <ul class="direction-aware owl-carousel wow fadeInUp" data-items="5" data-items-tablet="[768,3]"  data-items-mobile="[479,1]">
                                        <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/emig.jpg" title="Orange">
                                                <img src="satimg/emig.jpg" class="img-responsive" alt="" 
                                                 style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Présentation des projets réalisés</h4> 
                                            </div>
                                        </li>
                                         <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/image.jpg" title="projet">
                                                <img src="satimg/image.jpg" class="img-responsive" alt="" 
                                                 style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>forum des entrepreneurs</h4> 
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/s4.jpg" title="Orange">
                                                <img src="satimg/s4.jpg" class="img-responsive" alt="" 
                                                 style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>découverte scientifique</h4> 
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/s1.jpg" title="Orange">
                                                <img src="satimg/s1.jpg" class="img-responsive" alt="" 
                                                 style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Numérisation</h4>
                                            </div>
                                        </li>
                                         <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/s6.png" title="Orange">
                                                <img src="satimg/s6.png" class="img-responsive" alt=""  
                                                style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>le monde du développement</h4> 
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/s7.jpg" title="Orange">
                                                <img src="satimg/s7.jpg" class="img-responsive" alt=""  
                                                style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>câblage réseau</h4>

                                            </div>
                                        </li>
                                    </ul>  
                                </div> 
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