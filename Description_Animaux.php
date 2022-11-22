<!DOCTYPE html>
<html>
 <head>
 <?php include("include.php");
    include("connexion.php")?>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
   <title>Zoo de Bovalle</title>
 </head>
 <body class="BodyDescription">
<div class=BoxGlobal>
<br>

<?php 

$requete = $zoo->prepare('SELECT espèce, idAnimal FROM animal');
$requete->execute();
$compteur = 0 ;
while($animal = $requete->fetch()){
    $compteur++;
    if($compteur%4 == 1) echo '<div class=aigle><h3>';
    if($compteur%4 == 2) echo '<div class=perroquet_bleu><h3>';
    if($compteur%4 == 3) echo '<div class=perroquet><h3>';
    if($compteur%4 == 0) echo '<div class=autruche><h3>';  
    echo $animal['espèce'];
    echo '<h3></div>';
}

?>






<div class=square>
<a href="insertion.php">

 <img src="img/square.png" alt="" class="description_img">
<div class=add><img src="img/add.png" alt="" class="description_img">
</div>
</a>
</div>

</div>

 </body>
 <footer>
 <?php include("footer.php")?>
</footer>
</html>