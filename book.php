<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header("location:http://localhost/tat/login.php");
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header("location:http://localhost/tat/index.php");
}

// insert Booking Information

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $package = $_POST['package'];
    $price = $_POST['price'];

    $insert =  mysqli_query($conn, "INSERT INTO book_form(name, email, phone, address, location, guests, package, price) values('{$name}','{$email}','{$phone}','{$address}','{$location}','{$guests}','{$package}','{$price}') ")or die('query failed');
    {$message[] = 'Succcessful! Please wait for our confirmation mail..';}
}



?>


<!-- custom css -->
<link rel="stylesheet" href="css/book.css">
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<section id="header">
    <?php
    @include 'navbar.php';
    ?>

    <div class="content">
        <h1>Book<span class="text-danger">Now</span></h1>
        <h3>“Remember that happiness is a way of travel, not a destination.”</h3>
    </div>


</section>
</section>
<?php
      
      if(isset($message)){
        foreach($message as $message){
           echo '<div class="message">'.$message.'</div>';
        }
     }
   
   ?>

<?php

//GET ID from destination.php and Add_destination database table
$d_id=$_GET['id'];
      $select = mysqli_query($conn, "SELECT * FROM Add_destination WHERE d_id = '$d_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   
   ?>


<form action="" method="post">
    <div class=" py-5 bg-light">
        <div class=" container ">

            <div class="row pb-5">
                <div class="col-md-12 col-sm-12 py-3">
                    <div class="d-flex mb-4">
                        <div class=" w-50">
                            <label for="name">User Name: </label>
                            <input class="form-control" placeholder="Your Name:" type="text" id="name" name="name">
                        </div>
                        <div class=" mx-3 w-50">
                            <label for="email">Email: </label>
                            <input class="form-control" placeholder="Your Email:" type="text" id="email" name="email">
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class=" w-50">
                            <label for="phone">Phone: </label>
                            <input class="form-control" placeholder="Your phone Name" type="text" id="phone"
                                name="phone">
                        </div>
                        <div class=" mx-3 w-50">
                            <label for="address">Address: </label>
                            <input class="form-control" placeholder="your address" type="text" id="text" name="address">
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class=" w-50">
                            <label for="location">Where to: </label>
                            <input class="form-control" value="<?php echo $fetch['destination']; ?>" type="text"
                                name="location" onclick="myFunction2()" id="location">
                        </div>
                        <div class=" mx-3 w-50">
                            <label for="email">How many: </label>
                            <input class="form-control" placeholder="number of guests" type="number" name="guests">
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class=" w-50">
                            <label for="package">Package: </label>
                            <input class="form-control" type="text" name="package"
                                value="<?php echo $fetch['package']; ?>" onclick="myFunction()" id="package">
                        </div>
                        <div class=" mx-3 w-50">
                            <label for="price">Price: </label>
                            <input class="form-control" type="text" name="price" value="<?php echo $fetch['price']; ?>"
                                onclick="myFunction1()" id="price">
                        </div>
                    </div>


                </div>
            </div>

            <div class="btn1">
                <input class="btn" name="submit" type="submit" value="Book Now">
            </div>

        </div>
    </div>

</form>

</section>

<?php
    @include 'footer.php';
    ?>


<script>
function myFunction() {
    document.getElementById("package").readOnly = true;
}


function myFunction1() {
    document.getElementById("price").readOnly = true;
}


function myFunction2() {
    document.getElementById("location").readOnly = true;
}
</script>