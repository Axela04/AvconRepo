<!-- Footer -->
<footer class="main-footer">
	<?php wp_footer(); ?>
	<div class="container">
		<div class="row">	
			<div class="col-md-12 mt-3">	
				<img src="<?php echo get_template_directory_uri();?>/assets/img/logo-sm.png" alt="">
			</div>
		</div>
		<div class="row">
			<div class="column-md-6 column-lg-4">
				<div class="footer-block">
					<p> Avcon Engineering is a full service
						engineering firm specializing in
						mechanical, electrical, plumbing, fire
						protection and fire alarm design. For
						over 30 years we have delivered creative
						and robust engineering designs for your
						construction needs. We encourage
						creative thinking from within our firm to
						provide our clients with designs best
						suited for their specific application.
					</p>
				</div>
			</div>
			<div class="column-md-6 column-lg-2 only-lg">
				<div class="footer-block">
					<?php 
						wp_nav_menu( array(

						    'menu'           => 'Site Nav', 
						    'theme_location' => 'footer1',
						    'menu_class'     => 'footer-menu',
						    'container'      => 'ul',
						  
						) );
					 ?>
				</div>
			</div>
			<div class="column-md-6 column-lg-2 only-lg">
				<div class="footer-block">
					<?php 
						wp_nav_menu( array(

						    'menu'           => 'Site Nav', 
						    'theme_location' => 'footer2',
						    'menu_class'     => 'footer-menu',
						    'container'      => 'ul',
						  
						) );
					 ?>

				</div>
			</div>
			<div class="column-md-6 column-lg-4">
				<div class="footer-block">
					<p>
						Avcon Engineering PC<br>
						580 8th Avenue, 14th Fl<br>
						New York, NY 10018 <br><br>	
						t: 646-572-0488<br>
						info@avcon-eng.com
					</p>
					<a href="#"><i class="fa fa-linkedin site-icon"></i></a>
				</div>
			</div>
		</div>
		<p class="copyright text-center"><?php echo date('Y') ?> © Avcon Engineering PC. All rights reserved. </p>
	</div>
</footer>
<!-- <script src="js/jquery.min.js.download"></script>
 --><script>

// $(document).ready(function(){


// 	$(".open-menu").click(function(){

// 		$(this).toggleClass('active');
// 			$('.menu-container-block').stop().slideToggle();
// 		});

// });

</script>

<!-- Footer -->
</body>
</html>