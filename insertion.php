<?php
include("connexion.php");
?>
<html>
    <head><title>Formulaire de saisie utilisateur </title></head>
    <body>
        <h1>Nouvel Animal</h1>
        <h2>Entrez les données demandées :</h2>
        <form name="inscription" method="post" action="form.php">
            Espèce  : <input type="text" name="espece"/> <br/>
            Classe  : <input type="text" name="classe"/> <br/>
            Ordre : <input type="text" name="ordre"/><br/>
            Famille : <input type="text" name="famille"/><br/>
            Genre : <input type="text" name="genre"/><br/>
            Taille : <input type="text" name="taille"/><br/>
            Poids : <input type="text" name="poids"/><br/>
            Repartition : <input type="text" name="repartition"/><br/>
            Habitat : <input type="text" name="habitat"/><br/>
            Mode de vie : <input type="text" name="modeDeVie"/><br/>
            Régime alimentaire : <input type="text" name="regimeAlimentaire"/><br/>
            Incubation : <input type="text" name="incubation"/><br/>
            Nombre d'Oeufs : <input type="text" name="nombreOeufs"/><br/>
            Maturité sexuelle : <input type="text" name="maturiteSexuelle"/><br/>
            Longévité : <input type="text" name="longevite"/><br/>
            Statut de Conservation UICN : <input type="text" name="statutDeConservationUICN"/><br/>
            Population : <input type="text" name="population"/><br/>
            Menaces : <input type="text" name="menaces"/><br/>
            Description : <input type="text" name="description"/><br/>
            Emplacement :


            <select name="emplacement">
            <?php 
           
            $stmt = $zoo->query(" SELECT * FROM lieu");
            while($lieux = $stmt->fetch()){
                echo '<option value="'.$lieux['idLieu'].'">'.$lieux['emplacement'].'</option>';
            }
            ?>
            </select>

            <input type="submit" name="valider" value="OK"/>
        </form>
        <?php
        if (isset ($_POST['valider'])){
            //On récupère les valeurs entrées par l'utilisateur :
            $espece=$_POST['espece'];
            $classe=$_POST['classe'];
            $ordre=$_POST['ordre'];
            $famille=$_POST['famille'];
            $genre=$_POST['genre'];
            $taille=$_POST['taille'];
            $poids=$_POST['poids'];
            $repartition=$_POST['repartition'];
            $habitat=$_POST['habitat'];
            $modeDeVie=$_POST['modeDeVie'];
            $regimeAlimentaire=$_POST['regimeAlimentaire'];
            $incubation=$_POST['incubation'];
            $nombreOeufs=$_POST['nombreOeufs'];
            $maturiteSexuelle=$_POST['maturiteSexuelle'];
            $longevite=$_POST['longevite'];
            $statutDeConservationUICN=$_POST['statutDeConservationUICN'];
            $population=$_POST['population'];
            $menaces=$_POST['menaces'];
            $description=$_POST['description'];
            $statutDeConservationUICN=$_POST['statutDeConservationUICN'];
            $lieu=$_POST['emplacement']

            //On construit la date d'aujourd'hui
            //strictement comme sql la construit
            $today = date("y-m-d");
            //On se connecte
            connectMaBase();
 
            //On prépare la commande sql d'insertion
            $sql = "INSERT INTO animal (espèce, classe, ordre, famille, genre, taille, poids, repartition, habitat, modeDeVie, regimeAlimentaire, incubation, nombreOeufs, maturiteSexuelle, longevite, statutDeConservationUICN, population, menaces, description, statutDeConservationUICN,idLieu) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $pdo->prepare($sql)->execute([$espece, $classe, $ordre, $famille, $genre, $taille, $poids, $repartition, $habitat, $modeDeVie, $regimeAlimentaire, $incubation, $nombreOeufs, $maturiteSexuelle, $longevite, $statutDeConservationUICN, $population, $menaces, $description, $statutDeConservationUICN, $surname, $lieu]);
 
            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
        
            mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error()); 
 
            // on ferme la connexion
            mysql_close();
        }
        ?>
    </body>
</html>