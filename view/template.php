<!DOCTYPE html>
<html lang="">

<head>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="">
  <!-- Favicons -->
  <link href="logo.jpg" rel="icon">
  <link href="logo.jpg" rel="apple-touch-icon">

  <title><?= $title ?></title>

  <!-- Bootstrap Core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/view.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/pe-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">



</head>

<body id="page-top" class="index">
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i><a href="mailto:contact@e-satcom.net"><b>satcom.com</b></a>
        <i class="fa fa-phone"></i><b>+227 92 10 14 39</b>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>
  <header id="header">
    <div class="container">

      <nav id="nav-menu" class="pull-left">
        <!-- logo -->
        <a href="index.php?action=home"><img src="satimg/satcom.jpg" height="90" width="120" alt=""></a>
      </nav>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php?action=home">Accueil</a></li>
          <li class="menu-has-children "><a href="#">Qui sommes-nous</a>
            <ul>
              <li><a href="index.php?action=presentation">Présentation</a></li>
              <li><a href="index.php?action=objectif">Objectif</a></li>
              <li><a href="index.php?action=vocation">Notre Vocation</a></li>
              <li><a href="index.php?action=AvecQuifaisons">Avec qui nous faisons</a></li>
            </ul>
          </li>
          <li class="menu-has-children "><a href="#">Produits</a>
            <ul>
              <li><a href="index.php?action=divers">Monde numérique</a></li>
              <li><a href="index.php?action=ntic">Nouvelles Technologies</a></li>
            </ul>
          </li>
          <li><a href="index.php?action=activite">Activités</a></li>
          <li><a href="index.php?action=actualite">Actualités</a></li>
          <li><a href="index.php?action=contact">Contact</a></li>
          <!-- <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".design">Forum</a></li> -->
          <li><a href="#search"><i class="fa fa-search"></i></a></li>
          <li><a href="index.php?action=logout"><i class="fa fa-power-off"></i></a></li>

        </ul>
      </nav><!-- #nav-menu-container -->
      <div id="search-wrapper">

        <div class="vertical-center text-center">
          <form>
            <input type="search" value="" placeholder="Entrez le terme de recherche" />
            <button type="submit" class="btn btn-primary btn-white">Recherche</button>
          </form>
        </div>
      </div>

    </div>
  </header><!-- #header -->

  <?php echo $content ?>
  <!-- Section contact -->

  <section id="footer-widgets" class="divider-wrapper">
    <div class="section-inner">
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-lg-12 text-center wow fadeInDown">
            <h2 class="section-heading"><strong>Contact</strong></h2>
          </div>
          <div class="col-md-6">
            <div id="message"></div>
            <form method="post" action="sendemail.php" id="contactform">
              <p><input type="text" class="form-control" name="name" placeholder="Votre Nom *" id="name" required data-validation-required-message="Veuillez entrer votre Nom." /></p>
              <p><input type="text" class="form-control" name="email" placeholder="Votre Email *" id="email" required data-validation-required-message="Veuillez entrer votre Email." /></p>
              <p><input type="text" class="form-control" name="website" placeholder="Votre Address *" id="website" required data-validation-required-message="Veuillez entrer votre Address." /></p>
              <p><textarea name="comments" class="form-control" id="comments" placeholder="Votre Message *" required data-validation-required-message="Veuillez entrer votre Message."></textarea></p>
              <p style="text-align: center;"><input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Envoyer" /></p>
            </form>
            <br>
          </div>
          <div class="widget col-md-3 col-sm-6">
            <h4 class="widget-title"><strong>rejoingnez-nous:</strong></h4>
            <ul class="list-inline social-buttons wow fadeInUp">
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
          <!--/.col-md-3-->

        </div>
      </div>
    </div>
  </section>

  <footer class="divider-wrapper-dark">
    <div class="container">
      <div class="row">

        <div class="col-md-4">

          <a href="#" id="back-to-top"><i class="pe-7s-angle-up fa-4x"></i></a>
        </div>

        <div class="col-md-4 text-center" style="font-size: 15px;">
          <span class="copyright wow fadeInUp">&copy; Copyright 2020 Developpé par <a href="#">SATCOM.</a></span>
        </div>

      </div>
    </div>
  </footer>
  <!-- <script src="assets1/vendor/jquery/jquery.min.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- jQuery -->
  <!-- <script src="assets/js/jquery.js"></script> -->


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <!-- <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>



 

  <!-- Bootstrap Core JavaScript -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/js/plugins.js"></script>

  <!-- Plugins -->
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <!-- <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script> -->

  <!-- Custom JavaScript -->
  <script src="assets/js/init.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      'use strict';
      // SEARCH //
      $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search-wrapper').addClass('open');
        $('#search-wrapper > form > input[type="search"]').focus();
      });

      $('#search-wrapper, #search-wrapper button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
          $(this).removeClass('open');
        }
      });

      // $('form').submit(function(event) {
      //   event.preventDefault();
      //   return false;
      // })


    });
  </script>
</body>

</html>