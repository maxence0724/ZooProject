<!DOCTYPE html>

<html>

<head>
<title>Mon super billet à imprimer</title>
</head>

<?php
include("connexion.php");
?>
<head><title>Formulaire de saisie utilisateur </title></head>
    <body>
        <h2>Veuillez renseigner votre nom :</h2>
        <form name="inscription" method="post" action="afficherQr.php">
            Nom  : <input type="text" name="nom"/> <br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
        
        
    </body>


</html>