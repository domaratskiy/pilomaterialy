
  $(document).ready(function () {
    var trigger = $('.hamburger'),
        isClosed = false;

    let my_customMenu = $('.menu-item a')

    my_customMenu.click(function () {
      myCustomHideMenu();
    });

    function myCustomHideMenu() {
      if(isClosed == true){
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      }
    }


    trigger.click(function () {
      burgerTime();
    });

    function burgerTime() {
      if (isClosed == true) {
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } 
      else {
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
    }

  });


 $(document).ready(function () {
      if($('.quantity').length){

          var quantitiy = 0;

          $('.quantity-right-plus').on('click',function(e){
            // stop acting like a button

            e.preventDefault();

            // GEt the field name
            var quantity = parseInt($('.qty').val());

            // is not undefined

                $('.qty').val(quantity + 1);
          });


          $('.quantity-left-minus').on('click',function(e){
            // stop acting like a button

            e.preventDefault();

            // GEt the field name
            var quantity = parseInt($('.qty').val());

              // is not undefined
                  if (quantity > 0) {
                    $('.qty').val(quantity - 1);
                  }
                
              });
        }  
});       





$(document).ready(function(){

        var $menu = $("#header_nav");

        $(window).scroll(
          function(){
            if ( $(this).scrollTop() > 200 && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("fixed");
            } else if($(this).scrollTop() <= 200 && $menu.hasClass("fixed")) {
                $menu.removeClass("fixed").addClass("default");
            }
          }
        );//scroll
});

$(document).ready(function(){
        let result;
        let resFloor;
        let btn = document.querySelector("#elem");

        btn.onclick = function(){
          let num1 = document.querySelector("#calc_thickness").value;
          let num2 = document.querySelector("#calc_width").value;
          let num3 = document.querySelector("#calc_long").value;
          let num4 = document.querySelector('.calc_quantity').value;
          let html = document.querySelector(".calcResult");

          
          result = num1 * num2 * num3 * num4;
          var FixResult = result.toFixed(4);
          html.innerHTML = FixResult;
          
        };
  
});  





