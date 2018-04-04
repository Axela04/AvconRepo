<?php /* Template Name: ABOUT */ ?>
<?php get_header() ?>
<!-- Only for homepage -->
        <div class="clearfix"></div>
        <div class="linkedin-bar">
            <div class="container text-light relative">
                <a class="linkedin-link-top" style="min-width: 200px; width: 200px !important; right:-20px;" href="https://www.linkedin.com/company/avcon-engineering-pc/">

						<img style=" max-width: 100% !important; display: inline-block; vertical-align: middle;" src="<?php echo get_template_directory_uri();?>/assets/img/share3.png" alt="share this">


                </a>            </div>
        </div>
<!-- End of homepage -->
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 mx-auto content-box">

                        <?php
                        while ( have_posts() ) :
                        the_post();?>

                        <h1 class="page-title"><?php thew_title();?></h1>
                        <?php the_content(); ?>

                    </div>
                </div>
            </div>

        </div>
<?php get_footer() ?>