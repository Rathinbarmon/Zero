<?php
/**
 * zero functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zero
 */

if ( ! function_exists( 'zero_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zero_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on zero, use a find and replace
	 * to change 'zero' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'zero', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'zero' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'zero_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'zero_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zero_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zero_content_width', 640 );
}
add_action( 'after_setup_theme', 'zero_content_width', 0 );
 
 
if ( function_exists( 'add_theme_support' ) ) { 
 	add_image_size( 'lavoro-blog-thumb', 1170, 532, true );
	add_image_size( 'test', 750, 320, true );
	add_image_size( 'lavoro-team-thumb', 250, 250, true );
	add_image_size( 'lavoro-gallery-thumb', 317, 317, true );
	add_image_size( 'lavoro-testimonial-thumb', 110, 110, true );
}
/**
 * Slider area.
 */
function zero_slider_post(){ 
	register_post_type('slider',array(
	   'public'=>true,
	   'label'=>'Slider',  
	   'supports'=>array('title','editor','thumbnail','excerpt') 
	));
}
add_action( 'init', 'zero_slider_post' );




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zero_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'zero' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'zero' ),
		'before_widget' => '<div class="sidebar"><div class="single-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One Column', 'zero' ),
		'id'            => 'fc1',
		'description'   => esc_html__( 'Add widgets here.', 'zero' ),
		'before_widget' => '<div class="col-md-12"><div class="sidebar"><div class="single-widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two Column', 'zero' ),
		'id'            => 'fc2',
		'description'   => esc_html__( 'Add widgets here.', 'zero' ),
		'before_widget' => '<div class="col-md-6"><div class="sidebar"><div class="single-widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three Column', 'zero' ),
		'id'            => 'fc3',
		'description'   => esc_html__( 'Add widgets here.', 'zero' ),
		'before_widget' => '<div class="col-md-4"><div class="sidebar"><div class="single-widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four Column', 'zero' ),
		'id'            => 'fc4',
		'description'   => esc_html__( 'Add widgets here.', 'zero' ),
		'before_widget' => '<div class="col-md-3 "><div class="sidebar"><div class="single-widget">',
		'after_widget'  => '</div></div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	
	
	
	
	
}
add_action( 'widgets_init', 'zero_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
// Calling Theme files
function zero_theme_files(){
    
    wp_enqueue_style( 'zero-theme-fontawesome',   get_template_directory_uri() . '/css/font-awesome.min.css', array(),  '1.0' );
    wp_enqueue_style( 'zero-theme-bootstrap',     get_template_directory_uri() . '/css/bootstrap.min.css',    array(),  '1.0' );
    wp_enqueue_style( 'zero-theme-style',         get_template_directory_uri() . '/css/theme-style.css', 			  array(),  '1.0' );  
    wp_enqueue_style( 'zero-theme-comments',      get_template_directory_uri() . '/css/comments.css',         array(),  '1.0' );  
    wp_enqueue_style( 'zero-theme-owl',           get_template_directory_uri() . '/css/owl.carousel.css',     array(),  '1.0' );  
    wp_enqueue_style( 'zero-theme-menu',          get_template_directory_uri() . '/css/zero-menu.css',           array(),  '1.0' );
	wp_enqueue_style( 'zero-theme-responsive',    get_template_directory_uri() . '/css/responsive.css',       array(),  '1.0' );
	wp_enqueue_style( 'zero-theme-meanmenu',      get_template_directory_uri() . '/css/meanmenu.min.css',     array(),  '1.0' );
    wp_enqueue_style( 'zero-theme-main',          get_template_directory_uri() . '/css/main.css',     array(),  '1.0' );
    wp_enqueue_style( 'zero-theme-normalize',     get_template_directory_uri() . '/css/normalize.css',     array(),  '1.0' );
    wp_enqueue_style( 'zero-body-style',          get_stylesheet_uri() );
						 
						 
						 
						 
    wp_enqueue_script(' zero-theme-js', 		   get_template_directory_uri() . '/js/jquery.min.js',        		array(), '20120206', true );
    wp_enqueue_script(' zero-theme-modernizr-js',  get_template_directory_uri() . '/modernizr-2.8.3.min.js',        		array(), '20120206', true );
    wp_enqueue_script(' zero-theme-customizer-js', get_template_directory_uri() . '/customizer.js',        		array(), '20120206', true );
    wp_enqueue_script(' zero-theme-owl-js',        get_template_directory_uri() . '/js/owl.carousel.min.js',  		array(), '20120206', true );
    wp_enqueue_script(' zero-theme-bootstrap-js',  get_template_directory_uri() . '/js/bootstrap.min.js',     		array(), '20120206', true );
 	wp_enqueue_script(' zero-theme-meanmenu-js',   get_template_directory_uri() . '/js/jquery.meanmenu.js',          array(), '20120206', true );	
 	wp_enqueue_script(' zero-theme-plugins-js',    get_template_directory_uri() . '/js/plugins.js',          array(), '20120206', true );	
	wp_enqueue_script(' zero-theme-main-js',       get_template_directory_uri() . '/js/main.js',                     array(), '20120206', true );
        
    
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'zero_theme_files'); 

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * zero config 
 */
require get_template_directory() . '/inc/zero-config.php ';



require get_template_directory() . '/inc/widgets/zero_recent_post_widget.php';
require get_template_directory() . '/inc/widgets/zero_about_widget.php'; 
require get_template_directory() . '/inc/widgets/zero_follow_widget.php'; 
require get_template_directory() . '/inc/widgets/zero_contact_widget.php'; 


 







function zero_read_title(){
	$post_title = explode(" ", get_the_title());
	$less_title = array_slice($post_title, 0, 5);
	
	echo implode(" ",$less_title);
}


function zero_read_more($limit){
	$post_content = explode(" ", get_the_content());
	$less_content = array_slice($post_content, 0, $limit);
	
	echo implode(" ",$less_content);
}




if ( ! function_exists( 'default_menu' ) ) :
function default_menu(){ 
	echo'<ul class="set-menu">';
		if(is_user_logged_in()){
			echo'<a href="'.home_url().'/wp-admin/nav-menus.php"> Please Create Your Menu </a>';
		}
		else{ 
			echo'<a href="'.home_url().'"> Home </a>';
		}
	echo'</ul>';
}	
endif;

 
 //add custom css, sharing code to header
function zero_custom_code_header() {
	global $zero;

	if ( isset($zero['share_head_code']) && $zero['share_head_code']!='') {
		echo wp_kses($zero['share_head_code'], array(
			'script' => array(
				'type' => array(),
				'src' => array(),
				'async' => array()
			),
		));
	}
	if ( isset($zero['custom_css']) && $zero['custom_css']!='') { ?>
		<style>
		
			<?php echo esc_html($zero['custom_css']); ?>
		</style>
	<?php }
}
add_action( 'wp_head', 'zero_custom_code_header');

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 


 
if ( ! function_exists( 'zero_pagination' ) ) :
/* Pagination */
function zero_pagination() {
	global $wp_query;

	$big = 999999999; // need an unlikely integer
	
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'       => '',
		'add_args'     => '',
		'current'      => max( 1, get_query_var( 'paged' ) ),
		'total'        => $wp_query->max_num_pages,
		'prev_text'    => 'Prev',
		'next_text'    => 'Next',
		'type'         => 'list',
		'end_size'     => 3,
		'mid_size'     => 3
	) );
}
endif;








