
<!-- custom css -->
<link rel="stylesheet" href="css/contact.css">
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<section id="header"> 
<?php
    @include 'navbar.php';
    ?>

<div class="content">
            <h1>Contact <span class="text-danger">Us</span></h1>
            <h3>“Remember that happiness is a way of travel, not a destination.”</h3>
        </div>
    </section>

<section id ="Contact">
        <div class=" py-5 bg-light">
            <div class=" container ">
                <div class="text-center">
                    <h3>SEND US A MESSAGE</h3>
                    <p class="opacity-75 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aliquid
                        eaque cupiditate non odit. <br> Dolores, omnis adipisci?</p>
                </div>




                <div class="row pb-5">
                    <div class="col-md-8 col-sm-12 py-3">
                        <div class="d-flex mb-4">
                            <div class=" w-50">
                                <p class="opacity-75">Name*</p>
                                <input class="form-control" placeholder="Your name" type="text">
                            </div>
                            <div class=" mx-3 w-50">
                                <p class="opacity-75">Email*</p>
                                <input class="form-control" placeholder="Your email" type="email">
                            </div>
                        </div>
                        <p class="opacity-75">Massage*</p>
                        <textarea placeholder="Your massage" class=" form-control " name="" id="" cols="3"
                            rows="3"></textarea>
                        <a class="btn  mt-3" style="background: #6610f2; color: white;" href="">sent massage <span><i
                                    class="fa-solid fa-rocket"></i></span></a>
                    </div>
                    <div class="col-md-4 col-sm-12 d-flex justify-content-center  flex-column py-3">
                        <p class="opacity-75"> <span><i class="fa-solid fa-envelope"></i></span> : travel@gamil.com
                        </p>
                        <p class="opacity-75"> <span><i class="fa-solid fa-link"></i></span> : www.website.com </p>
                        <p class="opacity-75"> <span><i class="fa-solid fa-mobile-screen-button"></i></span> : (+001)
                            654 336 6888 </p>
                        <p class="opacity-75"> <span><i class="fa-solid fa-clock"></i></span> : 9.00am - 6.00pm </p>
                        <p class="opacity-75"> <span><i class="fa-solid fa-location-dot"></i></span> :1400 Narayanganj,
                            Dhaka </p>

                    </div>
                </div>


            </div>
        </div>

    </section>

    <?php
    @include 'footer.php';
    ?>

    <script src="js/bootstrap.min.js"></script>