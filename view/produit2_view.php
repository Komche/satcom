<?php
    $title = " Produit 2";
    ob_start();
?>gle Section -->
    <section>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading" style="color: #1C563D;"><strong>Ecran</strong></h2>
                        
                    </div>
                    <div class="row gap">
                    <div class="col-md-4 wow fadeInLeft">
                        <img src="satimg/ecran.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-8 wow fadeInRight">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                        
                    </div>
                </div>
                        <div id="related-items" class="gap row">
                            <div class="col-md-12">
                                <h3 class="single-section-title"><strong>électronique informatiques</strong></h3>
                                <div class="row">
                                    <ul class="direction-aware owl-carousel wow fadeInUp" data-items="5" data-items-tablet="[768,3]"  data-items-mobile="[479,1]">
                                        <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/img1.jpg" title="View Image">
                                                <img src="satimg/img1.jpg" class="img-responsive" alt=""  
                                                style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Etudiant</h4> 
                                            </div>
                                        </li>
                                         <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/img8.jpg" title="Choux">
                                                <img src="satimg/img8.jpg" class="img-responsive" alt="" 
                                                 style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Image du jour</h4> 
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/img4.jpg" title="Etudiant">
                                                <img src="satimg/img4.jpg" class="img-responsive" alt="" 
                                                 style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Info</h4> 
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/img2.jpg" title="Choux">
                                                <img src="satimg/img2.jpg" class="img-responsive" alt="" 
                                                 style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Campus</h4>
                                            </div>
                                        </li>
                                         <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/img11.jpg" title="dell">
                                                <img src="satimg/img11.jpg" class="img-responsive" alt="" 
                                                 style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Faites votre choix</h4> 
                                            </div>
                                        </li>
                                        <li class="portfolio-item da-item">
                                            <a class="lb-link" href="satimg/img7.jpg" title="pc">
                                                <img src="satimg/img7.jpg" class="img-responsive" alt=""  
                                                style="height: 150px; width: 150px;">
                                                <div>
                                                    <div class="portfolio-hover-content">
                                                        <i class="pe-7s-close fa-3x"></i>
                                                    </div>
                                                </div>                                
                                            </a>
                                            <div class="item-caption">
                                                <h4>Ordinateurs</h4>

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