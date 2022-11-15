<?php
include("connexion.php");
include("include.php");


$requete = $zoo->prepare('SELECT * FROM animal where idAnimal = :idAnimal');
$requete->bindValue(':idAnimal', $_GET['id']);
$requete->execute();

$donnees = $requete->fetch();

$requeteLieu = $zoo->prepare('SELECT emplacement FROM lieu inner join animal on animal.idLieu = lieu.idLieu where idAnimal = :idAnimal');
$requeteLieu->bindValue(':idAnimal', $_GET['id']);
$requeteLieu->execute();

$lieu = $requeteLieu->fetch();


/*
echo '<pre>';
var_dump($donnees);
echo '</pre>';
*/

/* http://localhost/ProjetZoo/detailsAnimal.php?id=2 */

?>


<html>
    <head><title>Affchage des détails de l'animal </title></head>
    <body>
        <h1><?php echo $donnees['espèce'] ;?></h1>
        <h2>Caractéristiques :</h2>
            Classe  : <?php echo $donnees['classe'] ;?> <br/>
            Ordre : <?php echo $donnees['ordre'] ;?> <br/>
            Famille : <?php echo $donnees['famille'] ;?> <br/>
            Genre : <?php echo $donnees['genre'] ;?><br/>
            Taille : <?php echo $donnees['taille'] ;?><br/>
            Poids : <?php echo $donnees['poids'] ;?><br/>
            Repartition : <?php echo $donnees['repartition'] ;?><br/>
            Habitat : <?php echo $donnees['habitat'] ;?><br/>
            Mode de vie : <?php echo $donnees['modeDeVie'] ;?><br/>
            Régime alimentaire : <?php echo $donnees['regimeAlimentaire'] ;?><br/>
            Incubation : <?php echo $donnees['incubation'] ;?><br/>
            Nombre d'Oeufs : <?php echo $donnees['nombreOeufs'] ;?><br/>
            Maturité sexuelle : <?php echo $donnees['maturiteSexuelle'] ;?><br/>
            Longévité : <?php echo $donnees['longevite'] ;?><br/>
            Statut de Conservation UICN : <?php echo $donnees['statutDeConservationUICN'] ;?><br/>
            Population : <?php echo $donnees['population'] ;?><br/>
            Menaces : <?php echo $donnees['menaces'] ;?><br/>
            Description : <?php echo $donnees['description'] ;?><br/>
            Emplacement : <?php echo $lieu['emplacement'] ;?><br/>

        <?php
            // on ferme la connexion
            $zoo = null;
        ?>
    </body>
</html>
<?php
include("footer.php");
?>