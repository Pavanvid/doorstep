<?php
    $title ="Groceries";
    include 'Includes/header.php';
    include 'Database/connection.php';
?>

<h1 class="text-center"> Welcome To The Food Stall  </h1>
<marquee class='text-danger'>మీ ప్రతి ఆర్డర్ కి 40 రూపాయలు మాత్రమే సర్వీస్ చార్జ్ పడుతుంది.</marquee>
<table class="table">
  <thead>
    <tr>
    
      <th scope="col">NON_VEG ITEMS</th>
      <th scope="col">VEG ITEMS</th>
      >
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>CHICKEN BIRYANI</td>
      <td>RICE_FULL PARCEL</td>
    </tr>
    <tr>
      <td>MUTTON BIRYANI</td>
      <td>CURD RICE</td>
    </tr>
  </tbody>
</table>
<br>
    <form method="post" action="foodsubmit.php">  
    <div class="mb-3" >
        <label for="exampleFormControlTextarea1" class="form-label">Please enter NON-VEG ITEMS here...</label>
        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ఇక్కడ, దయచేసి మీకు కావలసిన కిరాణా సామాగ్రిని నమోదు చేయండి" 
        name="nonvegitems"></textarea>
        <small id="emailHelp" class="form-text text-muted">Type in english or telugu</small>
        <br>
    </div>
    <div class="mb-3" >
        <label for="exampleFormControlTextarea1" class="form-label">Please enter VEG ITEMS here...</label>
        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ఇక్కడ, దయచేసి మీకు కావలసిన కిరాణా సామాగ్రిని నమోదు చేయండి" 
        name="vegitems"></textarea>
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