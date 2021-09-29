<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel = "stylesheet" href="css/site.css">
  <title>Door-Step DELIVERY</title>
  </head>
<div class = "container">
<br>
<h1 class="text-center">DOOR STEP DELIVERY</h1>
</div>
<br>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="contactus.php">Contact Us</a>
        <a class="nav-link" href="aboutsite.php">About Us</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
<br>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="margin: auto; width: 50%;">
    <div class="carousel-item active">
      <img src="groceries2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>GROCERIES</h5>
        <p>Order your items carefully...</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="meat.png" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>Meat</h5>
        <p>Order The Meat Carefully...</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="medicines.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>MEDICINE</h5>
        <p class="text-primary">Order the medicine carefully...</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="alert alert-primary" role="alert">
  Services will be available from Morning 7:00am to Evening 7:00pm
</div>

    <br>
    <select  class="form-select" aria-label="Default select example">
        <option selected>From where you need items</option>
        <option value="1">SEETHARAMAPURAM</option>
        <option value="2">UDAYAGIRI</option>
    </select>
    <br>
    <form method="get" action="groceries.php">
    <button type="Submit" name="submit" class="btn btn-primary" type="button">GROCERIES(కిరాణా సరుకులు)</button>
    </form>
    <br>
  
<br>
<br>
<br>
<div id="footer">   
    <?php 
    echo '<hr/>';
    echo '<br>';
    echo "Facing Any Technical Issue";
    echo '<br>';
    echo "Contact No : 9391838715";
    echo '<br>';
    echo '<br>';
    echo 'Copyrights' .date('Y') . "Web Master" ;
?>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>