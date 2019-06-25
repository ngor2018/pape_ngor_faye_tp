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
          if(array_key_exists("existingLib", $_SESSION))
         {  
            echo "<div class='alert alert-danger'>"; 
            echo $_SESSION['existingLib'];
            echo"</div>"; 
            unset($_SESSION["existingLib"]);
         }

          if(array_key_exists("existingCode", $_SESSION))
         {  
            echo "<div class='alert alert-danger'>"; 
            echo $_SESSION['existingCode'];
            echo"</div>"; 
            unset($_SESSION["existingCode"]);
         }
 ?>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Création de type de compte</h4>
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form" method="POST" action="traitement_type_compte.php" enctype="multipart/form-data">
                <div class="form-group has-success" id="cachersimoral">
                  <label class="col-lg-2 control-label" for="f-name">Code du type de compte</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="Mettez le code du type de compte" id="f-name" class="form-control" name="code" required/>
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label" for="l-name" id="labelnomphysique">Libellé du type de compte</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="Mettez le Libellé du type de compte" id="l-name" class="form-control" name="libelle" required>
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
