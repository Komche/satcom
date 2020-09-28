<?php
    $title = " Vocation";
    ob_start();
?>
    <section id="about-us">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading" style="color: #1C563D;"><strong>But</strong> </h2>
                        
                    </div>
                </div>
                <div class="row gap">
                    <div class="col-md-4 wow fadeInLeft">
                        <img src="satimg/s5.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-8 wow fadeInRight">
                        <p>Notre objectif primordial c'est de transformer nos sociétés à travers la nouvelle technologie.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    $content = ob_get_clean();
    require('template.php');
  ?>