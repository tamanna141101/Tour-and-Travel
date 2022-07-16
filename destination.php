<?php

include 'config.php';


?>

<!-- custom css -->
<link rel="stylesheet" href="css/destination.css">
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<section id="header">
    <?php
    @include 'navbar.php';
    ?>

    <div class="content">
        <h1>Destination <span class="text-danger"> List</span></h1>
        <h3>“Remember that happiness is a way of travel, not a destination.”</h3>
    </div>
</section>

<section>
    <div id="booking">

        <?php 
			
			$insert =  mysqli_query($conn, "SELECT * FROM Add_destination");
			
			if (mysqli_num_rows($insert) > 0) {
				while ($row = mysqli_fetch_assoc($insert)) {

			?>
        <div class="card" style="width: 18rem;">
            <img src="dashboard/upload_image/<?php echo $row['image']; ?>" style=" height:200px;" class="card-img-top"
                alt="...">
            <div class="card-body">

                <h3 class="card-title"><?php echo $row['destination']; ?></h3>
                <p><?php echo $row['description']; ?></p>
                <p class="card-text fs-5"><?php echo $row['package']; ?><br> From<span
                        class="text-danger fw-bold"><?php echo $row['price']; ?></p>
                <a href="book.php?id=<?php echo $row['d_id'];?>"><button class="btn">Book Now</button></a>
            </div>
        </div>

        <?php

				}
			}
			
			?>

    </div>
</section>

<?php
    @include 'footer.php';
    ?>

<script src="js/bootstrap.min.js"></script>



