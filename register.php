<?php


include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $password = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$password' ") or die('query failed');

   if(mysqli_num_rows($select) > 0){
    $message[] = 'user already exist'; }
    else{
 if($password != $cpassword)  {
            $message[] = 'confirm password not matched!';
         }

         

            else{ $insert = mysqli_query($conn, "INSERT INTO user_form(name, email, phone, password) VALUES('{$name}', '{$email}', '{$phone}','{$password}')") or die('query failed');
              header("location:http://localhost/tat/login.php");
           
        }
     }
    }



   
   ?>


<link rel="stylesheet" href="css/register.css">

<section id="head">


    <div class="form">
        <h2>Register Now</h2>
        <form action="" method="POST" onsubmit="return validate()">

            <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
            <!-- start of a form. after submission the destination page link in written inside 'action' attribute.
                there are two types of methods mainly.
                1) get(by default): all the values giver by user are showed in the url.  
                2) post: all the values giver by user are not showed in the url.   -->
            <div class="inputBox">
                <label for="name">User Name: </label>
                <input type="text" id="name" name="name" autocomplete="off" class="input">
                <br>
                <span id="nameError" class="errors"></span>
                <!-- takes text type input -->
                <!-- 'name' is used to send the value to backend. 'autocomplete=off' is used to stop showing previous values. if user doesn't fill any value then the value inside 'value' attribute comes in action -->
            </div>


            <div class="inputBox">
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" class="input">
                <br>
                <span id="emailError" class="errors"></span>
            </div>
            <!-- takes email as input -->


            <div class="inputBox">
                <label for="phone">Phone: </label>
                <input type="text" id="phone" name="phone" class="input">
                <br>
                <span id="phoneError" class="errors"></span>
            </div>
            <!-- takes email as input -->



            <div class="inputBox">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" class="input">
                <br>
                <span id="passwordError" class="errors"></span>
            </div>
            <!-- takes password as input -->



            <div class="inputBox">
                <label for="cpassword">Confirm Password: </label>
                <input type="password" id="cpassword" name="cpassword" class="input">
                <br>
                <span id="cpasswordError" class="errors"></span>
            </div>
            <!-- takes password as input -->




            <!-- submit button -->
            <div class="inputBox1">
                <input class="btn" name="submit" type="submit" value="Sign up">
            </div>

        </form>

        <div class="signin">
            <p>Already have an Account? </p>
            <a href="login.php">Sign in</a>
        </div>

    </div>

</section>

<script src="js/register.js"></script>