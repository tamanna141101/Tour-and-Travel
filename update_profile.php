<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){


   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `user_form` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   }

   
}

?>



<!-- custom css file link  -->
<link rel="stylesheet" href="css/update_profile.css">


<section class="update-profile">
    <?php
    @include 'navbar.php';
    ?>


    <div>
        <?php
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

            <div class="flex">
                <div class="inputBox">
                    <span>username :</span>
                    <input type="text" name="name" value="<?php echo $fetch['name']; ?>" class="box"
                        onclick="myFunction0()" id="name">
                    <span>your email :</span>
                    <input type="email" name="email" value="<?php echo $fetch['email']; ?>" class="box"
                        onclick="myFunction1()" id="email">
                    <span>your Phone Number :</span>
                    <input type="text" name="phone" value="<?php echo $fetch['phone']; ?>" class="box"
                        onclick="myFunction2()" id="phone">
                </div>
                <div class="inputBox ">
                    <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
                    <span>old password :</span>
                    <input type="password" name="update_pass" placeholder="enter previous password" class="box">
                    <span>new password :</span>
                    <input type="password" name="new_pass" placeholder="enter new password" class="box">
                    <span>confirm password :</span>
                    <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
                </div>
            </div>
            <input type="submit" value="update profile" name="update_profile" class="btn">
            <a href="index.php" class="delete-btn">go back</a>
        </form>

    </div>

</section>

<?php
    @include 'footer.php';
    ?>



<script>
function myFunction0() {
    document.getElementById("name").readOnly = true;
}


function myFunction1() {
    document.getElementById("email").readOnly = true;
}


function myFunction2() {
    document.getElementById("phone").readOnly = true;
}
</script>