<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zero
 
 */
global $zero;  

?>
 
 
	
	<div class="footer-area">
		<div class="container">
			<div class="row"> 
				<?php if($zero['fls']==1) :?>
					<?php dynamic_sidebar('fc1');?> 
				<?php endif;?>
			  
				<?php if($zero['fls']==2) :?>		 
					<?php dynamic_sidebar('fc2');?> 
				<?php endif;?>
			  
				<?php if($zero['fls']==3) :?>		 
					<?php dynamic_sidebar('fc3');?> 
				<?php endif;?>
			  
				<?php if($zero['fls']==4) :?>		 
					<?php dynamic_sidebar('fc4');?> 
				<?php endif;?>
			</div>
		</div>
	</div>
 
	   
	<?php if($zero['footer_bottom_switcher']==1) :?>	
	<div class="footer-area-bottom">
		<div class="container">
			<div class="row"> 
				<div class="zero-footer-padding">
					<p><?php echo $zero['crt'];?> </p> 
				</div>  
			</div>
		</div>
	</div> 		 
	<?php endif;?>
	   
	<?php if($zero['footer_bottom_switcher']==2) :?> 
	<?php endif;?>
	
	
	
<?php wp_footer(); ?> 
</body>
</html>
