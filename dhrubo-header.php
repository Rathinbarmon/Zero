<?php global $drubo_theme_options; ?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Drubo
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<style>
/**
 * =====================================================================================
 * 		Footer Top
 * =====================================================================================
 */
	/**
	 * Footer widget area style
	 */
<?php if($drubo_theme_options['enable_footer_widget_area']): ?>
	#footer-widget-area{
		<?php if(!empty($drubo_theme_options['footer_widget_area_bg'])): ?>
			background-color: <?php echo $drubo_theme_options['footer_widget_area_bg']['background-color']; ?>;
			<?php if(!empty($drubo_theme_options['footer_widget_area_bg']['background-image'])):; ?>
			background-image: url(<?php echo $drubo_theme_options['footer_widget_area_bg']['background-image']; ?>);
			<?php endif; ?>
			background-repeat: <?php echo $drubo_theme_options['footer_widget_area_bg']['background-repeat']; ?>;
			background-size: <?php echo $drubo_theme_options['footer_widget_area_bg']['background-size']; ?>;
			background-attachment: <?php echo $drubo_theme_options['footer_widget_area_bg']['background-attachment']; ?>;
			background-position: <?php echo $drubo_theme_options['footer_widget_area_bg']['background-position']; ?>;
		<?php endif; ?>

		<?php if(!empty($drubo_theme_options['footer_top_border'])): ?>
			border-top-width: <?php echo $drubo_theme_options['footer_top_border']['border-top']; ?>;
			border-bottom-width: <?php echo $drubo_theme_options['footer_top_border']['border-bottom']; ?>;
			border-right: 0;
			border-left: 0;
			border-color: <?php echo $drubo_theme_options['footer_top_border']['border-color']; ?>;
			border-style: <?php echo $drubo_theme_options['footer_top_border']['border-style']; ?>;
		<?php endif; ?>

		<?php if(!empty($drubo_theme_options['footer_top_margin'])): ?>
			margin-top: <?php echo $drubo_theme_options['footer_top_margin']['margin-top']; ?>;
			margin-bottom: <?php echo $drubo_theme_options['footer_top_margin']['margin-bottom']; ?>;
		<?php endif; ?>


		<?php if(!empty($drubo_theme_options['footer_top_padding'])): ?>
			padding-top: <?php echo $drubo_theme_options['footer_top_padding']['padding-top']; ?>;
			padding-bottom: <?php echo $drubo_theme_options['footer_top_padding']['padding-bottom']; ?>;
		<?php endif; ?>
	}
<?php endif; ?>

<?php if($drubo_theme_options['enable_footer_bottom_area']): ?>
/**=======================
 * Footer Bottom area
 */
	#footer-bottom{
		<?php if(!empty($drubo_theme_options['footer_bottom_area_bg'])): ?>
			background-color: <?php echo $drubo_theme_options['footer_bottom_area_bg']['background-color']; ?>;

			<?php if(!empty($drubo_theme_options['footer_bottom_area_bg']['background-image'])):; ?>
			background-image: url(<?php echo $drubo_theme_options['footer_bottom_area_bg']['background-image']; ?>);
			<?php endif; ?>

			background-repeat: <?php echo $drubo_theme_options['footer_bottom_area_bg']['background-repeat']; ?>;
			background-size: <?php echo $drubo_theme_options['footer_bottom_area_bg']['background-size']; ?>;
			background-attachment: <?php echo $drubo_theme_options['footer_bottom_area_bg']['background-attachment']; ?>;
			background-position: <?php echo $drubo_theme_options['footer_bottom_area_bg']['background-position']; ?>;
		<?php endif; ?>

		<?php if(!empty($drubo_theme_options['footer_bottom_border'])): ?>
			border-top: <?php echo $drubo_theme_options['footer_bottom_border']['border-top']; ?> <?php echo $drubo_theme_options['footer_bottom_border']['border-style']; ?> <?php echo $drubo_theme_options['footer_bottom_border']['border-color']; ?>;
			border-bottom: <?php echo $drubo_theme_options['footer_bottom_border']['border-bottom']; ?> <?php echo $drubo_theme_options['footer_bottom_border']['border-style']; ?> <?php echo $drubo_theme_options['footer_bottom_border']['border-color']; ?>;
		<?php endif; ?>

		<?php if(!empty($drubo_theme_options['footer_bottom_margin'])): ?>
			margin-top: <?php echo $drubo_theme_options['footer_bottom_margin']['margin-top']; ?>;
			margin-bottom: <?php echo $drubo_theme_options['footer_bottom_margin']['margin-bottom']; ?>;
		<?php endif; ?>


		<?php if(!empty($drubo_theme_options['footer_bottom_padding'])): ?>
			padding-top: <?php echo $drubo_theme_options['footer_bottom_padding']['padding-top']; ?>;
			padding-bottom: <?php echo $drubo_theme_options['footer_bottom_padding']['padding-bottom']; ?>;
		<?php endif; ?>
	}

