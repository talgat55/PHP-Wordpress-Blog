<?php
 



/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}
/*
* Admin 
*/ 

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/redux/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/redux/options-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux/options-config.php' );
} 
/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
 */
/*add_theme_support( 'post-formats', array( 
	'image',
	'video',
	'quote',
	'link',
	'gallery',
	'audio',
) );*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'light-featured-image', 2000, 1200, true );

add_image_size( 'light-thumbnail-avatar', 100, 100, true );
  
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function light_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'light' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'light' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'light' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'light' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'light' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'light' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'light_widgets_init' );
  
 
/**
 * Enqueue scripts and styles.
 */
function light_scripts() { 

	// Theme stylesheet.
	wp_enqueue_style( 'light-style', get_stylesheet_uri() );
	wp_enqueue_style( 'normalize', get_theme_file_uri(  '/assets/css/normalize.css'),array(), '' );
	wp_enqueue_style( 'light-style-main', get_theme_file_uri(  '/assets/css/index.css'),array(), '' );
	wp_enqueue_style( 'font-awesome', get_theme_file_uri(  '/assets/css/font-awesome.min.css'),array(), '' );

 
	wp_enqueue_style( 'Dosis', 'https://fonts.googleapis.com/css?family=Dosis:300,600,700,800' ); 
 
            
 
	wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/js/jquery.min.js' ), array(), '' );
	 
}
add_action( 'wp_enqueue_scripts', 'light_scripts' );
   
if ( function_exists( 'register_nav_menus' ) ) {

 
		$menu_arr = array(
		  'main_menu' => 'Меню' 
		);
	 
	
	register_nav_menus($menu_arr);
}	
 