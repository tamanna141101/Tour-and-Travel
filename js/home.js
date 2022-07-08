




function myFunction1() {
    document.getElementById("lm1").innerHTML = "Quae atque vero modi quidem! Autem cupiditate fugit doloribus ad amet, asperiores provident commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus optio omnis praesentium, debitis nesciunt temporibus quas deleniti atque dignissimos dicta, et magni dolorum possimus corporis, nobis quibusdam ex eveniet explicabo officia voluptas. Quisquam, distinctio aliquid corporis quibusdam sed similique obcaecati enim ad porro fuga labore culpa praesentium dolores modi dignissimos quos. ";
  }


   // fav des
   filterSelection("historical")
   function filterSelection(c) {
     var x, i;
     x = document.getElementsByClassName("filterDiv");
     for (i = 0; i < x.length; i++) {
       RemoveClass(x[i], "show");
       if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
     }
   }
   
   function AddClass(element, name) {
     var i, arr1, arr2;
     arr1 = element.className.split(" ");
     arr2 = name.split(" ");
     for (i = 0; i < arr2.length; i++) {
       if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
     }
   }
   
   function RemoveClass(element, name) {
     var i, arr1, arr2;
     arr1 = element.className.split(" ");
     arr2 = name.split(" ");
     for (i = 0; i < arr2.length; i++) {
       while (arr1.indexOf(arr2[i]) > -1) {
         arr1.splice(arr1.indexOf(arr2[i]), 1);     
       }
     }
     element.className = arr1.join(" ");
   }
   
   // Add active class to the current button (highlight it)
   var btnContainer = document.getElementById("myBtnContainer");
   var btns = btnContainer.getElementsByClassName("btn");
   for (var i = 0; i < btns.length; i++) {
     btns[i].addEventListener("click", function(){
       var current = document.getElementsByClassName("actives");
       current[0].className = current[0].className.replace(" actives", "");
       this.className += " actives";
     });
   }


  //Sweper js

  var swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    direction: getDirection(),
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    on: {
      resize: function () {
        swiper.changeDirection(getDirection());
      },
    },
  });

  function getDirection() {
    var windowWidth = window.innerWidth;
    var direction = windowWidth <= 560 ? 'vertical' : 'horizontal' ;
   

    return direction;
  }