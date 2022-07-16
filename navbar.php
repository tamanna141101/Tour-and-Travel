<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <section class="Navbar">
        <nav class="navbar navbar-expand-lg navbar fixed-top ">
            <div class="container-fluid px-5">
                <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
        
      ?>
                <a class="navbar-brand fs-1 log " style="color: #6610f2" href="#">Travel</a>
                <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class=" fas fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent ">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link fw-bolder" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-bolder" aria-current="page" href="about.php">About
                                us</a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder " aria-current="page"
                                href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item"><a class="nav-link fw-bolder " aria-current="page"
                                href="destination.php">Destination</a></li>


                        <li class="nav-item"><a class="nav-link fw-bolder  " aria-current="page"
                                href="contact.php">Contact
                                us</a></li>
                        <li class="nav-item"><a class="nav-link fw-bolder " aria-current="page"
                                href="dashboard/AddDestination.php">Dashboard</a></li>


                    </ul>
                    <div class="wel_log">
                        <div class="welcome">
                            <h3><?php echo $fetch['name'];?></h3>
                        </div>

                        <div class="dropdown user">
                            <span><i class="fa-solid fa-circle-user fs-2"> </i></span>
                            <div class="dropdown-content">
                                <a id="login" href="login.php">log In</a>
                                <a id="logout" href="book.php?logout=<?php echo $user_id; ?>">Log out</a>
                                <a id="account" href="update_profile.php">Account</a>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </nav>
    </section>

    <script>
        
    let user = "<?php echo $fetch['name']; ?>";
    console.log(user);


    if (user) {
        document.getElementById("logout").style.display = "block";
        document.getElementById("account").style.display = "block";
        document.getElementById("login").style.display = "none";
    } else {
        document.getElementById("logout").style.display = "none";
        document.getElementById("account").style.display = "none";
        document.getElementById("login").style.display = "block";
    }
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/home.js"></script>