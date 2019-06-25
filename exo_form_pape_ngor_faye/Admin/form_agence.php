  <?php 
session_start();
if (!isset($_SESSION['login'])) {
  header("location:index.php");
  exit();
}

  
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php');?>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <?php include('topBar.php');?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php include('leftBar.php');?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
            <section class="wrapper">
        <!-- VERIFICATION-->
         <?php 

         if(array_key_exists("erreur", $_SESSION))
         {  
            echo "<div class='alert alert-danger'>"; 
            print_r(implode("<br/> ",$_SESSION['erreur']));
            echo"</div>"; 
            unset($_SESSION["erreur"]);
         }

         if(array_key_exists("valide", $_SESSION))
         {  
            echo "<div class='alert alert-success'>"; 
            echo $_SESSION['valide'];
            echo"</div>"; 
            unset($_SESSION["valide"]);
         }
          if(array_key_exists("existingEmail", $_SESSION))
         {  
            echo "<div class='alert alert-danger'>"; 
            echo $_SESSION['existingEmail'];
            echo"</div>"; 
            unset($_SESSION["existingEmail"]);
         }

          if(array_key_exists("existingName", $_SESSION))
         {  
            echo "<div class='alert alert-danger'>"; 
            echo $_SESSION['existingName'];
            echo"</div>"; 
            unset($_SESSION["existingName"]);
         }
 ?>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Création d'agences</h4>
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form" method="POST" action="traitementAgence.php" enctype="multipart/form-data">
                <div class="form-group has-success" id="cachersimoral">
                  <label class="col-lg-2 control-label" for="f-name">Nom de l'agence</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="Mettez le nom de l'agence" id="f-name" class="form-control" name="nomAgence" required/>
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label" for="l-name" id="labelnomphysique">Adresse de l'agence</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="Mettez l'adresse de l'agence" id="l-name" class="form-control" name="adresseAgence" required>
                  </div>
                </div>
                <div class="form-group has-warning">
                  <label class="col-lg-2 control-label" for="email2">Email de l'agence</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="email@example.com" id="email2" class="form-control" name="emailAgence" required>
                  </div>
                </div>
                 <div class="form-group has-warning">
                  <label class="col-lg-2 control-label" for="tel">Téléphone de l'agence</label>
                  <div class="col-lg-10">
                    <input type="tel" placeholder="Mettez le téléphone de l'agence" id="tel" class="form-control" name="telAgence" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="valider">Valider</button>
                      <button class="btn btn-theme04" type="reset" name="annuler">Annuler</button>
                    </div>
                </div>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
       
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>
</body>

</html>
