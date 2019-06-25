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
     <h3><i class="fa fa-angle-right"></i> Liste de tous les clients physiques Activés</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>identifiant</th>
                    <th>Prénom et Nom</th>
                    <th class="hidden-phone">E-mail</th>
                      <th class="hidden-phone">Type de Client</th>
                      <th class="hidden-phone">Login</th>
                      <th class="hidden-phone">Status</th>
                  </tr>
                </thead>
                <?php 
                  $sql="SELECT * FROM client WHERE statutClient=? AND TypeClient=?";
                   $req=  $pdo-> prepare($sql);
                  $req->execute(array(1,"physique"));
                  while ($donnees=$req->fetch()) {
                   ?>
                  <tr class="gradeA">
                  <td class="hidden-phone"><?php echo $donnees["id"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["name"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["mail"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["TypeClient"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["pseudo"];?></td>
                  <td class="hidden-phone">
                    <form method="POST" action="traitementclt.php">
                      <input type="hidden" name="id" value="<?php echo $donnees['id'];?>" readonly>
                      <input type="submit" name="desactiver" value="Désactiver" class="btn btn-danger">
                    </form>
                  </td>
                </tr>
                 <?php }?>
                  
               </table>
               </div>
               </div>
               </div> 


        <h3><i class="fa fa-angle-right"></i> Liste de tous les clients physiques Désactivés</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>identifiant</th>
                    <th>Prénom et Nom</th>
                    <th class="hidden-phone">E-mail</th>
                    <th class="hidden-phone">Type de Client</th>
                    <th class="hidden-phone">Login</th>
                    <th class="hidden-phone">Status</th>
                  </tr>
                </thead>
                <?php 
                  $sql="SELECT * FROM client WHERE statutClient=? AND TypeClient=?";
                   $req=  $pdo-> prepare($sql);
                  $req->execute(array(0,"physique"));
                  while ($donnees=$req->fetch()) {
                   ?>
                  <tr class="gradeA">
                  <td class="hidden-phone"><?php echo $donnees["id"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["name"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["mail"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["TypeClient"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["pseudo"];?></td>
                  <td class="hidden-phone">
                    <form method="POST" action="traitementclt.php">
                      <input type="hidden" name="id" value="<?php echo $donnees['id'];?>" readonly>
                      <input type="submit" name="activer" value="Activer" class="btn btn-success">
                    </form>
                  </td>
                </tr>
                 <?php }?>
                  
               </table>
               </div>
               </div>
               </div> 
             
            


             </section>
            <!-- client moral-->
                  <section class="wrapper">
     <h3><i class="fa fa-angle-right"></i> Liste de tous les clients moraux Activés</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>identifiant</th>
                    <th class="hidden-phone">Nom de L'entreprise</th>
                    <th class="hidden-phone">E-mail</th>
                    <th class="hidden-phone">Type de Client</th>
                    <th class="hidden-phone">Login</th>
                    <th class="hidden-phone">Statut</th>
                  </tr>
                </thead>
                <?php 
                  $sql="SELECT * FROM client WHERE statutClient=? AND TypeClient=?";
                   $req=  $pdo-> prepare($sql);
                  $req->execute(array(1,"moral"));
                  while ($donnees=$req->fetch()) {
                   ?>
                  <tr class="gradeA">
                  <td class="hidden-phone"><?php echo $donnees["id"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["name"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["mail"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["TypeClient"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["pseudo"];?></td>
                  <td class="hidden-phone">
                    <form method="POST" action="traitementclt.php">
                      <input type="hidden" name="id" value="<?php echo $donnees['id'];?>" readonly>
                      <input type="submit" name="desactiver" value="Désactiver" class="btn btn-danger">
                    </form>
                  </td>
                </tr>
                 <?php }?>
                  
               </table>
               </div>
               </div>
               </div> 


        <h3><i class="fa fa-angle-right"></i> Liste de tous les clients moraux Désactivés</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>identifiant</th>
                    <th class="hidden-phone">Nom de L'entreprise</th>
                    <th class="hidden-phone">E-mail</th>
                    <th class="hidden-phone">Type de Client</th>
                    <th class="hidden-phone">Login</th>
                    <th class="hidden-phone">Statut</th>
                  </tr>
                </thead>
                <?php 
                  $sql="SELECT * FROM client WHERE statutClient=? AND TypeClient=?";
                   $req=  $pdo-> prepare($sql);
                  $req->execute(array(0,"moral"));
                  while ($donnees=$req->fetch()) {
                   ?>
                  <tr class="gradeA">
                  <td class="hidden-phone"><?php echo $donnees["id"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["name"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["mail"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["TypeClient"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["pseudo"];?></td>
                  <td class="hidden-phone">
                    <form method="POST" action="traitementclt.php">
                      <input type="hidden" name="id" value="<?php echo $donnees['id'];?>" readonly>
                      <input type="submit" name="activer" value="Activer" class="btn btn-success">
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
