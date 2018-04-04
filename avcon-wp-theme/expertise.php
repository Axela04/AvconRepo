<?php /* Template Name: EXPERTISE */ ?>
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
                    <h1 class="page-title  mb-5">
                        EXPERTISE
                    </h1>

                        <?php
                        while ( have_posts() ) :
                        the_post();
                        $t1 = rwmb_meta( 't1' );
                        $t2 = rwmb_meta( 't2' );
                        $t3 = rwmb_meta( 't3' );
                        $t4 = rwmb_meta( 't4' );
                        $t5 = rwmb_meta( 't5' );
                        $t6 = rwmb_meta( 't6' );


                        ?>

                <div class="row row-eq">

                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <h2 class="box--title"><span class="box--icon"><img src="<?php echo get_template_directory_uri();?>/assets/img/1.png" alt=""></span>MECHANICAL</h2>
                            <p class="text-dark">
								<?php echo $t1; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <h2 class="box--title"><span class="box--icon"><img src="<?php echo get_template_directory_uri();?>/assets/img/2.png" alt=""></span>ELECTRICAL</h2>
                            <p class="text-dark">
                                <?php echo $t2; ?>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <h2 class="box--title"><span class="box--icon"><img src="<?php echo get_template_directory_uri();?>/assets/img/3.png" alt=""></span>PLUMBING</h2>
                            <p class="text-dark">
                                <?php echo $t3; ?>

                        	</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <h2 class="box--title"><span class="box--icon"><img src="<?php echo get_template_directory_uri();?>/assets/img/4.png" alt=""></span>FIRE PROTECTION & SAFETY</h2>
                            <p class="text-dark">
                                <?php echo $t4; ?>

                        	</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <h2 class="box--title"><span class="box--icon"><img src="<?php echo get_template_directory_uri();?>/assets/img/5.png" alt=""></span>SUSTAINABLE DESIGN</h2>
                            <p class="text-dark">
                                <?php echo $t5; ?>

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <h2 class="box--title"><span class="box--icon"><img src="<?php echo get_template_directory_uri();?>/assets/img/6.png" alt=""></span>OTHER</h2>
                            <p class="text-dark">
                                <?php echo $t6; ?>

                        	</p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            </div>
        </div>
<?php get_footer() ?>