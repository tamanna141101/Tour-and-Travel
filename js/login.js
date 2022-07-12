// function validate() {
//     var errors=document.getElementsByClassName('errors');
//     for(let item of errors)
//     item.innerHTML="";

//     var check = 0;
    

//     var uname = document.getElementById('uname').value.trim();

//     if (uname.length == 0) {
//         document.getElementById('unameError').innerHTML = "Input Your Name";
//         check = 1;
//     }
//     else if (uname.length < 1) {
//         document.getElementById('unameError').innerHTML = "Name length must be one or more.";
//         check = 1;
//     }




//     var password = document.getElementById('password').value;

//     if (password.length == 0) {
//         document.getElementById('passwordError').innerHTML = "Input Your password";
//         check = 1;
//     }
   


//     if(check==1)
//     return false;

// }

function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }