<?php
    $title = " Ce que nous faisons";
    ob_start();
?>
    <section id="about-us">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading" style="color: #1C563D;"><strong>Ce que nous faisons</strong> </h2>
                        
                    </div>
                </div>
                <div class="row gap">
                    <div class="col-md-4 wow fadeInLeft">
                        <img src="satimg/s8.jpg" class="img-responsive" />
                    </div>
                    <div class="col-md-8 wow fadeInRight">
            <p>Spécialisation dans le domaine de l'informatique:</p>
            <ul>
            <li><i class="ion-android-checkmark-circle"></i>Installation et formations certifiées</li>
            <li><i class="ion-android-checkmark-circle"></i>Systèmes réseaux</li>
            <li><i class="ion-android-checkmark-circle"></i>Logiciels</li>
            <li><i class="ion-android-checkmark-circle"></i>Configuration</li>
            <li><i class="ion-android-checkmark-circle"></i>Partager les expériences par des consultations diverses.</li>  
            </ul>
            <p>Démonstration sur diffèrentes espériences avec la recherche</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    $content = ob_get_clean();
    require('template.php');
  ?>