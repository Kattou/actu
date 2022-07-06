<?php
//include("verification.php");
session_start();
if(!$_SESSION["nom"]){
  header("location:index.php");
}
else{
  $bienvenue = 'Bienvenue '.$_SESSION["nom"].' '.$_SESSION["prenom"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">TEST2 </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="accueil.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accueil.php?page=1">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accueil.php?page=2">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">Deconnecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<div class="container-fluid p-5 bg-secondary text-center">

<h1><?php echo $bienvenue  ?></h1>
  
</div>



</body>
</html>

<?php
if(isset($_GET["page"])) {// s'il y a des éléments 
    $page=$_GET["page"]; //$_GET permet d'envoyer des infos mais ce n'est pas sécurisé
if($page == 1){
  include("pizza.php");
}else if($page == 2){
  include("favorite_books.php");

}}
else{
  
?>
<?php
//page d'accueil
?>
<div class="container mt-5">
  <h2 class="text-center text-warning">Mes plats preferés sont</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <h3>Plats Africains</h3>
      <img class="img-thumbnail" src="images/tchep.jpg" height="auto" alt="tchep">
    </div>
    <div class="col-sm-4">
      <h3>Pizza</h3>
      <img class="img-thumbnail" src="images/pizza-reine.jpg" height="auto" alt="tchep">
    </div>
    <div class="col-sm-4">
      <h3>Grillade</h3>   
      <img class="img-thumbnail" src="images/alloco.jpg" height="auto" alt="tchep">     
    </div>
  </div>
</div>


<?php
}
?>
