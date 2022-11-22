<!DOCTYPE html>
<html>
 <head>
 <?php include("include.php")?>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
   <title>Zoo de Bovalle</title>
 </head>
 <body style="background-color:#c9c9c9;">
    <div class="container">
     <div>
        <h1 class="text-center-Map" style="font-family: arial; font-size:100px; color: #404040;"><strong>Plan Du Zoo</strong></h1>
     </div>

      <form action="Description_Animaux.php">
         <button class="btn-oiseaux">Oiseaux</button>
      </form>
      <form action="Description_Animaux.php">
         <button class="btn-animauxmarins">Animaux marins</button>
      </form>
      <form action="Description_Animaux.php">
         <button class="btn-animauxterrestre">Animaux terrestres</button>
      </form>

    <img src="plan/plan.png">
    </div>








 </body>
 <footer>
 <?php include("footer.php")?>
</footer>
</html>