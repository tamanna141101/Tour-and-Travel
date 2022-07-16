function validate() {
    var errors = document.getElementsByClassName('errors');
    for (let item of errors)
        item.innerHTML = "";

    var check = 0;
    var name = document.getElementById('name').value.trim();

    if (name.length == 0) {
        document.getElementById('nameError').innerHTML = "Input Your Name";
        check = 1;
    }
    else if (name.length < 1) {
        document.getElementById('nameError').innerHTML = "Name length must be one or more.";
        check = 1;
    }


    var email = document.getElementById('email').value;

    if (email.length == 0) {
        document.getElementById('emailError').innerHTML = "Input Your email";
        check = 1;
    }

    else if (!email.match(/[@]/)) {
        document.getElementById('emailError').innerHTML = "Input a valid email";
        check = 1;
    }

    else if (email.indexOf('@') == 0) {
        document.getElementById('emailError').innerHTML = "Input a valid email";
        check = 1;
    }

    var phone = document.getElementById('phone').value;

    if (phone.length == 0) {
        document.getElementById('phoneError').innerHTML = "Input Your Phone Number";
        check = 1;
    }

    else if (phone.match(/[!\@\#\$\%\^\&\*\(\)\-\=\A-Z\a-z]/)) {
        document.getElementById('phoneError').innerHTML = "Input a valid Phone Number";
        check = 1;
    }




    var password = document.getElementById('password').value;

    if (password.length == 0) {
        document.getElementById('passwordError').innerHTML = "Input Your password";
        check = 1;
    }
    else if (password.length < 5) {
        document.getElementById('passwordError').innerHTML = "password length must be five or more.";
        check = 1;
    }
    else if (!password.match(/[a-z]/)) {
        document.getElementById('passwordError').innerHTML = "password must contain a lowercase character";
        check = 1;
    }

    else if (!password.match(/[A-Z]/)) {
        document.getElementById('passwordError').innerHTML = "password must contain a Uppercase character";
        check = 1;
    }
    else if (!password.match(/[0-9]/)) {
        document.getElementById('passwordError').innerHTML = "password must contain a number";
        check = 1;
    }

    else if (!password.match(/[!\@\#\$\%\^\&\*\(\)\-\+\=]/)) {
        document.getElementById('passwordError').innerHTML = "password must contain a Special character";
        check = 1;
    }


    var cpassword = document.getElementById('cpassword').value;

    if (cpassword != password) {
        document.getElementById('cpasswordError').innerHTML = "Password Not Match ";
        check = 1;
    }



    if (check == 1)
        return false;

}





