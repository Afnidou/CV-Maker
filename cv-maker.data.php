<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cv-maker.data.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db9cdb6f12.js" crossorigin="anonymous"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    
    <script type="text/javascript"> 
    $(function(){
        $("#form").submit(function(){
            nom= $(this).find("input[name=nom]").val();
           prenom= $(this).find("input[name=prenom]").val();
           tele= $(this).find("input[name=tele]").val();
           proffession= $(this).find("input[name=proffession]").val();
           ville= $(this).find("input[name=ville]").val();
           mail= $(this).find("input[name=mail]").val();
           $.post(" Untitled-7.php",{A:  nom,  B:  prenom ,C:  tele,  D:  proffession,E: ville,  F: mail},function(data){alert(data);});  
        });       
    });
</script>
    <title>Cv-Maker</title>
</head>
<body>
    <h4 class="logo">OKjobs</h4>
    <div class="heading__bg"></div>
    <h1 class="title">Mes Données</h1>
    <section>
        <div>
            <form class="Form" id="form"  action="#" method="POST" enctype="multipart/form-data" onsubmit="return false">
                <h2 style="margin: 0 0 10px 10px;">Mes Données</h2>
                <hr>
                <div class="inputBox">
                        <div class="img">
                        <input type="file" name="file" id="file" >
                        </div>
                    <div class="name" style="margin-left: 20px;">
                        <div class="nom">
                            <span>Prénom</span>
                            <input type="text" name="prenom"  >
                        </div>
                        <div class="nom">
                            <span>Nom</span>
                            <input type="text"  name="nom"  >
                        </div>
                    </div> 
                </div>
                <div class=" inputBox">
                    <div class="nom" style="float: right; width: 48%;">
                        <span> Telephone</span>
                        <input type="text" name="tele"  >
                    </div>
                    <div class="nom" style="width :49%;">
                        <span> Email</span>
                        <input type="text" name="mail"  >
                    </div>
                </div>
                <div class="nom inputBox">
                    <span>Proffession</span>
                    <input type="text" name="proffession"  >
                </div>
                
                <div class=" inputBox">
                    <div class="nom" style="float: right; width: 48%;">
                        <span>Nationalité</span>
                        <input type="text" name="nationalite" >
                    </div>
                    <div class="nom" style="width :49%;">
                        <span>Ville/Localité</span>
                        <input type="text" name="ville"  >
                    </div>
                </div>
                <div class=" inputBox">
                    <div class="nom" style="float: right; width: 48%;">
                        <span>LinkedIn</span>
                        <input type="text" name="linkedin"  >
                    </div>
                    <div class="nom" style="width :49%;">
                        <span>Site internet</span>
                        <input type="text" name="site"  >
                    </div>
                <div class="nom1">
                    <button onclick="window.location.href = 'cv-maker.content.php';" class="button" id="next-btn"><input type="submit" value="Cliquez Ici" class="button" id="save-btn" /></button>
                    
                </div>
            </form>
            
        </div>
    </section>
    
</html>
