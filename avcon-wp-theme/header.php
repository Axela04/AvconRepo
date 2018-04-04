<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Avcon</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>
<body>
<!-- Header -->
<header class="main-header ">
	<div class="container">
		<nav class="main-navigation">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
			<div class="float-right js-trigger">
				<span class="open-menu fa fa-bars"></span>
			</div>
			<div class=" float-right relative menu-container-block">
				<!-- Wordpress Nav Menu -->
				<?php
				wp_nav_menu( array(

				    'menu'           => 'Site Nav', // Do not fall back to first non-empty menu.
				    'theme_location' => 'primary',
				    'menu_class'     => 'main-menu',
				    'container'      => 'ul',
				) );

				?>
                <!-- Wordpress Nav Menu -->
                <div class="text-right text-sm">
                	<span>
                        <a href="https://www.linkedin.com/company/avcon-engineering-pc/" class="only-md"><i class="linkedin-icon fa fa-linkedin"></i></a>
                    </span>
                    <span style="color:#afafaf !imporatnt;">646.572.0488</span> <span>|</span> INFO@AVCON-ENG.COM <span>|</span> <span>NEW YORK, NY</span>
                </div>
			</div>
		</nav>

	</div>
	<div class="only-md text-center" style="font-size:14px; clear:both; width:100%;">
            646.572.0488 <span>|</span> INFO@AVCON-ENG.COM <span>|</span> NEW YORK, NY
	</div>
</header>

<div class="clearfix"></div>
