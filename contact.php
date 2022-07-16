<?php

//session 

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

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    

    $result =  mysqli_query($conn, "INSERT INTO contact(name, email, msg) values('{$name}','{$email}','{$msg}') ")or die('query failed');
    {$message[] = 'Thank You';}

    //Send Message to Mail Account
  
    $to_email = $_POST['email'];
    $subject = "Thank you";
    $body = "Hello, Sir/Maam
    We are contacting you as soon as possible.
    Best wishes,
    Travel Agency";
    $headers = "From: tamannaislam12890@gmail.com";
    
    mail($to_email, $subject, $body, $headers);
     
    }


?>


<!-- custom css -->
<link rel="stylesheet" href="css/contact.css">
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<section id="header">
    <?php
    @include 'navbar.php';
    ?>

    <div class="content">
        <h1>Contact <span class="text-danger">Us</span></h1>
        <h3>“Remember that happiness is a way of travel, not a destination.”</h3>
    </div>
</section>

<section id="Contact">
    <div class=" py-5 bg-light">
        <div class=" container ">
            <div class="text-center">
                <h3>SEND US A MESSAGE</h3>
                <p class="opacity-75 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aliquid
                    eaque cupiditate non odit. <br> Dolores, omnis adipisci?</p>
            </div>

            <?php

                // seclect data from user_form table
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }

      if(isset($message)){
        foreach($message as $message){
           echo '<div class="message">'.$message.'</div>';
        }
     }
   
   ?>
            <form action="" method="post">

                <div class="row pb-5">
                    <div class="col-md-8 col-sm-12 py-3">
                        <div class="d-flex mb-4">
                            <div class=" w-50">
                                <label for="name">User Name: </label>
                                <input class="form-control" Value="<?php echo $fetch['name']; ?>" type="text" id="name"
                                    name="name">
                            </div>
                            <div class=" mx-3 w-50">
                                <label for="email">Email: </label>
                                <input class="form-control" Value="<?php echo $fetch['email']; ?>" type="text"
                                    id="email" name="email">
                            </div>
                        </div>

                        <label for="msg">Massage: </label>
                        <textarea placeholder="Your massage" class=" form-control " name="msg" id="msg" cols="3"
                            rows="3"></textarea>
                        <div class="btn1">
                            <input class="btn" name="submit" type="submit" value="Sent Massage">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 d-flex justify-content-center  flex-column py-3">
                        <p class="opacity-75"> <span><i class="fa-solid fa-envelope"></i></span> : travel@gamil.com
                        </p>
                        <p class="opacity-75"> <span><i class="fa-solid fa-link"></i></span> : www.website.com </p>
                        <p class="opacity-75"> <span><i class="fa-solid fa-mobile-screen-button"></i></span> : (+001)
                            654 336 6888 </p>
                        <p class="opacity-75"> <span><i class="fa-solid fa-clock"></i></span> : 9.00am - 6.00pm </p>
                        <p class="opacity-75"> <span><i class="fa-solid fa-location-dot"></i></span> :1400 Narayanganj,
                            Dhaka </p>

                    </div>
                </div>
            </form>

        </div>
    </div>

</section>

<?php
    @include 'footer.php';
    ?>



<script src="js/bootstrap.min.js"></script>