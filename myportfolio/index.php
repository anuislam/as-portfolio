<?php get_header(); ?>


	<!-- Wrapper Starts -->
	<div class="wrapper">
	    <div id="bl-main" class="bl-main">
	        <!-- Top Left Section Starts -->
			<?php get_template_part('template_part/profile'); ?>
	        <!-- Top Left Section Ends -->




	        <!-- About Section Starts -->
			<?php get_template_part('template_part/aboutme'); ?>
	        <!-- About Ends -->

	        <!-- Portfolio Starts -->
			<?php get_template_part('template_part/portfolio'); ?>
	        <!-- Portfolio Section Ends -->
	        
	        <!-- Contact Section Starts -->
			<?php get_template_part('template_part/contact'); ?>
	        <!-- Contact Section Ends -->

	        <!-- Portfolio Panel Items Starts -->
			<?php get_template_part('template_part/PortfolioPanel'); ?>
	        <!-- Portfolio Panel Items Ends -->
	    </div>
	</div>
	<!-- Wrapper Ends -->


<?php get_footer();
