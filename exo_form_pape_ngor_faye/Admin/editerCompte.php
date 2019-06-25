<?php include('base.php');
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

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    
   <?php include('TopBar.php');?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php include('leftBar.php'); ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
     <h3><i class="fa fa-angle-right"></i> Liste de tous les comptes Activés</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Numéro de compte</th>
                    <th class="hidden-phone">Date Ouverture de Compte</th>
                    <th class="hidden-phone">Solde du Compte</th>
                    <th class="hidden-phone">Id client propriétaire</th>
                    <th class="hidden-phone">Id Agence domicilé</th>
                    <th class="hidden-phone">Id du type de Compte</th>
                  </tr>
                </thead>
                <?php 
                  $sql="SELECT * FROM compte WHERE Statut=?";
                   $req=  $pdo-> prepare($sql);
                  $req->execute(array(1));
                  while ($donnees=$req->fetch()) {
                   ?>
                  <tr class="gradeA">
                   <td class="hidden-phone"><?php echo $donnees["idCompte"];?></td>
                   <td class="hidden-phone"><?php echo $donnees["NumeroCompte"];?></td>
                   <td class="hidden-phone"><?php echo $donnees["DateOuverture"];?></td>
                   <td class="hidden-phone"><?php echo $donnees["Solde"];?></td>
                   <td class="hidden-phone"><?php echo $donnees["idClient"];?></td>
                   <td class="hidden-phone"><?php echo $donnees["idAgence"];?></td>
                   <td class="hidden-phone"><?php echo $donnees["idTypeCompte"];?></td>
                   <td class="hidden-phone">
                    <form method="POST" action="traitementCompte.php">
                      <input type="hidden" name="id" value="<?php echo $donnees['idCompte'];?>" readonly>
                      <input type="submit" name="desactiver" value="Désactiver" class="btn btn-danger">
                    </form>
                  </td>
                </tr>
                 <?php }?>
                  
               </table>
               </div>
               </div>
               </div> 


        <h3><i class="fa fa-angle-right"></i> Liste de tous les comptes Désactivés</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Numéro de compte</th>
                    <th class="hidden-phone">Date Ouverture de Compte</th>
                    <th class="hidden-phone">Solde du Compte</th>
                    <th class="hidden-phone">Id client propriétaire</th>
                    <th class="hidden-phone">Id Agence domicilé</th>
                    <th class="hidden-phone">Id du type de Compte</th>
                    <th class="hidden-phone">Statut</th>
                  </tr>
                </thead>
                <?php 
                  $sql="SELECT * FROM compte WHERE Statut=?";
                   $req=  $pdo-> prepare($sql);
                  $req->execute(array(0));
                  while ($donnees=$req->fetch()) {
                   ?>
                  <tr class="gradeA">
                      <td class="hidden-phone"><?php echo $donnees["idCompte"];?></td>
                      <td class="hidden-phone"><?php echo $donnees["NumeroCompte"];?></td>
                      <td class="hidden-phone"><?php echo $donnees["DateOuverture"];?></td>
                      <td class="hidden-phone"><?php echo $donnees["Solde"];?></td>
                      <td class="hidden-phone"><?php echo $donnees["idClient"];?></td>
                      <td class="hidden-phone"><?php echo $donnees["idAgence"];?></td>
                      <td class="hidden-phone"><?php echo $donnees["idTypeCompte"];?></td>
                      <td class="hidden-phone">
                      <form method="POST" action="traitementCompte.php">
                          <input type="hidden" name="id" value="<?php echo $donnees['idCompte'];?>" readonly>
                          <input type="submit" name="activer" value="Activer" class="btn btn-danger">
                      </form>
                  </td>
                </tr>
                 <?php }?>
                  
               </table>
               </div>
               </div>
               </div> 
             
            


             </section>
           </section>
         </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    
  </script>
</body>

</html>
