<?php 
    try {
    	$pdo=new PDO("mysql:host=127.0.0.1;dbname=ngor","root","");
    	
    } catch (Exception $e) {
    	echo $e;
    	die($e);
    }
?>