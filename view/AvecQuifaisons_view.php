<?php
    $title = " Avec qui nous le faisons";
    ob_start();
?>
    <section id="about-us">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading" style="color: #1C563D;"><strong>Avec qui nous le faisons</strong> </h2>
                        
                    </div>
                </div>

                <div class="row gap">
                    <div class="col-md-4 wow fadeInLeft">
                        <img src="satimg/sat.gif" class="img-responsive" />
                    </div>
                    <div class="col-md-8 wow fadeInRight">
            <p>En collaboration avec nos partenaires comme Google, facebook</p>
            <ul>
            <li><i class="ion-android-checkmark-circle"></i>Les conseils des chercheurs; </li>
            <li><i class="ion-android-checkmark-circle"></i>Les materiels;</li>
            <li><i class="ion-android-checkmark-circle"></i>Partenariat avec les organismes internationales</li>  
            </ul>
            </div>

            </div>
            <br>
            <div class="row gap">
                    
            <div class="col-md-8 wow fadeInRight">
            <p>Avec les organisations oeuvrant dans le monde numérique</p>
            <ul>
            <li><i class="ion-android-checkmark-circle"></i>Contrat des formations certifiées;</li>
            <li><i class="ion-android-checkmark-circle"></i>Fourniture des matériels de base;</li>
            <li><i class="ion-android-checkmark-circle"></i>Installation et configuration;</li>
            <li><i class="ion-android-checkmark-circle"></i>Mise en place des boutiques de vente de produits aux  partenaires et particuliers.</li>  
            </ul>
            
                </div>
                <div class="col-md-4 wow fadeInLeft">
                        <img src="satimg/sat3.jpg" class="img-responsive" />
                    </div>
            </div>
        </div>
    </section>
<?php
    $content = ob_get_clean();
    require('template.php');
  ?>