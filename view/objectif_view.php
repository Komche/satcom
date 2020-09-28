<?php
    $title = " Nos Objectifs";
    ob_start();
?>

    <section id="about-us">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading" style="color: #1C563D;"><strong>Nos Objectifs </strong> </h2>
                        
                    </div>
                </div>
                <div class="row gap">
                    <div class="col-md-4 wow fadeInLeft">
                        <img src="satimg/img4.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-8 wow fadeInRight">
                        <ul>
                        <li><i class="ion-android-checkmark-circle"></i>Former,faire des installations réseaux et maintenance, dévelloper des applications et mobile;</li>
                        <li><i class="ion-android-checkmark-circle"></i>Former,faire des installations réseaux et maintenance, dévelloper des applications et mobile;</li>
                        <li><i class="ion-android-checkmark-circle"></i>Fournir des materiels en informatique;</li>
                        <li><i class="ion-android-checkmark-circle"></i>Assurer la maintenance, la conception</li>
                        <li><i class="ion-android-checkmark-circle"></i>Partager les expériences par des consultations diverses.</li>   
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