/**
 *  comment list modify 
 */
function zero_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
     
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
		<article class="comment" id="comment-8">
			<div class="comment-avatar"> 
				<?php echo get_avatar( $comment, 50 ); ?>
			</div>
			<div class="comment-info"> 
				<header class="comment-meta comment-author vcard"> 
					<cite><b class="fn"><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a></b></cite>
					<time datetime=""><?php echo esc_html(get_comment_date('j F, Y')); ?> <?php echo esc_html(get_comment_date('g:i')); ?></time>
					<?php if ($comment->comment_approved == '0') : ?>
						<p><em><?php esc_html_e('Your comment is awaiting moderation.','zero'); ?></em></p>
					<?php endif; ?>					
					<div class="reply">	
						<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>						
					</div> 
				</header>
				<section class="comment-content comment">
					<?php comment_text() ?>
				</section>
			</div> 
		</article>	
		
<?php }

// comment box title change
add_filter( 'comment_form_defaults', 'zero_remove_comment_form_allowed_tags' );
function zero_remove_comment_form_allowed_tags( $defaults ) {

	$defaults['comment_notes_after'] = '';
	$defaults['comment_notes_before'] = '';
	return $defaults;

}

function zero_comment_reform ($arg) {

$arg['title_reply'] = esc_html__('Leave a Reply','zero');
$arg['comment_field'] = '
	<div class="row">
		<div class="col-md-12">
			<textarea id="comment" class="comment_field" name="comment" cols="77" rows="8" placeholder="'. esc_html__("Write your Comment", "zero").'" aria-required="true">
			</textarea>
		</div>
	</div>';


return $arg;

}
add_filter('comment_form_defaults','zero_comment_reform');

