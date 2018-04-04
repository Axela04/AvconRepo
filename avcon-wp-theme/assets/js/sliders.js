var $j = jQuery.noConflict();

$j(function(){

    $j(document).ready(function(){

       $j('.project--slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.slider-nav'
            // nextArrow: '<i class="nex-slide fa fa-arrow-right"></i>',
            // prevArrow: '<i class="prev-slide fa fa-arrow-left"></i>',
        });


        $j('.slider-nav').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.project--slider',
          dots: false,
          vertical: true,
          centerMode: true,
          focusOnSelect: true
        });

         $j('.slider-nav-md').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.project--slider',
          dots: false,
          vertical: false,
          centerMode: true,
          focusOnSelect: true
        });

        $j('.general-slider').slick({
              dots: false,
              infinite: true,
              speed: 500,
              fade: true,
              arrows: false,
              cssEase: 'linear',
              accesibility: false,
              draggable: false,
              swipe: false,
              touchMove: false,
              adaptiveHeight: true
        });


        $j('.next-slide').click(function(){
            $j(".general-slider").slick('slickNext');
        });
        $j('.prev-slide').click(function(){
            $j(".general-slider").slick('slickPrev');
        });
    });

    $j(window).on('resize orientationchange', function() {
      $j('.general-slider').slick('resize');
      $j('.slider-nav-md').slick('resize');
      $j('.slider-nav').slick('resize');
      $j('.project--slider').slick('resize');

    });

});