/**
 * Footer social icons
 */

/**
 * Icon color
 */
.footer-area .social-rotate ul li a {
    border: 1px solid <?php echo $drubo_theme_options['footer_social_icon_color']; ?> !important;
    color: <?php echo $drubo_theme_options['footer_social_icon_color']; ?> !important;
}
/**
 * Icon hover
 */
.footer-area .social-rotate ul li a:hover {
    background: <?php echo $drubo_theme_options['footer_social_icon_hover_color']; ?> none repeat scroll 0 0 !important;
    border-color: <?php echo $drubo_theme_options['footer_social_icon_hover_color']; ?> !important;
}
.footer-area .social-rotate{
	padding-top: <?php echo $drubo_theme_options['footer_social_icon_paddings']['padding-top']; ?> !important;
	padding-bottom: <?php echo $drubo_theme_options['footer_social_icon_paddings']['padding-bottom']; ?> !important;
}
<?php endif; ?>


/**
 * Widget title
 */
.footer-widget-area .single-footer-widget > h5 {
    color: <?php echo $drubo_theme_options['footer_widget_title_color']; ?>;
    font-size: <?php echo $drubo_theme_options['footer_widget_font_size']['width']; ?>;
    margin-bottom: 0;
    padding-bottom: <?php echo $drubo_theme_options['footer_widget_title_padding']['padding-bottom']; ?>;
    padding-top: <?php echo $drubo_theme_options['footer_widget_title_padding']['padding-top']; ?>;
    border-bottom: none;
}

/**
 * Text color
 */
.footer-area-wrapper{
	color: <?php echo $drubo_theme_options['footer_text_color']; ?>;
}
.footer-area-wrapper p{
	color: <?php echo $drubo_theme_options['footer_text_color']; ?>;
}


.footer-area-wrapper a{
	color: <?php echo $drubo_theme_options['footer_text_link_color']; ?> !important;
}

.footer-area-wrapper a:hover{
	color: <?php echo $drubo_theme_options['footer_text_link_hover_color']; ?> !important;
}

/** ---------------------------------------End Footer area--------------------------------------------------------------- */

/**
 * =====================================================================================
 * 		Sidebar
 * =====================================================================================
 */
.drubo-sidebar{
/**
 * background color
 */
	background-color: <?php echo $drubo_theme_options['sidebar_background_color']; ?>;
}
/**
 * sidebar widget title
 */
.drubo-sidebar .widgetheading{
	color: <?php echo $drubo_theme_options['sidebar_widget_title_coloR']; ?>;
	padding-top: <?php echo $drubo_theme_options['sidebar_title_padding']['padding-top']; ?> ;
	padding-bottom: <?php echo $drubo_theme_options['sidebar_title_padding']['padding-bottom']; ?>;
	margin-top: <?php echo $drubo_theme_options['sidebar_title_margins']['margin-top']; ?>;
	margin-bottom: <?php echo $drubo_theme_options['sidebar_title_margins']['margin-bottom']; ?>;
}
/**
 * Sidebar widget spacing
 */
