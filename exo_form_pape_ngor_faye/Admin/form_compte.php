  <?php 
  session_start();
if (!isset($_SESSION['login'])) {
  header("location:index.php");
  exit();
}

  include('base.php');
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
       elseif (array_key_exists("existingNumber", $_SESSION)) {
       echo "<div class='alert alert-danger'>"; 
       echo($_SESSION["existingNumber"]);
       echo"</div>"; 
       unset($_SESSION["existingNumber"]);
      }
      ?>

        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Création de Compte</h4>
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form" method="POST" action="traitementCompte.php" enctype="multipart/form-data">
                <div class="form-group has-success" id="cachersimoral">
                  <label class="col-lg-2 control-label" for="f-name">Numéro du Compte</label>
                  <div class="col-lg-10">
                    <input type="number" placeholder="Mettez le numéro du compte" id="f-name" class="form-control" name="numero"  style="-moz-appearance:textfield;" >
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label" for="l-name" id="labelnomphysique">Solde par défaut</label>
                  <div class="col-lg-10">
                    <input type="number" placeholder="Mettez le solde par défaut" id="l-name" class="form-control" name="solde" style="-moz-appearance:textfield;"  required>
                  </div>
                </div>

                <div class="form-group has-success">
                  <label for="type" class="col-lg-2" for="type">Donnez l'id du client</label>
                  <div class="col-lg-10">
                     <?php 
                       echo "<select name='client' class='form-control'>";
                        $sql="SELECT id FROM client";
                        $req=$pdo->prepare($sql);
                        $req->execute([]);
                        while ($donne=$req->fetch()) 
                       {?>
                       
                         <option value="<?php echo $donne['id']; ?>"><?php echo $donne['id']; ?></option>

                     <?php }
                       echo"</select>";?>
                    
                  </div>
                </div>


                <div class="form-group has-success">
                  <label for="type" class="col-lg-2" for="type">Donnez le nom de l'agence</label>
                  <div class="col-lg-10">
                     <?php 
                       echo "<select name='agence' class='form-control'>";
                        $sql="SELECT NomAgence FROM agence";
                        $req=$pdo->prepare($sql);
                        $req->execute([]);
                        while ($donne=$req->fetch()) 
                       {?>
                       
                         <option value="<?php echo $donne['idAgence']; ?>"><?php echo $donne['NomAgence']; ?></option>

                     <?php }
                       echo"</select>";?>
                    
                  </div>
                </div>

                <div class="form-group has-success">
                  <label for="type" class="col-lg-2" for="type">Donnez le code du type de compte</label>
                  <div class="col-lg-10">
                     <?php 
                       echo "<select name='type' class='form-control'>";
                        $sql="SELECT CodeType FROM typecompte";
                        $req=$pdo->prepare($sql);
                        $req->execute([]);
                        while ($donne=$req->fetch()) 
                       {?>
                       
                         <option value="<?php echo $donne['CodeType']; ?>"><?php echo $donne['CodeType']; ?></option>

                     <?php }
                       echo"</select>";?>
                    
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
