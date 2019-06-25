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
        <?php 

         if(array_key_exists("erreur", $_SESSION)){  
            echo "<div class='alert alert-danger'>"; 
            print_r(implode("<br/> ",$_SESSION['erreur']));
            echo"</div>"; 
            unset($_SESSION["erreur"]);
 }
      elseif (array_key_exists("succes", $_SESSION)) {
       echo "<div class='alert alert-success'>"; 
       echo($_SESSION["succes"]);
       echo"</div>"; 
       unset($_SESSION["succes"]);
      }
       elseif (array_key_exists("existing", $_SESSION)) {
       echo "<div class='alert alert-danger'>"; 
       echo($_SESSION["existing"]);
       echo"</div>"; 
       unset($_SESSION["existing"]);
      }
      ?>

        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Création d'utilisateurs</h4>
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form" method="POST" action="traitementclt.php" enctype="multipart/form-data">
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label" for="l-name" id="labelnomphysique">Prenom et Nom</label>
                  <label class="col-lg-2 control-label" for="l-name" id="labelnommoral" style="display: none;">Nom de l'entreprise</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="Mettez votre nom et prenom" id="l-name" class="form-control" name="name" required>
                  </div>
                </div>
                <div class="form-group has-success">
                  <label for="type" class="col-lg-2" for="type">Type de Client</label>
                  <div class="col-lg-10">
                     <select name="type" id="type" class="form-control" required>
                      <option value="physique">Physique</option>
                      <option value="moral">Moral</option>
                     </select>
                  </div>
                  <div class="col-lg-10"><span class="btn btn-info" style="margin-left: 170px;">NOTE!</span><span>Un client moral n'a pas de prénom.</span></div>
                </div>

                <div class="form-group has-warning">
                  <label class="col-lg-2 control-label" for="email2">Email</label>
                  <div class="col-lg-10">
                    <input type="email" placeholder="email@example.com" id="email2" class="form-control" name="mail" required>
                  </div>
                </div>
                 <div class="form-group has-warning">
                  <label class="col-lg-2 control-label" for="login">Login</label>
                  <div class="col-lg-10">
                    <input type="text" placeholder="Mettez votre login" id="login" class="form-control" name="pseudo" required>
                  </div>
                </div>
                 <div class="form-group has-warning">
                  <label class="col-lg-2 control-label" for="passe">Mot de Passe</label>
                  <div class="col-lg-10">
                    <input type="password" placeholder="Mettez votre mot de passe" id="passe" class="form-control" name="password" required>
                  </div>
                </div>
                <div class="form-group has-warning">
                  <label class="col-lg-2 control-label" for="conf">Confirmer Mot de Passe</label>
                  <div class="col-lg-10">
                    <input type="password" placeholder="Confirmer votre mot de passe" id="conf" class="form-control" name="password_confirm" required>
                  </div>
                </div>
                <!--image upload-->
              <div style="display: inline-block;">
                <label for="tof">Votre photo de profil<img id="photo" width="150px" height="150px" src="img/index.jpg"></label>
              </div>
                <input type="file" name="photo" style="display: none;" id="tof" accept="image/*" required />

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
  <script type="text/javascript">

    $("#type").on("change", function(){
      var valchoisie = $("#type").val();
      if(valchoisie == "moral"){
        $("#cachersimoral").css("display", "none");
        $("#labelnomphysique").css("display", "none");
        $("#labelnommoral").css("display", "block");
      }else{
        $("#cachersimoral").css("display", "block");
        $("#labelnommoral").css("display", "none");
        $("#labelnomphysique").css("display", "block");
      }
    });
  </script>
</body>

</html>
