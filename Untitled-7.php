<?php
session_start();
extract($_POST);
try {
   $dbh = new PDO('mysql:host=localhost;dbname=test;port=3307;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 
} catch (PDOException $e) {
   print "Erreur !: " . $e->getMessage() . "<br/>";
   die();}
    
   $reponse = $dbh ->query("INSERT INTO profil(nom,prenom,tele,profession,ville,mail) values ('$A','$B','$C','$D','$E','$F')");
    ?>
