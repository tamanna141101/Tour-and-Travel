<link rel="stylesheet" href="css/login.css">
<section id="head">
<?php
    @include 'navbar.php';
    ?>

    <div class="form">
        <h2>Sign In</h2>
        <form action="#" method="" onsubmit="return validate()">
            <!-- start of a form. after submission the destination page link in written inside 'action' attribute.
                there are two types of methods mainly.
                1) get(by default): all the values giver by user are showed in the url.  
                2) post: all the values giver by user are not showed in the url.   -->
          
         
        
            <div class="inputBox">
            <label for="email">Email: </label>
            <input type="text" id="email" name="email" class="input">
            <br>
            <span id="emailError" class="errors"></span>
            </div>
            <!-- takes email as input -->

           
           
            <div class="inputBox">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" class="input">
            <br>
            <span id="passwordError" class="errors"></span>
            </div>
            <!-- takes password as input -->
    
           
         
           
    
            <!-- submit button -->
            <div class="inputBox1">
            <input class="btn" type="submit" value="Sign In">
            </div>
    
        </form>

        <div class="singup">
        <p>Not Signed Up</p>
       <a href="register.php"><input class="btn" type="submit" value="Signup Now"></a>
    </div>

    </div>

    </section>
    <?php
    @include 'footer.php';
    ?>

    <script src="js/login.js"></script>