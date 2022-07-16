<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Swiper css -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<section id="header">
    <?php
    @include 'navbar.php';
    ?>


    <video autoplay muted loop id="myVideo">
        <source src="image/tour.mp4" type="video/mp4">
    </video>




    <div class="anim" style="margin-top:-20px;">
        <h4 class="change_contentone"></h4>
        <h2 class="change_content_two"> </h2>

        <div class="form_edit">
            <h3>Choose your Travel location</h3>
            <p>"You must be the change you wish to see in the world"</p>
        </div>
    </div>


</section>


<section id="Home" class="info bg-dark">
    <div class="image">
        <img src="https://images.pexels.com/photos/287240/pexels-photo-287240.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            alt="loading">

    </div>
    <div class="experience">
        <h2 class="text-light">We're truely dedicated to make your travel experience best</h2>
        <p class="text-light" id="lm1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias
            reiciendis deleniti possimus nemo non repellendus?

        </p>
        <button class="btn rounded-pill bg-secondary text-light" onclick="myFunction1()">Learn More</button>
    </div>
</section>


<section class="boxes py-5 px-5">
    <div class="box">
        <i class="fas fa-users fa-4x"></i>
        <h3>Advice & Support</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
    </div>
    <div class="box">
        <i class="fas fa-ticket fa-4x"></i>
        <h3>Air Ticketing</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
    </div>
    
    <div class="box">
        <i class="fas fa-hotel fa-4x"></i>
        <h3>Hotel Services</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
    </div>
    <div class="box">
        <i class="fas fa-box fa-4x"></i>
        <h3>Tour packages</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
    </div>
</section>


<!-- fav destination -->


<section id="favourite-destination" class="pb-5">

    <div class="container">

        <div class="py-5 text-center">

            <h2 class="fw-bolder">Find Your <span class="text-danger">Favourite Destination</span></h2>
            <p class="px-5text-muted">Travel has helped us to understand the meaning of life and it has helped us
                become
                better people. Each time we travel, we see the world with new eyes.
            </p>
            <h2>-----</h2>

            <div id="myBtnContainer">

                <button class="btn actives" onclick="filterSelection('historical')">Historical</button>
                <button class="btn" onclick="filterSelection('weekend')">Weekend</button>
                <button class="btn" onclick="filterSelection('holidays')">Holidays</button>
                <button class="btn" onclick="filterSelection('specialTour')">Special Tour</button>
            </div>

        </div>
        <div class="row py-3">


            <!-- Historical -->
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv historical">
                <div class="card"">
                    <img src="
                    https://images.pexels.com/photos/1287145/pexels-photo-1287145.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">Nepal Historical Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>852 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv historical">
                <div class="card">
                    <img src="https://images.pexels.com/photos/1485452/pexels-photo-1485452.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">Canada Historical Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>617 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv historical">
                <div class="card">
                    <img src="https://images.pexels.com/photos/5225243/pexels-photo-5225243.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">America Historical Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>728 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <!-- Weekend -->
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv weekend">
                <div class="card"">
                    <img src="
                    https://images.pexels.com/photos/4028822/pexels-photo-4028822.jpeg?auto=compress&cs=tinysrgb&w=600"
                    class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">Nepal Weekend Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>852 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv weekend">
                <div class="card">
                    <img src="https://images.pexels.com/photos/753626/pexels-photo-753626.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">Canada Weekend Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>617 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv weekend">
                <div class="card">
                    <img src="https://images.pexels.com/photos/2787212/pexels-photo-2787212.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">America Weekend Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>728 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <!-- Holidays -->
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv holidays">
                <div class="card"">
                    <img src="
                    https://images.pexels.com/photos/11734284/pexels-photo-11734284.jpeg?auto=compress&cs=tinysrgb&w=600"
                    class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">Nepal Holidays Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>852 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv holidays">
                <div class="card">
                    <img src="https://images.pexels.com/photos/2422515/pexels-photo-2422515.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">Canada Holidays Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>617 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv holidays">
                <div class="card">
                    <img src="https://images.pexels.com/photos/733029/pexels-photo-733029.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">America Holidays Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>728 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>



            <!-- Special Tour -->

            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv specialTour">
                <div class="card"">
                    <img src="
                    https://images.pexels.com/photos/4825701/pexels-photo-4825701.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">Nepal Special Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>852 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv specialTour">
                <div class="card">
                    <img src="https://images.pexels.com/photos/4356144/pexels-photo-4356144.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">Canada New Year Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>617 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-4 filterDiv specialTour">
                <div class="card">
                    <img src="https://images.pexels.com/photos/872831/pexels-photo-872831.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38 Reviews</p>
                        <hr>
                        <h5 class="card-title">America Christmas Tour</h5>
                        <hr>
                        <p class="card-text"><i class="fa-solid fa-eye"></i>728 Visiting Places<br> Some quick
                            example
                            text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- top deal -->
