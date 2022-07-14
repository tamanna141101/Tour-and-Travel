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


$result=mysqli_query($conn,"SELECT * FROM book_form") or die ("Queary failed");
if(mysqli_num_rows($result)>0){

    ?>
                       <table cellpadding="7px" id="customers">
                           <thead>
                               <th>Id</th>
                               <th>Name</th>

                               <th>location</th>
                               <th>Guests</th>
                               <th>Packages</th>
                               <th>Price</th>

                           </thead>
                           <tbody>
                               <?php while ($row=mysqli_fetch_assoc($result))
            {

            ?>
                               <tr>
                                   <td><?php echo $row['id'];?></td>
                                   <td><?php echo $row['name'];?></td>
                                   <td><?php echo $row['location'];?></td>
                                   <td><?php echo $row['guests'];?></td>
                                   <td><?php echo $row['package'];?></td>
                                   <td><?php echo $row['price'];?></td>



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
   n>