.drubo-sidebar .widget{
	padding-top: <?php echo $drubo_theme_options['sidebar_widget_paddings']['padding-top']; ?>;
	padding-bottom: <?php echo $drubo_theme_options['sidebar_widget_paddings']['padding-bottom']; ?>;
	margin-top: <?php echo $drubo_theme_options['sidebar_widget_margins']['margin-top']; ?>;
	margin-bottom: <?php echo $drubo_theme_options['sidebar_widget_margins']['margin-bottom']; ?>;
}

/** ---------------------------------------End sidebar area--------------------------------------------------------------- */







/**================================================================
 * Main menu style
 */

.main-menu-area{
	/**
	 * Menubar padding
	 */
	padding-top: <?php echo $drubo_theme_options['menubar_padding']['padding-top']; ?>;
	padding-bottom: <?php echo $drubo_theme_options['menubar_padding']['padding-bottom']; ?>;
}
/**
 * Menubar item padding
 */
.main-menu ul > li > a {
    padding-top: <?php echo $drubo_theme_options['menubar_item_padding']['padding-top']; ?>;
    padding-bottom: <?php echo $drubo_theme_options['menubar_item_padding']['padding-bottom']; ?>;
    padding-left: <?php echo $drubo_theme_options['menubar_item_padding']['padding-left']; ?>;
    padding-right: <?php echo $drubo_theme_options['menubar_item_padding']['padding-right']; ?>;
}

/**
 * Dropdown width
 */

.main-menu ul li > ul {
    width: <?php echo $drubo_theme_options['menubar_dropdown_width']; ?>px;
}

/**
 * Dropdown item padding
 */
.main-menu ul li ul > li > a {
    padding-top: <?php echo $drubo_theme_options['menubar_dropdown_item_padding']['padding-top']; ?>;
    padding-bottom: <?php echo $drubo_theme_options['menubar_dropdown_item_padding']['padding-bottom']; ?>;
    padding-left: <?php echo $drubo_theme_options['menubar_dropdown_item_padding']['padding-left']; ?>;
    padding-right: <?php echo $drubo_theme_options['menubar_dropdown_item_padding']['padding-right']; ?>;
}
/**
 * Stycky Menu
 */
.sticky.main-menu-area,.headroom--pinned{
  background: <?php echo $drubo_theme_options['stycky_menu_bg']; ?> !important;
}



/**
 * ==========================================================
 * Menu typography
 * ==========================================================
 */

/**
 * Menu background
 */
.main-menu-area{
	background-color: <?php echo $drubo_theme_options['menubar_bg']; ?>;
}
/**
 * Menu topbar background
 */
.header-top-area.header-2 {
    background: <?php echo $drubo_theme_options['top_bar_bg_color']; ?>;
    color: <?php echo $drubo_theme_options['top_bar_text_color']; ?>;
}
.header-top-area.header-2 a{
    color: <?php echo $drubo_theme_options['top_bar_link_color']; ?> !important;
}
.header-top-area.header-2 a:hover{
    color: <?php echo $drubo_theme_options['top_bar_link_hover_color']; ?> !important;
}
/**
 * menu typography
 */
.main-menu ul > li > a {
    color: <?php echo $drubo_theme_options['mainmenu_typography']['color']; ?>;
    font-family: <?php echo $drubo_theme_options['mainmenu_typography']['font-family']; ?>;
    font-weight: <?php echo $drubo_theme_options['mainmenu_typography']['font-weight']; ?>;
    line-height: <?php echo $drubo_theme_options['mainmenu_typography']['line-height']; ?>;
    text-align: <?php echo $drubo_theme_options['mainmenu_typography']['text-align']; ?>
}

.main-menu ul li ul > li > a {
    color: <?php echo $drubo_theme_options['mainmenu_typography']['color']; ?> !important;
}
/**
 * Menu font size
 */
.main-menu-area{
	font-size: <?php echo $drubo_theme_options['mainmenu_typography']['font-size']; ?>;
}

/**
 * Menu hover font color
 */
.main-menu ul li.current-menu-item a,.main-menu ul li:hover a{
	color: <?php echo $drubo_theme_options['mainmenu_hover_and_active_font_color']; ?>;
}
.main-menu ul li ul li a:hover {
    color: <?php echo $drubo_theme_options['mainmenu_hover_and_active_font_color']; ?> !important;
}


