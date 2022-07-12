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


        <div class="card" style="width: 18rem;">
            <img src="https://images.pexels.com/photos/161853/eiffel-tower-paris-france-tower-161853.jpeg?auto=compress&cs=tinysrgb&w=600"
                class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Paris</h3>
                <p class="card-text fs-5">3 days & 2 night <br> From<span class="text-danger fw-bold">$350.00</p>
                <a href="booking.php"><button class="btn">Book Now</button></a>
            </div>
        </div>

    </div>
</section>

<?php
    @include 'footer.php';
    ?>

<script src="js/bootstrap.min.js"></script>