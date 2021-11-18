<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=test;port=3307;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();}

    /*$files=$_FILES["file"];
    $filename=$files['name'];
    $filetmp=$files['tmp_name'];
    $filecheck=strtolower(substr(strrchr($filename,'.'),1));
    $fileextstored=array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored)){
        $destinationfile='imge/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);
        $reponse = $dbh ->query("INSERT INTO personne(img) values ('$destinationfile')");  
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cv-maker.content.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/db9cdb6f12.js" crossorigin="anonymous"></script>
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript"> 
    $(function(){
        $("#formcomp").submit(function(){
           niveau= $(this).find("input[name=niveau]").val();
           competence= $(this).find("input[name=competence]").val();
           $.post(" Untitled-1.php",{A:  competence,  B:  niveau},function(data){alert(data);});  
        });       
    });

    $(function(){
        $("#formform").submit(function(){
           Ense= $(this).find("input[name=Ens]").val();
           local= $(this).find("input[name=local]").val();
           date= $(this).find("input[name=date]").val();
           Etablissement= $(this).find("input[name=Etablissement]").val();
           Description= $(this).find("textarea[name=Description]").val();
           $.post(" Untitled-2.php",{A:  Ense,  B:  local , C: date,  D:  Etablissement , E: Description},function(data){alert(data);});  
        });       
    });

    $(function(){
        $("#formschool").submit(function(){
           formation= $(this).find("input[name=formation]").val();
           local= $(this).find("input[name=locale]").val();
           date= $(this).find("input[name=datee]").val();
           Etablissement= $(this).find("input[name=etab]").val();
           Description= $(this).find("textarea[name=desc]").val();
           $.post(" Untitled-3.php",{A:  formation,  B:  local , C: date,  D:  Etablissement , E: Description},function(data){alert(data);});  
        });       
    });

    $(function(){
        $("#formlangue").submit(function(){
           langue= $(this).find("input[name=langue]").val();
           niveau= $(this).find("input[name=niv]").val();
           $.post(" Untitled-4.php",{A:langue,  B:niveau },function(data){alert(data);});  
        });       
    });

    $(function(){
        $("#forml").submit(function(){
           loi= $(this).find("input[name=loi]").val();
           $.post(" Untitled-5.php",{A:loi },function(data){alert(data);});  
        });       
    }); 
    $(function(){
        $("#profil").submit(function(){
           profil= $(this).find("textarea[name=profil]").val();
           $.post(" Untitled-6.php",{A:profil },function(data){alert(data);});  
        });       
    }); 
    </script>

    
 <title>Cv-Maker</title>
</head>
<body>
<div class="card-bg1" id="card-bg1">
        <div class="cards1">
            
            <div class="card-con1"><div class="close1"></div><div class="close2"></div><label class="close-btn" id="close-btn" title="close"></label>
                <h2>Conseils</h2>
                <div class="card1">1. Votre profil figure toujours au début du curriculum vitae, après les données personnelles.</div>
                        
                        
                <div class="card1">2. Rédigez votre description personnelle de manière concise. Vantez vos talents afin de tenter de décrocher l'emploi vacant, à l'aide d'une brève présentation de votre profil. N'utilisez pas de liste de mots-clés, mais formulez des phrases entières.</div>
                        
                        
                <div class="card1">3. Mentionnez les informations suivantes au cœur d'un texte de présentation de votre profil bien rédigé: Résultats obtenus, Caractéristiques positives, Ambitions et Objectifs, Ce que vous recherchez.</div>
            </div>
        </div>                
    </div>
    <div class="card-bg1" id="card-save-1">
        <div class="cards1">
            
            <div class="card-con1"><div class="close1"></div><div class="close2"></div><label class="close-btn" id="close-btn-save-1" title="close"></label>
                <h2>Attention</h2>
                <div class="card1">Cette action est irreverssible. Veuillez bien verifie vas information avant de sauvegarder</div>
                        

                        
                        
                <button class="conseil">Continuer Et Sauvegarder</button>
            </div>
        </div>                
    </div>
    <div class="card-bg1" id="card-bg2">
        <div class="cards1">
            
            <div class="card-con1"><div class="close1"></div><div class="close2"></div><label class="close-btn" id="close-btn2" title="close"></label>
                <h2>Conseils</h2>
                <div class="card1">1. Mentionnez uniquement le terme correct général utilisé par l'entreprise pour la fonction pour laquelle vous posez votre candidature. Le terme 'Vendeur' correspond éventuellement au terme 'Account manager' au sein de cette entreprise.</div>
                        
                        
                <div class="card1">2. Décrivez votre fonction, les responsabilités exercées et éventuellement les compétences acquises, le plus précisément possible.</div>
                        
                        
                <div class="card1">3. Soyez attentif/attentive aux exigences de l'entreprise et adaptez votre texte de candidature en combinant ces exigences avec votre expérience acquise.</div>

                <div class="card1">4. Si votre expérience professionnelle est très étoffée, ne mentionnez que les fonctions les plus pertinentes.</div>

                <div class="card1">5. Souhaitez-vous classer les éléments de manière chronologique? Cliquez sur l'icône avec les 3 points à droite de la section et choisissez 'classer chronologiquement'.</div>
            </div>
        </div>                
    </div>
    <div class="card-bg1" id="card-bg3">
        <div class="cards1">
            
            <div class="card-con1"><div class="close1"></div><div class="close2"></div><label class="close-btn" id="close-btn3" title="close"></label>
                <h2>Conseils</h2>
                <div class="card1">1. Indiquez seulement les études que vous avez réellement suivies.</div>
                        
                        
                <div class="card1">2. Indiquez les écoles primaires et secondaires uniquement s'il s'agit de la dernière phase de votre enseignement.</div>
                        
                        
                <div class="card1">3. Ajoutez même les études que vous n'avez pas achevées si vous considérez qu'elles représentent une certaine valeur ajoutée ou qu'elles peuvent justifier une période d'inactivité dans votre parcours professionnel.</div>

                <div class="card1">4. Décrivez l'objet de vos études, les employeurs ignorent parfois ce qu'englobent certaines formations.</div>

                <div class="card1">5. Souhaitez-vous classer les éléments de manière chronologique? Cliquez sur l'icône avec les 3 points à droite de la section et choisissez 'classer chronologiquement'.</div>
            </div>
        </div>                
    </div>
    <div class="card-bg1" id="card-bg4">
        <div class="cards1">
            
            <div class="card-con1"><div class="close1"></div><div class="close2"></div><label class="close-btn" id="close-btn4" title="close"></label>
                <h2>Conseils</h2>
                <div class="card1">1. Indiquez uniquement les compétences qui représentent une valeur ajoutée et qui répondent aux exigences de l'emploi vacant pour lequel vous souhaitez poser votre candidature.</div>
                        
                        
                <div class="card1">2. Exemples: Persévérance, Bonne communication, Esprit d'équipe, etc.</div>
                        
                        
                <div class="card1">3. Indiquez également vos compétences dans le domaine informatique et vos connaissances des logiciels, par ex. : Word, Excel, Photoshop, Prince, etc.</div>
            </div>
        </div>                
    </div>
    <div class="card-bg1" id="card-bg5">
        <div class="cards1">
            
            <div class="card-con1"><div class="close1"></div><div class="close2"></div><label class="close-btn" id="close-btn5" title="close"></label>
                <h2>Conseils</h2>
                <div class="card1">1. Indiquez toujours votre langue maternelle.</div>
                        
            </div>
        </div>                
    </div>
    <div class="card-bg1" id="card-bg6">
        <div class="cards1">
            
            <div class="card-con1"><div class="close1"></div><div class="close2"></div><label class="close-btn" id="close-btn6" title="close"></label>
                <h2>Conseils</h2>
                <div class="card1">1. N'indiquez pas les loisirs qui ne confèrent pas de valeur ajoutée à votre curriculum vitae, par exemple: Lecture, faire des puzzles, famille.</div>
                        
                        
                <div class="card1">2. Indiquez uniquement les loisirs qui accentuent réellement vos caractéristiques personnelles, par exemple: Sports, Programmation, Photographie.</div>
                        
                        
                <div class="card1">3. Ne mentionnez pas de loisirs coquins ou de loisirs qui peuvent entraîner une mauvaise image personnelle, par exemple: Poker, Opinion politique, Loisirs coquins ou Collection d'objets.</div>
            </div>
        </div>                
    </div>
    <h4 class="logo">OKjobs</h4>
    <div id="heading__bg1"></div>
    <div id="heading__bg2"></div>
    <h1 class="title">Mes expériences</h1>
    <div style="height: 50px;"></div>
        
    <section>
        <div class="container">
            <div style="display: flex;">
                <i class="fas fa-user-circle" style="position: relative; top: 5px;padding-right: 14px;font-size: large;"></i>
                <h2>Profil</h2>
            </div>
            <hr>

            <div class="description">
            <form id="profil" action="#" method="POST" onsubmit="return false">
                <span>Description</span>
                <div ></div>
               <div  class="papa">
                    <textarea  name="profil"  > </textarea>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between;">
                    <button class="button-1" ><i class="far fa-lightbulb conseil" style="position: relative; top: 2px;padding-right: 10px;font-size: medium;"></i>
                        <label id="show-conseil-1" class="show-btn conseil">Conseils</label></label></button>
                    <button type="submit" class="button-1"><i class="far fa-save save" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>
                    <label id="show-save-1" class="show-btn conseil">Sauvegarder</label></label></button></button>
                    </form> 
                     </div>
        </div>
    </section>

    <section>
        <div class="container" id="formation">
        <form id="formform" action="#" method="POST">
                <div style="display: flex;"><i class="fas fa-graduation-cap" style="position: relative; top: 5px;padding-right: 14px;font-size: large;"></i><h2>Expériences professionnelles</h2></div>
                    <hr>
                <div id="enseig" >
                    <div id = "enseig-form">
                        <div class=" inputBox ">
                            <div class="nom" style="float: right; width: 48%;">
                                <span> Localité</span>
                                <input type="text" name="local" required="rerquired">
                            </div>
                            <div class="nom" style="width :48%;">
                                <span>Experience</span>
                                <input type="text" name="Ens" required="rerquired">
                            </div>
                        </div>

                        <div class=" inputBox ">
                            <div class="nom" style="float: right; width: 48%;">
                                <span> Etablissement</span>
                                <input type="text" name="Etablissement" required="rerquired">
                            </div>
                            <div class="nom" style="width :48%;">
                                <span>date</span>
                                <input type="text" name="date" required="rerquired">
                            </div>
                        </div>
                        
                        <div class="description">
                            <p>Description</p>
                            <div >
                                <textarea  name="Description"  required="rerquired" > </textarea>
                            </div>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <button class="button-1"><i class="far fa-lightbulb" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>
                            <label id="show-conseil-2" class="show-btn conseil">Conseils</label></label></button>
                            <button type="submit" class="button-1"><i class="far fa-save" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>Sauvegarder</button>
                        </div>
                    </div>
                </div>
                </form> 
        </div>
    </section>

    <section>
        <div class="container">
        <form id="formschool" action="#" method="POST">
                <div style="display: flex;"><i class="fas fa-briefcase" style="position: relative; top: 5px;padding-right: 14px;font-size: large;"></i><h2>Enseignement</h2></div>
                <hr>
                <div class=" inputBox ">
                    <div class="nom" style="float: right; width: 48%;">
                        <span> Localité</span>
                        <input type="text" name="locale" required="rerquired">
                    </div>
                    <div class="nom" style="width :48%;">
                        <span>formation</span>
                        <input type="text" name="formation" required="rerquired">
                    </div>
                </div>
                <div class=" inputBox ">
                    <div class="nom" style="float: right; width: 48%;">
                        <span> date</span>
                        <input type="text" name="datee" required="rerquired">
                    </div>
                    <div class="nom" style="width :48%;">
                        <span>Etablissement d'enseignement</span>
                        <input type="text" name="etab" required="rerquired">
                    </div>
                </div>
                <div class="description">
                    <p>Description</p>
                    <div>
                    <textarea  name="desc"  required="rerquired" > </textarea>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <button class="button-1"><i class="far fa-lightbulb" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>
                    <label id="show-conseil-3" class="show-btn conseil">Conseils</label></label></button>
                    <button type="submit"class="button-1"><i class="far fa-save" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>Sauvegarder</button>
                </div>
                </form>
        </div>
    </section>

    <section>
        <div class="container">
        <form id="formcomp" action="#" method="POST">
                <div style="display: flex;"><i class="fas fa-mouse" style="position: relative; top: 5px;padding-right: 14px;font-size: large;"></i><h2>Compétences</h2></div>
                    <hr>
                

              
                    <div id="comp" class=" inputBox ">
                        <div class="nom" style="float: right; width: 48%;">
                            <span>Niveau</span>
                            <input type="text" name="niveau" required="rerquired">
                        </div>
                        <div class="nom" style="width :48%;">
                            <span>Compétence</span>
                            <input type="text" name="competence" required="rerquired">    
                           
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <button class="button-1"><i class="far fa-lightbulb" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>
                        <label id="show-conseil-4" class="show-btn conseil">Conseils</label></label></button>
                        <button  type="submit" class="button-1"><i class="far fa-save save" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>Sauvegarder</button>

                    </div>
           </form> 
        </div>
    </section>
    
    <section>
        <div class="container"  id="langue">
        <form id="formlangue" action="#" method="POST">
        <div style="display: flex;"><i class="fas fa-language" style="position: relative; top: 5px;padding-right: 14px;font-size: large;"></i><h2>Langues</h2></div>
                <hr>
                <div class=" inputBox ">
                    <div class="nom" style="float: right; width: 48%;">
                        <span>Niveau</span>
                        <input type="text" name="niv" required="rerquired">
                    </div>
                    <div class="nom" style="width :48%;">
                        <span>Langue</span>
                        <input type="text" name="langue" required="rerquired">
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <button class="button-1"><i class="far fa-lightbulb" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>
                    <label id="show-conseil-5" class="show-btn conseil">Conseils</label></label></button>
                    <button  type="submit" class="button-1"><i class="far fa-save" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>Sauvegarder</button>
                </div>
                </form>
        </div>
    </section>

    <section>
        <div class="container"  id="loisirs">
        <form id="forml" action="#" method="POST">
        <div style="display: flex;"><i class="fas fa-palette" style="position: relative; top: 5px;padding-right: 14px;font-size: large;"></i><h2>Loisirs            </h2></div>
                <hr>
                <div class="nom inputBox">
                    <span>Loisirs</span>
                    <input type="text" name="loi" required="rerquired">
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <button class="button-1"><i class="far fa-lightbulb" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>
                    <label id="show-conseil-6" class="show-btn conseil">Conseils</label></label></button>
                    <button type="submit" class="button-1"><i class="far fa-save" style="position: relative; top: 1px;padding-right: 10px;font-size: medium;"></i>Sauvegarder</button>
                </div>
                </form>
        </div>
    </section>
    <div>
        <button class="button-0"><a href="cv-maker.final.php">Etape Suivante  ></a></button>
    </div>
    <button class="button-00"><a href="cv-maker.data.php">< Etape précédente</a></button>



<script>
    $("document").ready(function(){
        $("#show-conseil-1").click(function(){
            $("#card-bg1").show();
        });
        $("#close-btn").click(function(){
            $("#card-bg1").hide();
        });
        $("#show-conseil-2").click(function(){
            $("#card-bg2").show();
        });
        $("#close-btn2").click(function(){
            $("#card-bg2").hide();
        });
        $("#show-conseil-3").click(function(){
            $("#card-bg3").show();
        });
        $("#close-btn3").click(function(){
            $("#card-bg3").hide();
        });
        $("#show-conseil-4").click(function(){
            $("#card-bg4").show();
        });
        $("#close-btn4").click(function(){
            $("#card-bg4").hide();
        });
        $("#show-conseil-5").click(function(){
            $("#card-bg5").show();
        });
        $("#close-btn5").click(function(){
            $("#card-bg5").hide();
        });
        $("#show-conseil-6").click(function(){
            $("#card-bg6").show();
        });
        $("#close-btn6").click(function(){
            $("#card-bg6").hide();
        });
        $("#show-save-1").click(function(){
            $("#card-save1").show();
        });
        $("#close-btn-save-1").click(function(){
            $("#card-save-1").hide();
        });
    });
</script>
</form>
</body>
</html>