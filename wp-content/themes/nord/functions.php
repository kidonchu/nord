<?php
/**
 * nord functions and definitions
 *
 * @package nord
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'nord_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function nord_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on nord, use a find and replace
	 * to change 'nord' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nord', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'nord' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'nord_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // nord_setup
add_action( 'after_setup_theme', 'nord_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function nord_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'nord' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	));
	register_sidebar( array(
		'name'          => __('Footer 1', 'nord'),
		'id'            => 'footer-1',
		'before_widget' => '<div class="footer-section">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="footer-section-title">',
		'after_title'   => '</h5>',
	));
	register_sidebar( array(
		'name'          => __('Footer 2', 'nord'),
		'id'            => 'footer-2',
		'before_widget' => '<div class="footer-section">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="footer-section-title">',
		'after_title'   => '</h5>',
	));
	register_sidebar( array(
		'name'          => __('Footer 3', 'nord'),
		'id'            => 'footer-3',
		'before_widget' => '<div class="footer-section">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="footer-section-title">',
		'after_title'   => '</h5>',
	));
	register_sidebar( array(
		'name'          => __('Footer 4', 'nord'),
		'id'            => 'footer-4',
		'before_widget' => '<div class="footer-section">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="footer-section-title">',
		'after_title'   => '</h5>',
	));
	register_sidebar( array(
		'name'          => __('Blog', 'nord'),
		'id'            => 'blog',
		'before_widget' => '<div class="sidebar-widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="sidebar-widget-title">',
		'after_title'   => '</h5>',
	));
}
add_action( 'widgets_init', 'nord_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function nord_scripts()
{
	// If in development environment, load normal version to easily debug
	wp_enqueue_style('nord-style', get_stylesheet_uri());
	wp_enqueue_style('nord-import', get_stylesheet_directory_uri().'/assets/css/import.css', array());
	wp_enqueue_style('nord-bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.css', array(), '20131009');
	wp_enqueue_style('nord-main', get_stylesheet_directory_uri().'/assets/css/main.css', array());
	wp_enqueue_script('nord-skip-link-focus-fix', get_template_directory_uri().'/assets/js/skip-link-focus-fix.js', array(), '20130115', true);
	wp_enqueue_script('nord-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '20131009', true);
	wp_enqueue_script('nord-subscribe', get_template_directory_uri() . '/assets/js/subscribe.js', array('jquery'), '20131028', true);
	wp_enqueue_script('nord-function', get_template_directory_uri() . '/assets/js/function.js', array('jquery'), '20131107', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
	{
		wp_enqueue_script('comment-reply');
	}

	// keyboard navigation of attached images in single post
	if ( is_singular() && wp_attachment_is_image() )
	{
		wp_enqueue_script('nord-keyboard-image-navigation', get_template_directory_uri().'/assets/js/keyboard-image-navigation.js', array('jquery'), '20120202' );
	}
}
add_action('wp_enqueue_scripts', 'nord_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
 * Subscribe AJAX request
 */
function subscribe ()
{
	$email = $_REQUEST['email'];

	$wpMailChimp = wpMailChimp::getInstance();

	$args = array(
		'email' => array(
			'email' => $email,
		),
	);

	$resp = $wpMailChimp->subscribe($args);

	if (isset($resp->error))
	{
		$ret = array(
			'success' => false,
			'message' => $resp->error,
		);
	}
	else
	{
		$ret = array(
			'success' => true,
		);
	}

	echo json_encode($ret);
	exit;
}
add_action('wp_ajax_subscribe', 'subscribe');
add_action('wp_ajax_nopriv_subscribe', 'subscribe');