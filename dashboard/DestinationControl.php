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





?>
<link rel="stylesheet" href="style.css">

<section id="dashboard">
    <div>
        <?php
    @include 'sidenav.php';
    ?>

        <div class="content">

            <div id="destination-control">
                <div class="container">
                    <h6 class="title">Destination Control</h6>

                    <?php


$result=mysqli_query($conn,"SELECT * FROM Add_destination") or die ("Queary failed");
if(mysqli_num_rows($result)>0){

    ?>
                    <table cellpadding="7px" id="customers">
                        <thead>
                            <th>Id</th>
                            <th>Location</th>
                            <th>Price</th>         
                            <th>Package</th>
                            <th>Description</th>
                            <th>image</th>     
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php while ($row=mysqli_fetch_assoc($result))
            {

            ?>
                            <tr>
                                <td><?php echo $row['d_id'];?></td>
                                <td><?php echo $row['destination'];?></td>
                                <td><?php echo $row['price'];?></td>
                                <td><?php echo $row['package'];?></td>
                                <td style=" width: 40%;"><?php echo $row['description'];?></td>
                                <td><img src="upload_image/<?php echo $row['image']; ?>" style=" height:100px;" class="card-img-top"
                alt="..."></td>
                               


                                <td>
                                    <input type="submit" name="submit" id="btn" value="Edit"> 
                                    <a href='destination_delete-inline.php?id=<?php echo $row['d_id'];?>'
                                        onclick="return checkDelete()" class="btn3">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>


                </div>
            </div>



            <?php
 } 
 mysqli_close($conn);
 ?>
        </div>
    </div>
</section>
</body>
<script>
function checkDelete() {
    return confirm("Are You Sure");

}
</script>