        <?php /* Template Name: MARKET SECTORS */ ?>
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
                    <h1 class="page-title  mb-5">
                        EXPLORE OUR MARKET SECTOR
                    </h1>
                <div class="row">
					<?php foreach (get_categories() as $cat) : ?>
					<div class="column-xs-6 column-lg-4 categ-box">
					<a href="<?php echo get_category_link($cat->term_id); ?>">
					    <div class="categ-box--container">
							<?php z_taxonomy_image($cat->term_id); ?>
					        <div class="categ-box--content">
					            <h2><?php echo $cat->cat_name; ?></h2>
					        </div>
					        <div class="hidden-categ-box--content">
					            <h2><?php echo $cat->cat_name; ?></h2>
					        </div>
					    </div>
					</a>
					</div>
					<?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- End of Content -->
        <?php get_footer(); ?>
