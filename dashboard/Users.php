
   
    
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
                        <h6 class="title">User List</h6>
                    </div>
                </div>

               
    <?php


$result=mysqli_query($conn,"SELECT * FROM user_form") or die ("Queary failed");
if(mysqli_num_rows($result)>0){

    ?>
    <table cellpadding="7px"  id="customers">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        
        </thead>
        <tbody>
             <?php while ($row=mysqli_fetch_assoc($result))
            {

            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
 } 
 mysqli_close($conn);
 ?>
</div>
</div>
</section>