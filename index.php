<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Zero
 */
global $zero; 


get_header(); ?>  

			<?php if($zero['slider_switch']==1) :?> 
	
			<?php endif;?>					
			<?php if($zero['slider_switch']==2) :?>
				<?php if($zero['slider_layuot']==1) :?>
				<section class="slider-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 zero-active">
								<?php while ( have_posts() ) : the_post()?>	 
									<div class="slider-wrapper"> 
										<div class="slider-img four-column-img"> 
											<?php the_post_thumbnail();?>	
										</div>  
										<div class="slider-content slider-content-four">
											<?php
												if ( is_single() ) :
													the_title( '<h4>', '</h4>' );
												else :
													the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
												endif;
											?>  
											<div class="tag-area slider-tag">
												<?php the_tags( ' ',' / ' ); ?> 
											</div>
											<div class="slider-btn">
												<a href="<?php the_permalink();?>">Read More </a>
											</div>	  
										</div>
									</div>
								<?php endwhile;?>  
							</div>
						</div> 
					</div> 
				</section> 
				<?php endif;?> 
				
				
				<?php if($zero['slider_layuot']==2) :?>
				<section class="slider-area listing-carousel-wrapper">  
					<div class="container">
						<div class="listing-carousel">
							<?php while ( have_posts() ) : the_post()?>	 
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            <div class="single-listing-box "style="background-image: url('<?php echo $thumb['0'];?>')">
							 
								<div class="slider-content slider-content-two">
									<?php
										if ( is_single() ) :
											the_title( '<h4>', '</h4>' );
										else :
											the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
										endif;
									?>  
									<div class="tag-area slider-tag">
										<?php the_tags( ' ',' |' ); ?> 
									</div>
									<div class="slider-btn">
										<a href="<?php the_permalink();?>">Read More </a>
									</div>	  
								</div> 
								
                            </div>
							<?php endwhile;?>  
                        </div> 
					</div> 
				</section> 
				<?php endif;?> 
			<?php endif;?> 
			
<section class="main-content-area">
	<div class="<?php if($zero['blog_width']==1):?>container<?php endif; if($zero['blog_width']==2):?>container-fluid<?php endif ?>">
		 
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			 

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );?>			
				
				 
				<div class="pagination">
					 <?php zero_pagination();?>			 
				</div>		    
		

		<?php	else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		 
	</div><!-- #primary --> 
</section> 
<?php 
get_footer();
