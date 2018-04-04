var $j = jQuery.noConflict();

$j(function(){

    function masonry_grid(){

        var $grid=$j('.grid').isotope({
        itemSelector: '.project',
        percentPosition: true,
         layoutMode: 'packery',
        masonry: {
          columnWidth: '.grid-sizer'
        }
        });

        $grid.imagesLoaded().progress( function() {
          $grid.isotope();
        });

        $j('.projects-filter').on( 'click', 'button', function() {

			$j('.project-filter--btn').removeClass('active');
			$j(this).toggleClass('active');
			var filterValue = $j(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
        });
    };

    $j(window).load(function(){
        masonry_grid();
    });

    $j( window ).resize(function() {
       masonry_grid();
    });

});