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
  
  <body>

  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href ="#">About The Site</a>
      </li>
      </ul>
    </div>
  </div>
</div>
</nav>
<div class="container">
<br>
    <h1 class="text-center">DOOR STEP DELIVERY</h1>
    <br>
    <select class="form-select" aria-label="Default select example">
        <option selected>From where you need items</option>
        <option value="1">SEETHARAMAPURAM</option>
        <option value="2">UDAYAGIRI</option>
    </select>
    <br>
    <form method="get" action="groceries.php">
    <button type="Submit" name="submit" class="btn btn-primary" type="button">GROCERIES</button>
    </form>
    <br>
    <br>
    <form>
    <button type="Submit" name="submit" class="btn btn-primary" type="button">Medicine</button> 
    <button type="Submit" name="submit" class="btn btn-primary" type="button">LPG_GAS</button>
    <button type="Submit" name="submit" class="btn btn-primary" type="button">Foot_Wear</button>
    </form>
    
    <br>
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