// comment form modify

function zero_modify_comment_form_fields($fields){
	$commenter = wp_get_current_commenter();
	$req	   = get_option( 'require_name_email' );
	
	

	$fields['author'] = '
	<div class="comment-input">
		<div class="row">
			<div class="col-md-4">
				<input type="text" name="author" id="author" value="'. esc_attr( $commenter['comment_author'] ) .'" placeholder="'. esc_attr__("Your Name *", "zero").'" size="22" tabindex="1"'. ( $req ? 'aria-required="true"' : '' ).' class="input-name" />
			</div>';

 
			$fields['email'] = '
			<div class="col-md-4">
				<input type="text" name="email" id="email" value="'. esc_attr( $commenter['comment_author_email'] ) .'" placeholder="'.esc_attr__("Your Email *", "zero").'" size="22" tabindex="2"'. ( $req ? 'aria-required="true"' : '' ).' class="input-email"  />
			</div>';
	
			$fields['url'] = '
			<div class="col-md-4">
				<input type="text" name="url" id="url" value="'. esc_attr( $commenter['comment_author_url'] ) .'" placeholder="'. esc_attr__("Website", "zero").'" size="22" tabindex="2"'. ( $req ? 'aria-required="false"' : '' ).' class="input-url"  />
			</div>
		</div>
	</div>';

	return $fields;
}
add_filter('comment_form_default_fields','zero_modify_comment_form_fields'); 











































     // function to display number of posts.
           function getPostViews($postID){
           $count_key = 'post_views_count';
                $count = get_post_meta($postID, $count_key, true);
              if($count==''){
          delete_post_meta($postID, $count_key);
                     add_post_meta($postID, $count_key, '0');
                    return "View 0 ";
            }
            return '<i class="fa fa-eye"></i> ' .$count;
      }             

          // function to count views.
       function setPostViews($postID) {
      $count_key = 'post_views_count';
          $count = get_post_meta($postID, $count_key, true);
     if($count==''){
                 $count = 0;
     delete_post_meta($postID, $count_key);
               add_post_meta($postID, $count_key, '0');
          }else{
     $count++;
                   update_post_meta($postID, $count_key, $count);
               }
             }


          // Add it to a column in WP-Admin
     add_filter('manage_posts_columns', 'posts_column_views');
       add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
     function posts_column_views($defaults){
      $defaults['post_views'] = __('Views');
     return $defaults; 
        }
       function posts_custom_column_views($column_name, $id){
if($column_name === 'post_views'){
    echo getPostViews(get_the_ID());
      }
       } 