/**
 * ==========================================================
 * Dropdown Menu typography
 * ==========================================================
 */


.main-menu ul li ul > li > a {
    color: <?php echo $drubo_theme_options['dropdown_menu_typography']['color']; ?> !important;
    font-family: <?php echo $drubo_theme_options['dropdown_menu_typography']['font-family']; ?>;
    font-weight: <?php echo $drubo_theme_options['dropdown_menu_typography']['font-weight']; ?>;
    line-height: <?php echo $drubo_theme_options['dropdown_menu_typography']['line-height']; ?>;
    text-align: <?php echo $drubo_theme_options['dropdown_menu_typography']['text-align']; ?>;
    font-size: <?php echo $drubo_theme_options['dropdown_menu_typography']['font-size']; ?>;
}
/**
 * Dropdown panel color
 */
.main-menu ul li > ul {
    background: <?php echo $drubo_theme_options['mainmenu_dropdown_panel_bg']; ?> none repeat scroll 0 0;
}








/**
 * =====================================================================================
 * 		TitleBar and BreadCrumbs
 * =====================================================================================
 */


<?php if(!empty($drubo_theme_options['enable_page_titlebar'])):?>
    /**=====================================================
	 * Page Titlebar
	 * =====================================================
	 */
	#titlebar-page{
		background-repeat: <?php echo $drubo_theme_options['bg_titlebar_page']['background-repeat']; ?>;
		background-size: <?php echo $drubo_theme_options['bg_titlebar_page']['background-size']; ?>;
		background-attachment: <?php echo $drubo_theme_options['bg_titlebar_page']['background-attachment']; ?>;
		background-position: <?php echo $drubo_theme_options['bg_titlebar_page']['background-position']; ?>;

		<?php if(!empty($drubo_theme_options['bg_titlebar_page']['background-image'])):; ?>
		background-image: url(<?php echo $drubo_theme_options['bg_titlebar_page']['background-image']; ?>);
		<?php endif; ?>

		/**
		 * Titlebar Margins
		 */
		margin-top: <?php echo $drubo_theme_options['page_titlebar_margin']['margin-top']; ?>;
		margin-bottom: <?php echo $drubo_theme_options['page_titlebar_margin']['margin-bottom']; ?>;
		/**
		 * Titlebar Paddings
		 */
		padding-top: <?php echo $drubo_theme_options['page_titlebar_padding']['padding-top']; ?>;
		padding-bottom: <?php echo $drubo_theme_options['page_titlebar_padding']['padding-bottom']; ?>;


	}
<?php endif; ?>

<?php if($drubo_theme_options['enable_page_breadcrumbs']): ?>
    /**=====================================================
	 * Page breadcrumps
	 * =====================================================
	 */
#breadcrumbs-page{
	/**
	 * margins
	 */
	margin-top: <?php echo $drubo_theme_options['page_breadcrums_margin']['margin-top']; ?>;
	margin-bottom: <?php echo $drubo_theme_options['page_breadcrums_margin']['margin-bottom']; ?>;

	/**
	 * Paddings
	 */
	padding-top: <?php echo $drubo_theme_options['page_breadcrumb_padding']['padding-top']; ?>;
	padding-bottom: <?php echo $drubo_theme_options['page_breadcrumb_padding']['padding-bottom']; ?>;
}
<?php endif; ?>




/**
 * ==========================================================
 * Page Layouts
 * ==========================================================
 */
/**
 * Page content bg
 */
.page-content {
	background-color: <?php echo $drubo_theme_options['main_content_bg']['background-color']; ?>;
	background-repeat: <?php echo $drubo_theme_options['main_content_bg']['background-repeat']; ?>;
	background-size: <?php echo $drubo_theme_options['main_content_bg']['background-size']; ?>;
	background-attachment: <?php echo $drubo_theme_options['main_content_bg']['background-attachment']; ?>;
	background-position: <?php echo $drubo_theme_options['main_content_bg']['background-position']; ?>;
	<?php if(!empty($drubo_theme_options['main_content_bg']['background-image'])):; ?>
	background-image: url(<?php echo $drubo_theme_options['main_content_bg']['background-image']; ?>);
	<?php endif; ?>

    padding-top: <?php echo $drubo_theme_options['page_content_paddings']['padding-top']; ?>;
    padding-bottom: <?php echo $drubo_theme_options['page_content_paddings']['padding-bottom']; ?>;
}
/**
 * Page outer bg
 */
