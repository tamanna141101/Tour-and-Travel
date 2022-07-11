<link rel="stylesheet" href="css/login.css">
<section id="head">
<?php
    @include 'navbar.php';
    ?>

    <div class="form">
        <h2>Sign In</h2>
        <form action="" method="" onsubmit="return validate()">
            <!-- start of a form. after submission the destination page link in written inside 'action' attribute.
                there are two types of methods mainly.
                1) get(by default): all the values giver by user are showed in the url.  
                2) post: all the values giver by user are not showed in the url.   -->
          
         
                <div class="inputBox">    
            <label for="uname">Userame: </label>
            <input type="text" id="uname" name="uname" autocomplete="off" class="input">
            <br>
            <span id="unameError" class="errors"></span>
            <!-- takes text type input -->
            <!-- 'name' is used to send the value to backend. 'autocomplete=off' is used to stop showing previous values. if user doesn't fill any value then the value inside 'value' attribute comes in action -->
            </div>
            <!-- takes email as input -->

           
           
            <div class="inputBox">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" >
            <br>
            <span id="passwordError" class="errors"></span>
            <br>
            <input type="checkbox" onclick="myFunction()">Show Password
        </div>
            <!-- takes password as input -->
    
           
         
           
    
            <!-- submit button -->
            <div class="inputBox1">
            <input class="btn" type="submit" value="Sign In">
            </div>
    
        </form>

        <div class="signup">
        <p>Create Account.</p>
       <a href="register.php">Sign Up</a>
    </div>

    </div>

    </section>
    <?php
    @include 'footer.php';
    ?>

    <script src="js/login.js"></script>