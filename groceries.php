<?php
    $title ="Groceries";
    include 'Includes/header.php';
    include 'Database/connection.php';
?>

<h1 class="text-center"> Welcome To The Grocery Shop </h1>
    <form method="post" action="aftrsubmit.php">  
    <div class="mb-3" >
        <label for="exampleFormControlTextarea1" class="form-label">Which Items you need from the Grocery shop</label>
        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ఇక్కడ, దయచేసి మీకు కావలసిన కిరాణా సామాగ్రిని నమోదు చేయండి" 
        name="grocery_items"></textarea>
    </div>
        <div class="form-group">
            <label for="Full Name">Name</label>
            <input required type="text" class="form-control" id="exampleInputName" placeholder="Full Name" name="FullName">

        </div>
        <div class = "form-group">
        <label for ="exampleInputEmail">Email Address</label>
        <input type="email" class="form-control" id="exampleInputEmial" aria-describedby="emailHelp" 
        placeholder="Enter email" name="Email">
        <small id="emailHelp" class="form-text text-muted">Optional</small>
    </div>
        <div class="form-group"></div>
        <label for ="exampleInputNumber">Contact Number</label>
        <input required type="Contact Number" class="form-control" id="exampleInputPassword" placeholder="Contact Number" name="ContactNo">
    </div>
    <div class="container">
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Full Address</label>
        <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
        <small id="Address_validation" class="form-text text-muted">Please mention your pincode</small>
    </div>
    
        <button type="Submit" name="submit" class="btn btn-primary" type="button">Submit</button>
        
        </div>
    </form>
<?php echo 'Copyrights' .date('Y') . "Web Master" ?>