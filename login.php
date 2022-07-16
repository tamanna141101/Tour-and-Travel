<?php

include 'config.php';
session_start();
if(isset($_POST['submit'])){


   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, md5($_POST['password']));
   

   $select = mysqli_query($conn, "SELECT * FROM user_form WHERE email = '$email' AND password = '$password' ") or die('query failed');

   //Set session
   if(mysqli_num_rows($select) > 0){
    $row = mysqli_fetch_assoc($select);
    $_SESSION['user_id'] = $row['id'];
    header("location:http://localhost/tat/index.php");
 }else{
    $message[] = 'incorrect email or password!';
 }

    }
   ?>




<link rel="stylesheet" href="css/login.css">
<section id="head">


    <div class="form">
        <h2>Sign In</h2>
        <form action="" method="POST" onsubmit="return validate()">

            <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
            

            <div class="inputBox">
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" class="input">
                <br>
                <span id="emailError" class="errors"></span>
            </div>



            <div class="inputBox">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password">
                <br>
                <span id="passwordError" class="errors"></span>
                <br>
                <input type="checkbox" onclick="myFunction()">Show Password
            </div>
            <!-- takes password as input -->





            <!-- submit button -->
            <div class="inputBox1">
                <input class="btn" name="submit" type="submit" value="Sign In">
            </div>

        </form>

        <div class="signup">
            <p>Create Account.</p>
            <a href="register.php">Sign Up</a>
        </div>

    </div>

</section>



<script src="js/login.js"></script>