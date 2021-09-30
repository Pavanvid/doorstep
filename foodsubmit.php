<?php
    $title ="submitted";
    include 'Includes/header.php';
    include 'Database/connection.php';
    if(isset($_POST['submit'])){  //does it exist
        //extract values from the $_POST array
        //$require = $_POST['required'];
        $fname = $_POST['FullName'];
        $email = $_POST['Email'];
        $contact = $_POST['ContactNo'];
        $addres = $_POST['address'];
        $grocery =$_POST['grocery_items'];
        $groceryArray = explode(" ", $grocery);

        // calling the func  to insert and track if success or not
        $issuccess = $foodcrud->insertcustomers($fname,$email,$contact,$addres,$grocery);

        if($issuccess){
            //echo '<h1 class="text-center text-success">You order is done!!Thank You :)';
            include 'Includes/sucess.php';
        }
        else{
            //echo '<h1 class="text-center text-danger">Your order has not done yet , please check again)';
            include 'Includes/errors.php';
        }
    }   
?>

<div class="card" style="width: 20rem;">
    <div class="card-body">
    <h5 class="card-title">
        <?php echo "FOOD DETAILS:" ?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
        <?php  echo $_POST['FullName']; ?>
    </h6>
    <p class="card-text">
        Email Address : <?php echo $_POST['Email']; ?>
    </p>
    
    <p class="card-text">
        Mobile Number : <?php echo $_POST['ContactNo']; ?>
    </p>
    <p class="card-text">
        Address : <?php echo $_POST['address']; ?>
    </p>
    <h2>Your odered Items are : </h2>
    <p class="card-text">
        <?php     
        echo '<hr/>';
        foreach ($groceryArray as $item){
            echo $item . "<br>";
            }
        echo "<br>";
         ?>
    </p>
</div>
<br>
<br>
<br>
<?php include 'Includes/footer.php'; ?>
