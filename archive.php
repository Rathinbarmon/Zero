<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Zero
 */

get_header(); ?>

	<div  class="container"> 

		<?php
		if ( have_posts() ) : ?>

			<div class="zero-page-header">
				<h3><?php the_archive_title(  );?></h3>
			</div><!-- .page-header -->

			<?php
			 
			get_template_part( 'template-parts/content', get_post_format() );?>

			<div class="pagination">
				 <?php zero_pagination();?>			 
			</div>

		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		 
	</div><!-- #primary -->

<?php
get_footer();
