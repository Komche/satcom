<?php
    $title = " Présentation";
    ob_start();
?>
    <section id="about-us" >
        <div class="section-inner">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading" style="color: #1C563D;"><strong>Presentation</strong> </h2>
                        
                    </div>
                </div>
                <div class="row gap">
                    <div class="col-md-4 wow fadeInLeft">
                        <img src="satimg/sat.gif" class="img-responsive" />
                    </div>
                    <div class="col-md-8 wow fadeInRight">
                       <p>SATCOM est une plateforme érigée en  une Société à Responsabilité Limitée et agréée en 2020</p>
                      <p>Elle dispose une équipe de :</p>
                      <p>4 ingénieurs, 1 spécialiste en réseau, 15 techniciens en maintenace,5 personnels  administratifs, 1 développeur web & mobile et traitant avec plusieurs partenaires techniques et financiers etc……)
                      <p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    $content = ob_get_clean();
    require('template.php');
  ?>