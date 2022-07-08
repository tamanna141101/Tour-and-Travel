
    <link rel="stylesheet" href="css/register.css">

<section id="head">
<?php
    @include 'navbar.php';
    ?>

    <div class="form">
        <h2>Sign Up</h2>
        <form action="#" method="" onsubmit="return validate()">
            <!-- start of a form. after submission the destination page link in written inside 'action' attribute.
                there are two types of methods mainly.
                1) get(by default): all the values giver by user are showed in the url.  
                2) post: all the values giver by user are not showed in the url.   -->
            <div class="inputBox">    
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" autocomplete="off" class="input">
            <br>
            <span id="nameError" class="errors"></span>
            <!-- takes text type input -->
            <!-- 'name' is used to send the value to backend. 'autocomplete=off' is used to stop showing previous values. if user doesn't fill any value then the value inside 'value' attribute comes in action -->
            </div>
         
        
            <div class="inputBox">
            <label for="email">Email: </label>
            <input type="text" id="email" name="email" class="input">
            <br>
            <span id="emailError" class="errors"></span>
            </div>
            <!-- takes email as input -->


            <div class="inputBox">
            <label for="phone">Phone: </label>
            <input type="text" id="phone" name="phone" class="input">
            <br>
            <span id="phoneError" class="errors"></span>
            </div>
            <!-- takes email as input -->
    
           
           
            <div class="inputBox">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" class="input">
            <br>
            <span id="passwordError" class="errors"></span>
            </div>
            <!-- takes password as input -->
    
           
           
            <div class="inputBox">
            <label for="cpassword">Confirm Password: </label>
            <input type="password" id="cpassword" name="cpassword" class="input">
            <br>
            <span id="cpasswordError" class="errors"></span>
            </div>
            <!-- takes password as input -->
    
         
           
    
            <!-- submit button -->
            <div class="inputBox1">
            <input class="btn" type="submit" value="Sign up">
            </div>
    
        </form>

        <div class="singin">
        <p>Already have an Account </p>
       <a href="login.php"><input class="btn" type="submit" value="Sign in"></a>
    </div>

    </div>

    </section>
    <?php
    @include 'footer.php';
    ?>

    <script src="js/register.js"></script>
