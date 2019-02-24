<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Zero
 */

get_header(); ?>

	<section class="error">
		<div class="container">
			<h2><?php esc_html_e( '404 not found!!!', 'zero' ); ?></h2>
			<p>
				<?php esc_html_e( ' The page you are looking for is not found! Please check the url again.', 'zero' ); ?>
			</p>		 
			<div class="btn">
				<a href="<?php bloginfo('home');?>"> <i class=" fa fa-long-arrow-left"></i>Back to home page </a>				
			</div> 
			<div class="list-pages">
			<h4><?php esc_html_e( 'All Pages', 'zero' ); ?></h4>
			<?php				
				wp_list_pages( array(
					'title_li'     => __( ' ' ), 
				) );
			?> 		
			</div>
		</div>
	</section>

<?php
get_footer();
