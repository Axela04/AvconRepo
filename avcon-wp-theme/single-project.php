
        <?php get_header(); ?>
        <?php
        while ( have_posts() ) : the_post();
        $id = get_the_ID();
        global $id;
        $slides = rwmb_meta( 'pgallery', array( 'size' => 'full' ) );
        $thumbnails = rwmb_meta( 'pgallery', array( 'size' => 'thumbnail' ) );
        ?>
        <div class="linkedin-bar">
            <div class="container text-light relative">
                <a class="linkedin-link-top" style="min-width: 200px; width: 200px !important; right:-20px;" href="https://www.linkedin.com/company/avcon-engineering-pc/">

						<img style=" max-width: 100% !important; display: inline-block; vertical-align: middle;" src="<?php echo get_template_directory_uri();?>/assets/img/share3.png" alt="share this">


                </a>            </div>
        </div>
        <!-- Main Content -->
        <div class="main">
            <div class="container">

                <div class="categories-filter  mt-3 mb-5">
                    <?php foreach (get_categories() as $cat) : ?>
                          <a class="project-filter--btn" href='<?php echo  get_category_link($cat->cat_ID) ?>'><?php echo $cat->name ?></a>
                    <?php endforeach; ?>
                </div>


                <button class="btn btm-default prev-slide"> PREV </button>
                <button class="btn btm-default float-right next-slide"> NEXT </button>
            </div>

            <div class="general-slider">



                <div class="general-slider-slide">
                    <div class="container">
                        <div class="text-center">
                            <h1 class="page-title"><?php the_title(); ?></h1>
                            <?php if (rwmb_meta('location') !==''): ?>
                                  <h4><?php echo rwmb_meta('location'); ?></h4>
                            <?php endif ?>
                        </div>
                    </div>
                    <!-- Post Slider  -->
                    <?php if (rwmb_meta('activegallery')): ?>
                        <!-- Post Slider  -->
                        <div class="project-slider-container mb-5">
                            <!-- slide thumbnails -->
                            <div class="project--slider">
                                <?php foreach ($slides as $slide): ?>
                                    <div class="project--slide" style="height:510px; background-image: url(<?php echo $slide['full_url'] ?>)"></div>
                                <?php endforeach ?>
                            </div>
                        <div class="container only-lg">
                            <div class="slider-nav-container">
                                <div class="slider-nav ">
                                   <?php foreach ($thumbnails as $thumb): ?>
                                        <div class="slide--thumb"><img src="<?php echo $thumb['full_url']; ?>" alt=""></div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div class="container only-md">
                            <div class="slider-nav-md d-flex justify-content-center">
                              <?php foreach ($thumbnails as $thumb): ?>
                                    <div class="slide--thumb"><img src="<?php echo $thumb['full_url']; ?>" alt=""></div>
                                <?php endforeach ?>
                            </div>
                        </div>

                        </div>
                    <?php endif ?>
                    <!-- Content here -->
                    <div class="container">
                        <div class="row row-eq">
                            <div class="col-md-6 col-lg-8 mt-3">
                                <div class="content-box">
                                    <div class="mt-0">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 bg-brand slide--sidebar mt-3">
                                <h3>PROJECT FACTS </h3>
                                <div class="span-group">
                                    <span>Type: Retail </span>
                                    <?php if (rwmb_meta('completion') !==''): ?>
                                          <span>Anticipated Completion: <?php echo rwmb_meta('completion'); ?> </span>
                                    <?php endif ?>
                                    <?php if (rwmb_meta('area') !==''): ?>
                                          <span>Project Area: <?php echo rwmb_meta('area'); ?></span>
                                    <?php endif ?>
                                    <?php if (rwmb_meta('service') !==''): ?>
                                          <span>Service: <?php echo rwmb_meta('service'); ?> </span>
                                    <?php endif ?>
                                </div>
                                <p>
                                    Avcon's solution & work <br>
                                    <?php if (rwmb_meta('solution') !==''): ?>
                                        <?php echo rwmb_meta('solution'); ?>
                                    <?php endif ?>
                                </p>
                                <ul>
                                    <?php foreach ( rwmb_meta('points') as $bullet): ?>
                                        <?php if (isset($bullet)): ?>
                                            <li><?php echo $bullet; ?></li>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End of content here -->
                </div>
                <?php
                endwhile;
                wp_reset_query();
                $args = array(

                    'post_type' => array('project'),
                    'post_status' => 'publish',
                    'post_per_page' => -1,
                    'order' => 'ASC',
                    'orderby' => 'date',
                     'post__not_in' => array(get_the_ID()),

                );
                $projects = new Wp_Query($args);
                if ( $projects->have_posts() ) : ?>
                    <?php while ( $projects->have_posts() ) : $projects->the_post();?>
                        <div class="general-slider-slide">
                            <div class="container">
                                <div class="text-center">
                                    <h1 class="page-title"><?php the_title(); ?></h1>
                                    <?php if (rwmb_meta('location') !==''): ?>
                                          <h4><?php echo rwmb_meta('location'); ?></h4>
                                    <?php endif ?>
                                </div>
                            </div>
                            <!-- Post Slider  -->
                            <?php if (rwmb_meta('activegallery')): ?>
                                <!-- Post Slider  -->
                                <div class="project-slider-container mb-5">
                                    <!-- slide thumbnails -->
                                    <div class="project--slider">
                                        <?php foreach ($slides as $slide): ?>
                                            <div class="project--slide" style="height:510px; background-image: url(<?php echo $slide['full_url'] ?>)"></div>
                                        <?php endforeach ?>
                                    </div>
                                    <div class="container">
                                        <div class="slider-nav-container">

                                            <div class="slider-nav">
                                                <?php foreach ($thumbnails as $thumb): ?>
                                                    <div class="slide--thumb"><img src="<?php echo $thumb['full_url']; ?>" alt=""></div>
                                                <?php endforeach ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                            <!-- Content here -->
                            <div class="container">
                                <div class="row row-eq mt-3">
                                    <div class="col-md-6 col-lg-8">
                                        <div class="content-box">
                                            <div class="mt-0">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 bg-brand slide--sidebar">
                                        <h3>PROJECT FACTS </h3>
                                        <div class="span-group">
                                            <span>Type: Retail </span>
                                            <?php if (rwmb_meta('completion') !==''): ?>
                                                  <span>Anticipated Completion: <?php echo rwmb_meta('completion'); ?> </span>
                                            <?php endif ?>
                                            <?php if (rwmb_meta('area') !==''): ?>
                                                  <span>Project Area: <?php echo rwmb_meta('area'); ?></span>
                                            <?php endif ?>
                                            <?php if (rwmb_meta('service') !==''): ?>
                                                  <span>Service: <?php echo rwmb_meta('service'); ?> </span>
                                            <?php endif ?>
                                        </div>
                                        <p>
                                            Avcon's solution & work <br>
                                            <?php if (rwmb_meta('solution') !==''): ?>
                                                <?php echo rwmb_meta('solution'); ?>
                                            <?php endif ?>
                                        </p>
                                        <ul>
                                            <?php foreach ( rwmb_meta('points') as $bullet): ?>
                                                <?php if (isset($bullet)): ?>
                                                    <li><?php echo $bullet; ?></li>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End of content here -->
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                <?php endif; ?>


    </div>
</div>




        <?php get_footer(); ?>
