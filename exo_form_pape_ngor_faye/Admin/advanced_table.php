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
        <h3><i class="fa fa-angle-right"></i> Liste de tous les clients</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <?php
                $countentrees = $pdo->query("SELECT id FROM client");
                #$countentrees->execute(array());
                $nbreentrees=$countentrees->rowCount();
                $perPage = 2;
                $nbrePage = ceil($nbreentrees/$perPage);
                if(isset($_GET['page']) && $_GET['page']>0 && $_GET['page']<=$nbrePage){
                  $cPage = $_GET['page'];
                }else{
                  $cPage = 1;
                }
              ?>
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>identifiant</th>
                    <th>Prénom et Nom</th>
                    <th class="hidden-phone">E-mail</th>
                    <th class="hidden-phone">Type de client</th>
                    <th class="hidden-phone">Login</th>
                  </tr>
                </thead>
                <?php 
                  $sql="SELECT * FROM client LIMIT ".(($cPage-1)*$perPage).",$perPage";
                  $req=  $pdo-> prepare($sql);
                  $req->execute(array());
                  while ($donnees=$req->fetch()) {
                   ?>
                  <tr class="gradeA">
                  <td class="hidden-phone"><?php echo $donnees["id"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["name"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["mail"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["TypeClient"];?></td>
                  <td class="hidden-phone"><?php echo $donnees["pseudo"];?></td>
                </tr>
                 <?php }?>
                
               </table>

              <?php 
              $prec=$cPage-1;
              $suiv=$cPage+1;
               echo "<a class='btn btn-success'  href='advanced_table.php?page=$prec'>precedent</a>";

              for ($i=1; $i <= $nbrePage ; $i++) { 
                if($i==$cPage){
                    echo "<a class='btn btn-info' style='text-decoration:underline;' href=advanced_table.php?page=$i>$i</a>";
                }else{
                    echo "<a class='btn btn-success' href=advanced_table.php?page=$i>$i</a>";
                }
              }
               echo "<a class='btn btn-success' ' href='advanced_table.php?page=$suiv'>suiv></a>";
              ?>

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
