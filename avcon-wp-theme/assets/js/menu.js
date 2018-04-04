(function($){

$(document).ready(function(){


    $(".open-menu").click(function(){

        $(this).toggleClass('active');
            $('.menu-container-block').stop().slideToggle();
        });

});



})(jQuery)