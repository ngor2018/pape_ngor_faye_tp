<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php'); ?>
    <title></title>
</head>
<body>
<?php
include('TopBar.php');
include('leftBar.php');
include('js.php');
?>
<div class="slider">
    <div class="slides">
        <div class="slide"><img src="img/BICIS.jpg"  style="width:100%; height:100%;"></div>
        <div class="slide"><img src="img/BICIS2.jpg" style="width:100%; height:100%;"></div>
        <div class="slide" ><img src="img/BICIS3.jpg" style="width:100%; height:100%;" ></div>
        <div class="slide"><img src="img/BICIS4.jpg" style="width:100%; height:100%;" ></div>
    </div>
</div>
<style type="text/css">
    .slider{ margin-left: 210px; overflow: hidden; width: 1200px;height: 639px;margin-top: 10px; }
    .slide{width: 1200px; height: 639px;  float: left;}
    .slides
    {
        width: 4800px;
        animation-name: glisse;
        animation-duration: 10s;
        animation-delay: 4s;
        animation-direction: alternate-reverse;
        animation-iteration-count: infinite;
        animation-timing-function: ease-in-out;
    }
    @keyframes glisse{
        0%{
            transform: translateX(0px);
        }
        25%{
            transform: translateX(-1000px);
        }
        50%{
            transform: translateX(-2000px);
        }
        75%{
            transform: translateX(-3000px);
        }
        100%{
            transform: translateX(-4800px);
        }
    }
</style>
</body>
</html>