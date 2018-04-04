        <?php /* Template Name: CARRERS */ ?>
        <?php get_header(); ?>
        <!-- Main Content -->
         <div class="clearfix"></div>
        <div class="linkedin-bar">
            <div class="container text-light relative">
                <a class="linkedin-link-top" style="min-width: 200px; width: 200px !important; right:-20px;" href="https://www.linkedin.com/company/avcon-engineering-pc/">

                        <img style=" max-width: 100% !important; display: inline-block; vertical-align: middle;" src="<?php echo get_template_directory_uri();?>/assets/img/share3.png" alt="share this">


                </a>            </div>
        </div>
        <!-- Main Content -->
        <div class="main">
            <div class="container">
                <h1 class="page-title text-center mb-5">
                    Careers
                </h1>
                <div class="row  bg-gray carrers-container align-items-top mb-5">


                    <div class="col-md-12 col-lg-5">
                        <h3 class="middle-title">CURRENT OPPORTUNITIES</h3>

                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                            <?php

                            $args = array(

                            'post_type' => array('carrer'),
                            'post_status' => 'publish',
                            'post_per_page' => -1,
                            'order' => 'ASC',
                            'orderby' => 'date',

                            );

                            $projects = new Wp_Query($args);
                            $i=0;

                            if ( $projects->have_posts() ) : ?>
                            <?php while ( $projects->have_posts() ) : $projects->the_post();
                            $i++;

                            ?>
                            <a class="nav-link <?php if ($i==1): ?> active <?php endif ?>" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-<?php echo $i;?>" role="tab" aria-controls="v-pills-home" aria-selected="<?php if ($i==1): ?> true <?php endif ?>">
                                <?php the_title(); ?>
                                <span class="block-info">Posted <?php get_the_date();?></span>
                            </a>

                            <?php endwhile; wp_reset_postdata(); ?>
                            <?php endif; ?>


                        </div>
                    </div>




                    <div class="col-md-12 col-lg-7 tab-content">


                            <?php

                            $args = array(

                            'post_type' => array('carrer'),
                            'post_status' => 'publish',
                            'post_per_page' => -1,
                            'order' => 'ASC',
                            'orderby' => 'date',

                            );

                            $projects = new Wp_Query($args);
                            $i=0;

                            if ( $projects->have_posts() ) : ?>
                            <?php while ( $projects->have_posts() ) : $projects->the_post();
                            $i++;

                            ?>
                            <div class="tab-pane fade<?php if ($i==1): ?> show active <?php endif ?> " id="v-pills-<?php echo $i;?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="row row-eg align-items-center mb-2">
                                    <div class="col"><span class="block-info">Posted <?php get_the_date(); ?></span></div>
                                    <div class="col"><span class="block-info">Type <?php echo rwmb_meta('type'); ?></span></div>
                                    <div class="col text-right"><button data-toggle="modal" data-target="#job-<?php echo get_the_ID();?>"  class="btn btn-brand btn-sm">Apply</button></div>
                                </div>
                                <?php if (rwmb_meta('essential') !==""): ?>
                                    <p><strong>Essential Job Functions</strong></p>
                                    <p><?php echo rwmb_meta('essential'); ?></p>
                                <?php endif ?>
                                <?php if (rwmb_meta('required') !==""): ?>
                                    <p><strong>What's Required</strong></p>
                                    <p><?php echo rwmb_meta('required'); ?></p>
                                <?php endif ?>
                                <?php if (rwmb_meta('qualifications') !==""): ?>
                                    <p><strong>Qualifications</strong></p>
                                    <p><?php echo rwmb_meta('qualifications'); ?></p>
                                <?php endif ?>
                            </div>

                            <div class="modal fade " id="job-<?php echo get_the_ID();?>" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title"><?php the_title(); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <?php echo do_shortcode( '[contact-form-7 id="366" title="Untitled"]' ) ?>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <?php endwhile; wp_reset_postdata(); ?>
                            <?php endif; ?>


                </div>
            </div>
        </div>
    </div>
        <!-- End of Content -->

        <!-- End of Content -->
        <?php get_footer(); ?>
