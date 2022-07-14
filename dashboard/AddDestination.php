<?php
$conn = mysqli_connect('localhost','root','','travel') or die('connection failed');
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



if(isset ($_POST['submit'])){
    $destination = $_POST['destination'];
    $price = $_POST['price'];
    $package = $_POST['package'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];  
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'upload_image/'. $image;


    if($image_size > 2000000){
        $message[] = 'image size is too large!';
     }else{
    $insert =  mysqli_query($conn, "INSERT INTO Add_destination(destination, price, package, description, image) values('{$destination}','{$price}','{$package}','{$description}','{$image}') ")or die('query failed');
    

    if($insert){
        move_uploaded_file($image_tmp_name, $image_folder);
        $message[] = 'Destination Add successfully!';
       

     }else{
        $message[] = 'registeration failed!';
     }
        // header('location: http://localhost/tat/destination.php');
     

}

}



?>


    
    
    
    
    
    <section id="dashboard">
   
        <div>
            
        <?php
    @include 'sidenav.php';
    ?>

            <div class="content">
                <div id='addDestination'>
                    <div class="container">
                        <h6 class="title">Destination Add</h6>

                        <?php

      if(isset($message)){
        foreach($message as $message){
           echo '<div class="message">'.$message.'</div>';
        }
     }
   
   ?>

                        <div class="product-content">
                            <form action="" method="POST" enctype = "multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <label for="destination">Destinations:</label>
                                        <select name="destination">
                                            <option value="germany">Germany</option>
                                            <option value="japan">Japan</option>
                                            <option value="thailand">Thailand</option>
                                            <option value="mexico">Mexico</option>
                                            <option value="indonesia">Indonesia</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <label for="price">Price</label>
                                        <input type="text" name="price" placeholder="Price">
                                    </div>

                                    <div class="col-sm-12 col-md-4">
                                        <label for="package">package</label>
                                        <input max="5" min="0"  type="text" name="package" placeholder="package" >
                                    </div>

                                </div>
        
                             
        
                                <div class="row mt-4">
                                    <div class="col-sm-12 col-md-6">
                                        <label htmlFor="description">Description</label>
                                        <textarea name="description" rows="8"></textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
        
                                    <label htmlFor="UploadPhoto">Upload Photo</label>
                                        <div class="image-upload">
                                            <label for="file-input">
                                                <img src="../image/folderImage.png" alt="Image">
                                                <h5>Upload photo</h5>
                                            </label>
        
                                            <input  id="file-input" type="file" name="image" accept="image/jpg, image/jpeg, image/png">
                                        </div>
                                    </div>
                                </div>
                                <input style = "background:darkgray"  name="submit" class='mt-5 text-white bg-darkgray' type="submit" value="Submit">
                            </form>
        
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>