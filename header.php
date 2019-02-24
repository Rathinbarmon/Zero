<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zero
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php 
	global $zero; 
	wp_head();
 ?>
<style type="text/css"> 

</style>
</head>

<body <?php body_class(); ?> >  
		<?php if($zero['top_loader']==1):?>	
		<div id="preloader">
		    <div id="status">&nbsp;</div>
		</div>
		<?php endif;?>
		<?php if($zero['top_header']==1):?>	
		<section class="top-header-area blog-social-icon">
			<div class="container"> 
				<div class="col-md-6 col-sm-6">
					<div class="header-left">
						<i class="fa fa-phone"></i> <?php echo $zero['phone']?> 
						<i class="fa fa-envelope-o"></i> <?php echo $zero['email']?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="header-right">
						<a target="_blank" href=" <?php echo $zero['fb']?> "><i class="fa fa-facebook"></a></i>  
						<a target="_blank" href=" <?php echo $zero['tw']?>"><i class="fa fa-twitter"></a></i>  
						<a target="_blank" href=" <?php echo $zero['ytb']?>"><i class="fa fa-youtube"></a></i>  
						<a target="_blank" href=" <?php echo $zero['gp']?>"><i class="fa fa-google-plus"></a></i>   
						<a target="_blank" href=" <?php echo $zero['li']?>"><i class="fa fa-linkedin"></a></i>   
					</div>
				</div> 
			</div>
		</section>
		<?php endif; ?>
		
		
		
		<?php if($zero['header_layout']==1):?>	
		<header class="header-area"> 
			<div class="main-menu-area" id="sticky-header">
				<div class="container">
					<div class="row">
						<!-- Logo Area -->
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="logo-area">
								<?php if($zero['logo_switcher']==1): ?> 
									<a href="<?php esc_url(bloginfo('home'));?>">
										<img src="<?php  echo $zero['zero_logo']['url'];?>" alt="" />
									</a>
									<?php endif ;?>	
									<?php if($zero['logo_switcher']==2):?> 
									<a href="<?php esc_url(bloginfo('home'));?>">
										<h2><?php  echo $zero['logo_text'];?></h2> 
									</a>
								<?php endif ;?>	 
							</div>
						</div>
						<!-- Logo Area -->
						<!-- Menu Area -->
						<div class="col-md-12 col-sm-12 hidden-xs">
							<div class="main-menu main-menu-left">
								<?php zero_main_menu(); ?> 	 
							</div>
						</div>
						<!-- Menu Area -->
					</div>
				</div>
				<!-- MOBILE-MENU-AREA START --> 
				<div class="mobile-menu-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="mobile-area">
									<div class="mobile-menu">
										<nav id="mobile-nav">
											<?php zero_mobile_menu(); ?>	
										</nav>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MOBILE-MENU-AREA END  -->
			</div>
			<!-- Header Menu Area End -->
        </header> 
		<?php endif;?>	
		
		<?php if($zero['header_layout']==2):?>
		
		<header class="header-area"> 
			<div class="main-menu-area" id="sticky-header">
				<div class="container">
					<div class="row">
						<!-- Logo Area -->
						<div class="col-md-2 col-sm-12 col-xs-12">
							<div class="logo-area">
								<?php if($zero['logo_switcher']==1):?> 
								<a href="<?php esc_url(bloginfo('home'));?>">
									<img src="<?php  echo $zero['zero_logo']['url'];?>" alt="" />
								</a>
								<?php endif ;?>	
								<?php if($zero['logo_switcher']==2):?> 
								<a href="<?php esc_url(bloginfo('home'));?>">
									<h2><?php  echo $zero['logo_text'];?></h2> 
								</a>
								<?php endif ;?>	
							</div>
						</div>
						<!-- Logo Area -->
						<!-- Menu Area -->
						<div class="col-md-10 col-sm-12 hidden-xs">
							<div class="main-menu">
								<nav>
									<?php zero_main_menu(); ?> 	
								</nav>							 
							</div>
						</div>
						<!-- Menu Area -->
					</div>
				</div>
				<!-- MOBILE-MENU-AREA START --> 
				<div class="mobile-menu-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="mobile-area">
									<div class="mobile-menu"> 			
										<nav id="mobile-nav">
											<?php zero_mobile_menu(); ?>												 
										</nav>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MOBILE-MENU-AREA END  -->
			</div>
			<!-- Header Menu Area End -->
        </header>  
		<?php endif;?>	
 
		
		
		<?php if($zero['header_layout']==3):?>
		
		<header class="header-area"> 
			<div class="main-menu-area sticky-header" >
				<div class="container">
					<div class="row">
						<!-- Logo Area -->
						<div class="col-md-2 col-sm-12 col-xs-12">
							<div class="logo-area">
								<?php if($zero['logo_switcher']==1):?> 
								<a href="<?php esc_url(bloginfo('home'));?>">
									<img src="<?php  echo $zero['zero_logo']['url'];?>" alt="" />
								</a>
								<?php endif ;?>	
								<?php if($zero['logo_switcher']==2):?> 
								<a href="<?php esc_url(bloginfo('home'));?>">
									<h2><?php  echo $zero['logo_text'];?></h2> 
								</a>
								<?php endif ;?>	
							</div>
						</div>
						<!-- Logo Area -->
						<!-- Menu Area -->
						<div class="col-md-10 col-sm-12 hidden-xs">
							<div class="main-menu">
								<nav>
									<?php zero_main_menu(); ?> 	
								</nav>							 
							</div>
						</div>
						<!-- Menu Area -->
					</div>
				</div>
				<!-- MOBILE-MENU-AREA START --> 
				<div class="mobile-menu-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="mobile-area">
									<div class="mobile-menu"> 			
										<nav id="mobile-nav">
											<?php zero_mobile_menu(); ?>												 
										</nav>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MOBILE-MENU-AREA END  -->
			</div>
			<!-- Header Menu Area End -->
        </header>  
		<?php endif;?>	
 
		
		