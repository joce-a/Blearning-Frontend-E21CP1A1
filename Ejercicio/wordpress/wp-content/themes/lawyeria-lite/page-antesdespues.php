		<?php
		/**
		 *  The template for displaying Page.
		 *
		 *  @package lawyeria-lite
		 */
		get_header();
		?>
		
		

		<div id="container1">
			 <!-- The before image is first -->
			 <img src="<?php the_post_thumbnail() ?>" />
			 <!-- The after image is last -->
			 <img src="<?php the_post_thumbnail() ?>"/>
		</div>

		<?php get_footer(); ?>

		<?php get_template_part( 'script', 'index' ); ?>

		
