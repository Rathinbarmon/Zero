<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Zero
 */

get_header(); ?> 
	<div class="container "> 	 
		<?php 
			get_template_part( 'template-parts/content', 'single' ); 
			///the_post_navigation(); 
		?>	
	</div>
	<div class="container"	>
		<?php   
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; 
			  // End of the loop.
		?>	 
	</div>
<?php
get_footer();
