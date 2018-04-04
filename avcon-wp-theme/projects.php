        <?php /* Template Name: PROJECTS */ ?>
        <?php get_header(); ?>
   		<!-- Main Content -->
   		<div class="clearfix"></div>
        <div class="linkedin-bar">
            <div class="container text-light relative">
                <a class="linkedin-link-top" style="min-width: 200px; width: 200px !important; right:-20px;" href="https://www.linkedin.com/company/avcon-engineering-pc/">

						<img style=" max-width: 100% !important; display: inline-block; vertical-align: middle;" src="<?php echo get_template_directory_uri();?>/assets/img/share3.png" alt="share this">


                </a>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <h1 class="text-center brand-color" id="dinamic-text">ALL PROJECTS</h1>
                <div class="projects-filter  mt-3">
                	  <!-- Get Projects Categories -->
                    <button class="project-filter--btn active" data-name="ALL PROJECTS"  data-filter="*">show all</button>
					<?php foreach (get_categories() as $cat) : ?>
                        <?php if ($cat->slug !== 1 || $cat->cat_ID !== 1): ?>
    						<button class="project-filter--btn" data-name='<?php echo $cat->cat_name; ?>'  data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->cat_name; ?></button>
                        <?php endif ?>
					<?php endforeach; ?>
                      <!-- End Of Projects Categories -->
                </div>
            </div>
            <div class="projects-container mt-4">
                <div class="grid">
                    <div class="grid-sizer column-lg-4"></div>

					<?php

						$args = array(

							'post_type' => array('project'),
							'post_status' => 'publish',
							'post_per_page' => -1,
							'order' => 'ASC',
							'orderby' => 'date',

						);

						$projects = new Wp_Query($args);

						if ( $projects->have_posts() ) : ?>
						    <?php while ( $projects->have_posts() ) : $projects->the_post();
						    $class = rwmb_meta('radio');

						    ?>
							<!-- Start project loop -->

		                    <div class="project <?php if ( $class==1): ?>column-xs-6 column-lg-4 <?php endif ?><?php if ($class==2): ?> column-xs-8  column-lg-8 <?php endif ?><?php if ($class==3): ?> column-xs-4 column-lg-4 <?php endif ?><?php get_project_categories();?>" >
		                    	<a href="<?php the_permalink();?>">
		                        <div class="project--container">
		                        	<?php
										if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
										the_post_thumbnail( 'full' );
										}

										else{


											?>
											   <?php if ($class==2): ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-img-lg.jpg" alt="No image">  <?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-img.jpg" alt="No image"> <?php endif ?>

											<?php
										}
		                        	?>

		                            <div class="project--content">
		                                <h3 class="project--title"><?php the_title(); ?></h3>
		                                <p class="project--text">
		                                	<?php echo strip_tags(get_the_content()); ?>
		                                </p>
		                            </div>
		                        </div>
		                        </a>
		                    </div>
		                    <!-- End project loop -->
						    <?php endwhile; wp_reset_postdata(); ?>
						<!-- show pagination here -->
						<?php else : ?>
							<div class="alert alert-danger" role="alert">
							  No Projects now
							</div>
						<?php endif; ?>
                </div>
            </div>
        </div>
        <!-- End of Content -->
        <?php get_footer(); ?>

        <script>

            (function($){

        $('.projects-filter').on( 'click', 'button', function() {

            console.log($(this).attr('data-name'));
            $("#dinamic-text").html($(this).attr('data-name'));

        });


            })(jQuery);


        </script>