<?php if($drubo_theme_options['use_predefine_patterns'] == 1): // when predefine bg pattern is selected ?>
body{
	background-image: url(<?php echo get_template_directory_uri() . '/assets/images/pattern/'.$drubo_theme_options['main_content_outer_bg_image'].'.png'; ?>);
}

<?php else: ?>
body {
	background-color: <?php echo $drubo_theme_options['main_content_outer_bg']['background-color']; ?>;
	background-repeat: <?php echo $drubo_theme_options['main_content_outer_bg']['background-repeat']; ?>;
	background-size: <?php echo $drubo_theme_options['main_content_outer_bg']['background-size']; ?>;
	background-attachment: <?php echo $drubo_theme_options['main_content_outer_bg']['background-attachment']; ?>;
	background-position: <?php echo $drubo_theme_options['main_content_outer_bg']['background-position']; ?>;
	<?php if(!empty($drubo_theme_options['main_content_outer_bg']['background-image'])):; ?>
	background-image: url(<?php echo $drubo_theme_options['main_content_outer_bg']['background-image']; ?>);
	<?php endif; ?>
}
<?php endif; ?>


/**
 * ===================================================================================
 * 		Typography
 * ===================================================================================
 */
/**
 * Body Typography
 */
body,
body p{
	font-family: <?php echo $drubo_theme_options['body_typography']['font-family']; ?>;
	font-weight: <?php echo $drubo_theme_options['body_typography']['font-weight']; ?>;
	font-style: <?php  if(isset($drubo_theme_options['body_typography']['font-style'])) echo $drubo_theme_options['body_typography']['font-style']; ?>;
	text-align: <?php echo $drubo_theme_options['body_typography']['text-align']; ?>;
	font-size: <?php echo $drubo_theme_options['body_typography']['font-size']; ?>;
	line-height: <?php echo $drubo_theme_options['body_typography']['line-height']; ?>;
	color: <?php echo $drubo_theme_options['body_typography']['color']; ?>;
}
body a{
	color: <?php echo $drubo_theme_options['body_link_color']; ?>;
}
body a:hover{
	color: <?php echo $drubo_theme_options['body_link_color_hover']; ?>;
}

/**
 * Headers
 */
/**
 * H1
 */
h1{
	font-family: <?php echo $drubo_theme_options['h1_typography']['font-family']; ?>;
	font-weight: <?php echo $drubo_theme_options['h1_typography']['font-weight']; ?>;
	font-style: <?php  if(isset($drubo_theme_options['h1_typography']['font-style'])) echo $drubo_theme_options['h1_typography']['font-style']; ?>;
	text-align: <?php echo $drubo_theme_options['h1_typography']['text-align']; ?>;
	font-size: <?php echo $drubo_theme_options['h1_typography']['font-size']; ?>;
	line-height: <?php echo $drubo_theme_options['h1_typography']['line-height']; ?>;
	color: <?php echo $drubo_theme_options['h1_typography']['color']; ?>;
}

/**
 * H2
 */
h2{
	font-family: <?php echo $drubo_theme_options['h2_typography']['font-family']; ?>;
	font-weight: <?php echo $drubo_theme_options['h2_typography']['font-weight']; ?>;
	font-style: <?php  if(isset($drubo_theme_options['h2_typography']['font-style'])) echo $drubo_theme_options['h2_typography']['font-style']; ?>;
	text-align: <?php echo $drubo_theme_options['h2_typography']['text-align']; ?>;
	font-size: <?php echo $drubo_theme_options['h2_typography']['font-size']; ?>;
	line-height: <?php echo $drubo_theme_options['h2_typography']['line-height']; ?>;
	color: <?php echo $drubo_theme_options['h2_typography']['color']; ?>;
}


