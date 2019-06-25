<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header("location:index.php");
  exit();
}

?>
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="changeProfile.php"><img src="<?php echo $_SESSION['photo'];?>" class="img-circle" width="80" title="changer mon profil"></a></p>
          <h5 class="centered"><?php  echo $_SESSION['prenom']." ".$_SESSION['nom']; ?></h5>
          <li class="mt">
            <a class="active" href="index2.php">
              <i class="glyphicon glyphicon-home"></i>
              <span>Tableau de bord</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Gestion des Clients</span>
              </a>
            <ul class="sub">
              <li><a href="form_validation.php">Ajouter un client</a></li>
              <li><a href="advanced_table.php">Lister les clients</a></li>
              <li><a href="editer.php">Editer client</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>