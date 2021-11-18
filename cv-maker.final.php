<?php
session_start();
 try {
 $dbh = new PDO('mysql:host=localhost;dbname=test;port=3307;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();} 
  //<img src = " <? php echo $donnees['img']; " height="100px"  width="100px">    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cv-maker.final.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db9cdb6f12.js" crossorigin="anonymous"></script>
    <title>Cv-Maker</title>
</head>
<body>
    <section class="body">
        <div class="cv-content">
            <div class="inside-content">
              
                <div>   
                    <div class="cv-exp" >  
                        <div class="cv-img">
                        <!--<?php   $reponse = $dbh ->query('SELECT img FROM personne');
                    while ($donnees = $reponse->fetch()) ?> -->
                 <img src = " photographe-cv-lyon.jpg" height="100px"  width="100px">
                  
                        </div>
                        <div class="cv-titre">
                            <div class="cv-titre-h"><?php $reponse = $dbh ->query('SELECT nom, prenom ,tele,mail ,profession,ville FROM profil');
                    while ($donnees = $reponse->fetch())
                 { echo $donnees['nom'] . ' : ' . $donnees['prenom'] . ' <br />'; } ?></div></div>
                            <div class="titre">
                                <span ><?php echo $donnees['ville']; ?> -Mobilité Nationale -<?php echo $donnees['tele']?>  – <?php echo $donnees['mail']?>– </span>
                            </div>
                            <div class="cv-titre-h"><?php echo $donnees['proffession']?></div>
                            <div class="txt" >
                                <?php $reponse = $dbh ->query('SELECT profill FROM  profile ');
                           while ($donnees = $reponse->fetch()) {echo $donnees['profill'];}?> </div>
                        </div>
                        
                    </div>
                </div>
                <div>    
                    <div>
                        <div class="section">COMPETENCES</div>
                    </div>
                    <div class="cv-exp" >
                        <div class="exp">
                            <div class="txt" > <?php 
                                $reponse = $dbh ->query('SELECT compe, niveau FROM competence');
                    while ($donnees = $reponse->fetch())
                 { echo $donnees['compe'] . ' : ' . $donnees['niveau'] . ' <br />'; } ?></div>
                              
                    </div>
                </div>
                <div>    
                    <div>
                        <div class="section">EXPERIENCE PROFESSIONNELLE</div>
                    </div>
                    <div class="cv-exp" >
                        <div class="exp">
                            <div class="txt" style="margin-bottom: 10px;">
                                 <?php 
                                $reponse = $dbh ->query('SELECT expe,dateee,etabliss,descriptione FROM experience');
                    while ($donnees = $reponse->fetch())
                 { echo $donnees['etabliss'] . '- ' . $donnees['expe'] . '        ' . $donnees['dateee'] . ' <br />'.' <br />'. $donnees['descriptione'] ; } ?> 
                                
                            </div> 
                        </div>
                    </div>
                </div>
                <div>    
                    
                <div class="section">FORMATION</div>
                    
                    <div class="cv-exp" >
                        <div class="exp">
                            <div class="txt" style="margin-bottom: 10px;">
                            <?php $reponse = $dbh ->query('SELECT formation,datee,ens,descrip FROM enseignement');
                    while ($donnees = $reponse->fetch())
                 { echo $donnees['formation'] . ' , ' . $donnees['ens'] .'            ' . $donnees['datee'] . ' <br />'. $donnees['descrip'] .'.'. ' <br />'; } ?></span>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="section">LANGUES</div>
                    
                    <div class="cv-exp" >
                        <div class="exp">
                            <div class="txt" style="margin-bottom: 10px;">
                            <?php $reponse = $dbh ->query('SELECT langue,niveau FROM langues');
                    while ($donnees = $reponse->fetch())
                 { echo $donnees['langue'] . ' : ' . $donnees['niveau']  . ' <br />'; } ?></span>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="section">LOISIRS</div>
                    
                    <div class="cv-exp" >
                        <div class="exp">
                            <div class="txt" style="margin-bottom: 10px;">
                            <?php $reponse = $dbh ->query('SELECT loisir FROM loisires');
                    while ($donnees = $reponse->fetch())
                 { echo $donnees['loisir'] . ' - '; } ?></span>
                            </div> 
                        </div>
                    </div>
                </div>


            </div>
        </div>
<div> 
  <?php
  $reponse1 = $dbh ->query("DELETE FROM profil");
  $reponse2 = $dbh ->query("DELETE FROM profile ");
  $reponse3 = $dbh ->query("DELETE FROM personne");
  $reponse4 = $dbh ->query("DELETE FROM langues");
  $reponse5 = $dbh ->query("DELETE FROM loisires");
  $reponse6 = $dbh ->query("DELETE FROM experience");
  $reponse7 = $dbh ->query("DELETE FROM enseignement");
  $reponse8 = $dbh ->query("DELETE FROM competence");

 ?>
 </div>
    </section>
</body>
</html>