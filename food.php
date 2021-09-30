<?php
    $title ="Groceries";
    include 'Includes/header.php';
    include 'Database/connection.php';
?>

<h1 class="text-center"> Welcome To The Food Stall  </h1>
<marquee class='text-danger'>మీ ప్రతి ఆర్డర్ కి 40 రూపాయలు మాత్రమే సర్వీస్ చార్జ్ పడుతుంది.</marquee>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Available NoN-VEG</h5>
    <h6 class="card-subtitle mb-2 text-muted">Food</h6>
    <p class="card-text">Biryani</p>
    <p class="card-text">Chicken Dum Biryani</p>
    <p class="card-text">Mutton Biryani</p>
  </div>
</div>
    <form method="post" action="foodsubmit.php">  
    <div class="mb-3" >
        <label for="exampleFormControlTextarea1" class="form-label">Please enter the Food You need</label>
        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ఇక్కడ, దయచేసి మీకు కావలసిన కిరాణా సామాగ్రిని నమోదు చేయండి" 
        name="grocery_items"></textarea>
        <small id="emailHelp" class="form-text text-muted">Type in english or telugu</small>
        <br>
    </div>


        <div class="form-group">
            <label for="Full Name">Name</label>
            <input required type="text" class="form-control" id="exampleInputName" placeholder="Full Name" name="FullName">

        </div>
        <br>
        <div class = "form-group">
        <label for ="exampleInputEmail">Email Address</label>
        <input type="email" class="form-control" id="exampleInputEmial" aria-describedby="emailHelp" 
        placeholder="Enter email" name="Email">
        <small id="emailHelp" class="form-text text-muted">Optional</small>
    </div>
    <br>
        <div class="form-group"></div>
        <label for ="exampleInputNumber">Contact Number</label>
        <input required type="Contact Number" class="form-control" id="exampleInputPassword" placeholder="Contact Number" name="ContactNo">
    </div>
    <br>
    <div class="container">
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Full Address</label>
        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
        <small id="Address_validation" class="form-text text-muted">Please mention your pincode</small>
    </div>
    <br>
        <button type="Submit" name="submit" class="btn btn-primary" type="button">Submit</button>
        
        </div>
    </form>
<?php echo 'Copyrights' .date('Y') . "Web Master" ?>