<section class="top_deal">
    <div>
        <div class="py-5 container">
            <div class="text-center">
                <h2 class="fw-bolder text-light">Today's <span class="text-danger">Top Deal</span></h2>
                <p class="px-5 text-light">Travel has helped us to understand the meaning of life and it has helped us
                    become better people. Each time we travel, we see the world with new eyes.
                </p>
                <h2 class="dash text-light">-----</h2>
            </div>

            <div class="swiper mySwiper my-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/2387873/pexels-photo-2387873.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <i class="fa-solid fa-location-dot text-muted home_s_card">Germany</i>

                                <hr>
                                <h5 class="card-title">Lorem, ipsum dolor.</h5>
                                <hr>
                                <p class="card-text"><i class="fa-solid fa-eye"></i>852 Visiting
                                    Places<br> Some quick example text to build on the card title and
                                    make up the bulk of the card's content.</p>
                                <hr>
                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38
                                    Reviews</p>
                                <hr>
                                <p>From <span class="text-danger">$250.00</span> 7 days 6 nights</p>

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/132037/pexels-photo-132037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <i class="fa-solid fa-location-dot text-muted home_s_card">Japan</i>

                                <hr>
                                <h5 class="card-title">Lorem, ipsum dolor.</h5>
                                <hr>
                                <p class="card-text"><i class="fa-solid fa-eye"></i>852 Visiting
                                    Places<br> Some quick example text to build on the card title and
                                    make up the bulk of the card's content.</p>
                                <hr>
                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38
                                    Reviews</p>
                                <hr>
                                <p>From <span class="text-danger">$250.00</span> 5 days 4 nights</p>

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/1718337/pexels-photo-1718337.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <i class="fa-solid fa-location-dot text-muted home_s_card">Thailand</i>

                                <hr>
                                <h5 class="card-title">Lorem, ipsum dolor.</h5>
                                <hr>
                                <p class="card-text"><i class="fa-solid fa-eye"></i>852 Visiting
                                    Places<br> Some quick example text to build on the card title and
                                    make up the bulk of the card's content.</p>
                                <hr>
                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38
                                    Reviews</p>
                                <hr>
                                <p>From <span class="text-danger">$215.00</span> 4 days 5 nights</p>

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/4210037/pexels-photo-4210037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <i class="fa-solid fa-location-dot text-muted home_s_card">Mexico</i>

                                <hr>
                                <h5 class="card-title">Lorem, ipsum dolor.</h5>
                                <hr>
                                <p class="card-text"><i class="fa-solid fa-eye"></i>852 Visiting
                                    Places<br> Some quick example text to build on the card title and
                                    make up the bulk of the card's content.</p>
                                <hr>
                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38
                                    Reviews</p>
                                <hr>
                                <p>From <span class="text-danger">$250.00</span> 7 days 6 nights</p>

                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <img src="https://images.pexels.com/photos/2470607/pexels-photo-2470607.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <i class="fa-solid fa-location-dot text-muted home_s_card"> Indonesia</i>
                                <hr>
                                <h5 class="card-title">Lorem, ipsum dolor.</h5>
                                <hr>
                                <p class="card-text"><i class="fa-solid fa-eye"></i>852 Visiting
                                    Places<br> Some quick example text to build on the card title and
                                    make up the bulk of the card's content.</p>
                                <hr>
                                <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 38
                                    Reviews</p>
                                <hr>
                                <p>From <span class="text-danger">$215.00</span> 4 days 5 nights</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>


        </div>
    </div>
</section>

<?php
    @include 'footer.php';
    ?>


<script src="js/bootstrap.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/home.js"></script>