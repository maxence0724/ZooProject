<!DOCTYPE html>
<html>
 <head>
 <?php include("include.php")?>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <title>Zoo de Bovalle</title>
 </head>
 <body>
 <div class= "row">
     <div class="col-sm-12">
     <h4 class="texte">  </h4>
     <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block carousel_image" src="images/zoo1.png" alt="First slide">
        <form action="https://buy.stripe.com/test_9AQg1n4bH2CEeGI8ww">
 <button class="btn btn-billetterie">Billetterie en ligne</button>
</form>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block carousel_image" src="images/zoo2.png" alt="Second slide">
        <form action="troll_calendar.php">
 <button class="btn btn-billetterie">Planning et Calendrier</button>
</form>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block carousel_image" src="images/zoo3.png" alt="Third slide">
        <form action="Description_Animaux.php">
 <button class="btn btn-billetterie">Nos Animaux</button>
</form>
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
    <div class="container" style="background-color: #c9c9c9; max-width: 100%;">
    <h2 style="font-family: arial; font-size: 80px; color: #404040;"><strong>Notre Parc</strong></h2>
     <div>
        <h1 class="text-center-Map"></h1>
      </div>
      <img src="plan/plan.png">
        <form action="Map_Interactive.php">
            <button class="btn btn-plan">Plan du Zoo</button>
        </form>
      </div>


<a href="Map_Interactive.php">

</a>
</div>

 </body>
 <footer>
 <?php include("footer.php")?>
</footer>
</html>