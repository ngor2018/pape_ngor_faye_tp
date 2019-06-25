<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
       <?php 

         if(array_key_exists("erreur", $_SESSION))
         {  
            echo "<div class='alert alert-danger'>"; 
            print_r(implode("<br/> ",$_SESSION['erreur']));
            echo"</div>"; 
            unset($_SESSION["erreur"]);
         }

         if(array_key_exists("existingLog", $_SESSION))
         {  
            echo "<div class='alert alert-success'>"; 
            echo $_SESSION['existingLog'];
            echo"</div>"; 
            unset($_SESSION["existingLog"]);
         }
 ?>
      <form class="form-login" action="traitementAdmin.php" method="POST" enctype="multipart/form-data">
        <h2 class="form-login-heading">CONNECTEZ VOUS MAINTENANT</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Mettez votre prénom" autofocus name="prenom" required>
          <br>
          <input type="text" class="form-control" placeholder="Mettez votre nom"  name="nom" required>
          <br>
          <input type="text" class="form-control" placeholder="login" name="login" required>
          <br>
          <input type="password" class="form-control" placeholder="Mot de passe" name="passe" required>
          <br>
          <input type="password" class="form-control" placeholder="Confirmer votre mot de passe" name="conf" required>
          <label for="tof"><img id="photo" width="45px" height="45px" src="img/index.jpg"></label>
          <input type="file" name="photo" style="display: none;" id="tof" accept="image/*" required />
          <button class="btn btn-theme btn-block" type="submit" name="creer">Créer</button>
          <button class="btn btn-danger btn-block" type="reset" name="Annuler">Tout effacer</button>
          <hr>
        </div>
        <!-- Modal -->
        
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