/**
 * H3
 */
h3{
	font-family: <?php echo $drubo_theme_options['h3_typography']['font-family']; ?>;
	font-weight: <?php echo $drubo_theme_options['h3_typography']['font-weight']; ?>;
	font-style: <?php  if(isset($drubo_theme_options['h3_typography']['font-style'])) echo $drubo_theme_options['h3_typography']['font-style']; ?>;
	text-align: <?php echo $drubo_theme_options['h3_typography']['text-align']; ?>;
	font-size: <?php echo $drubo_theme_options['h3_typography']['font-size']; ?>;
	line-height: <?php echo $drubo_theme_options['h3_typography']['line-height']; ?>;
	color: <?php echo $drubo_theme_options['h3_typography']['color']; ?>;
}
/**
 * H4
 */
h4{
	font-family: <?php echo $drubo_theme_options['h4_typography']['font-family']; ?>;
	font-weight: <?php echo $drubo_theme_options['h4_typography']['font-weight']; ?>;
	font-style: <?php  if(isset($drubo_theme_options['h4_typography']['font-style'])) echo $drubo_theme_options['h4_typography']['font-style']; ?>;
	text-align: <?php echo $drubo_theme_options['h4_typography']['text-align']; ?>;
	font-size: <?php echo $drubo_theme_options['h4_typography']['font-size']; ?>;
	line-height: <?php echo $drubo_theme_options['h4_typography']['line-height']; ?>;
	color: <?php echo $drubo_theme_options['h4_typography']['color']; ?>;
}

/**
 * H5
 */
h5{
	font-family: <?php echo $drubo_theme_options['h5_typography']['font-family']; ?>;
	font-weight: <?php echo $drubo_theme_options['h5_typography']['font-weight']; ?>;
	font-style: <?php  if(isset($drubo_theme_options['h5_typography']['font-style'])) echo $drubo_theme_options['h5_typography']['font-style']; ?>;
	text-align: <?php echo $drubo_theme_options['h5_typography']['text-align']; ?>;
	font-size: <?php echo $drubo_theme_options['h5_typography']['font-size']; ?>;
	line-height: <?php echo $drubo_theme_options['h5_typography']['line-height']; ?>;
	color: <?php echo $drubo_theme_options['h5_typography']['color']; ?>;
}

/**
 * H6
 */
h6{
	font-family: <?php echo $drubo_theme_options['h6_typography']['font-family']; ?>;
	font-weight: <?php echo $drubo_theme_options['h6_typography']['font-weight']; ?>;
	font-style: <?php  if(isset($drubo_theme_options['h6_typography']['font-style'])) echo $drubo_theme_options['h6_typography']['font-style']; ?>;
	text-align: <?php echo $drubo_theme_options['h6_typography']['text-align']; ?>;
	font-size: <?php echo $drubo_theme_options['h6_typography']['font-size']; ?>;
	line-height: <?php echo $drubo_theme_options['h6_typography']['line-height']; ?>;
	color: <?php echo $drubo_theme_options['h6_typography']['color']; ?>;
}




/**
 * Drubo Custom CSS
 */
<?php echo $drubo_theme_options['drubo_custom_css']; ?>

</style>
<!-- Before Head Code -->
<?php echo (!empty($drubo_theme_options['code_before_head'])) ? $drubo_theme_options['code_before_head'] : ''; ?>
</head>
<body <?php body_class(); ?>>

<?php
	// Page layout in All page
	$page_layout = ($drubo_theme_options['drubo_page_layout'] == 'boxed') ? 'boxed-layout' : '';
	// Page layout in single po single page
	if(is_single() || is_page() ){
			$page_layout = get_post_meta( get_the_id() , 'page_type' , true );
			$page_layout = ($page_layout == 'boxed') ? 'boxed-layout' : '';
	}
?>
<div class="wrapper <?php echo $page_layout; ?>">


<?php echo get_template_part('/inc/menustyle/drubo-header-' . $drubo_theme_options['header_style']); ?>