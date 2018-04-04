<?php
/**
* A Simple Category Template
*/
get_header();
$category = get_queried_object();
$args = array(

	'post_type' => array('project'),
	'post_status' => 'publish',
    'category_name' => $category->slug
);

query_posts( $args );
?>
        <div class="clearfix"></div>
        <div class="linkedin-bar">
            <div class="container text-light relative">
                <a class="linkedin-link-top" href="https://www.linkedin.com/company/avcon-engineering-pc/"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
<div class="main">
    <div class="container">
         <h1 class="text-center">ALL PROJECTS FROM <span class="brand-color"><?php echo $category->name ?></span></h1>
    </div>
    <div class="projects-container mt-4">
    	<div class="grid">
            <div class="grid-sizer column-lg-4"></div>

				<?php
				if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
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
				<?php endwhile;
				else: ?>
				<div class="alert alert-danger" role="alert">
				<p>Sorry, no posts matched your criteria.</p>
				</div>
				<?php endif; ?>
 		</div>
	</div>
</div>
<?php get_footer(); ?>