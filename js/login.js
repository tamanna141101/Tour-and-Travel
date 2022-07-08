function validate() {
    var errors=document.getElementsByClassName('errors');
    for(let item of errors)
    item.innerHTML="";

    var check = 0;
    var email = document.getElementById('email').value.trim();

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





    var password = document.getElementById('password').value;

    if (password.length == 0) {
        document.getElementById('passwordError').innerHTML = "Input Your password";
        check = 1;
    }
   


    if(check==1)
    return false;

}
