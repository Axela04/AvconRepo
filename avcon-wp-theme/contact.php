        <?php /* Template Name: CONTACT */ ?>
        <?php get_header(); ?>
        <!-- Main Content -->
        <?php

        if (isset($_POST['send'])) {

            $name=filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);;
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $phone= filter_var($_POST['phone'], FILTER_SANITIZE_STRING);;
            $message= filter_var($_POST['message'], FILTER_SANITIZE_STRING);
            $headers = 'From: My Name {$name}' . "\r\n";
            $body = 'Name:  {$name}';
            $body .= 'Email: {$email}';
            $body .= 'Phone: {$phone}';
            $body .= 'Message: {$message}';
            wp_mail( get_option( 'admin_email' ), 'Contact ', $body, $headers);
            # code...
        }

         ?>
                 <div class="clearfix"></div>
        <div class="linkedin-bar">
            <div class="container text-light relative">
                <a class="linkedin-link-top" style="min-width: 200px; width: 200px !important; right:-20px;" href="https://www.linkedin.com/company/avcon-engineering-pc/">

						<img style=" max-width: 100% !important; display: inline-block; vertical-align: middle;" src="<?php echo get_template_directory_uri();?>/assets/img/share3.png" alt="share this">


                </a>            </div>
        </div>
        <div class="main">
            <div class="container">
                    <h1 class="page-title text-left mb-5">
                        contact us
                    </h1>
                <div class="row row-eq">
                    <div class="col-md-6">
                        <p>
                            580 Eighth Avenue, 14th Floor <br>
                            New York, NY 10018 <br>
                            tel 646.573.0488 <br>
                            info@avcon-eng.com
                        </p>

                        <div class="mt-5">
                            <iframe width="100%" height="500px" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=New%20York%2C%20NY%2010018+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h2 class="text-center">LET US HELP YOU WITH YOUR PROJECT</h2>
                        <form action="#" name="contact" method="post">
                            <div class="form-group">
                                <label for="" class="col-form-label">First Name</label>
                                <input name="firstname" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="col-form-label">Email</label>
                                <input name="email" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="col-form-label">Phone</label>
                                <input name="phone" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="col-form-label">Tell us about your project needs</label>
                                <textarea name="message" name="message" cols="30" rows="10" class="form-control" placeholder="Your message..."></textarea>
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" class="btn btn-brand btn-sm" value="Submit" name="send">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- End of Content -->
        <?php get_footer(); ?>
