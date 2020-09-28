<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SATCOM Login! | </title>

  <!-- Bootstrap -->
  <link href="public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="public/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="public/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="public/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form method="POST" action="index.php?login">
            <h1>Se connnecter</h1>
            <div>
              <input type="text" class="form-control" placeholder="votre login" name="numero_telephone" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="mot de passe" name="mot_passe" required="" />
            </div>
            <?php
            if (!empty($_SESSION['messages'])) {
              Manager::messages($_SESSION['messages']['msg'], $_SESSION['messages']['code']);
            }
            ?>
            <div>
              <button type="submit" class="btn btn-default submit">Se connecter</button>
              <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Vous êtes nouveau ?
                <a href="#signup" class="to_register"> Créer mot de passe </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> SATCOM Login!</h1>
                <p>©2016 All Rights Reserved. SATCOM Login! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form method="POST" action="index.php?changePass#signup">
            <h1>Changer mot de passe</h1>
            <div>
              <input type="text" class="form-control" placeholder="Votre numéro de téléphone" name="numero_telephone" required="" />
            </div>

            <div>
              <input type="password" class="form-control" placeholder="Mot de passe" name="mot_passe" required="" />
            </div>

            <div>
              <input type="password" class="form-control" placeholder="Mot de passe de confirmation" name="mot_passe_2" required="" />
            </div>
            <?php
            if (!empty($_SESSION['messages'])) {
              Manager::messages($_SESSION['messages']['msg'], $_SESSION['messages']['code']);
            }
            ?>
            <div>
              <button type="submit" class="btn btn-default submit">Valider</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Avez vous déjà un compte ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> SATCOM Login!</h1>
                <p>©2016 All Rights Reserved. SATCOM Login! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>