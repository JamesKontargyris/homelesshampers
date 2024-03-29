<?php
/**
 * homelesshampers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package homelesshampers
 */

if ( ! function_exists( 'homelesshampers_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function homelesshampers_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on homelesshampers, use a find and replace
		 * to change 'homelesshampers' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'homelesshampers', get_template_directory() . '/languages' );

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
			'main-menu'   => esc_html__( 'Header', 'homelesshampers' ),
			'footer-menu' => esc_html__( 'Footer', 'homelesshampers' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Image sizes
		add_image_size('banner', 1500, 1000, true);
		add_image_size('photo-gallery-thumb', 600, 600, true);
		add_image_size('supporters-showcase', 150, 100, false);
		add_image_size('team-member', 740, 560, false);

	}
endif;
add_action( 'after_setup_theme', 'homelesshampers_setup' );

/**
 * Sets up support for editor styles and imports them.
 */
function editor_styles_setup() {
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'editor_styles_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function homelesshampers_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'homelesshampers_content_width', 640 );
}

add_action( 'after_setup_theme', 'homelesshampers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function homelesshampers_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'homelesshampers' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add footer widgets here.', 'homelesshampers' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}

add_action( 'widgets_init', 'homelesshampers_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function homelesshampers_scripts() {
	wp_enqueue_style( 'homelesshampers-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i|Playfair+Display:400,400i,600,600i,700,700i&display=swap' );
	wp_enqueue_style( 'homelesshampers-site-css', get_stylesheet_uri() );
	wp_enqueue_style( 'homelesshampers-slick-css', get_template_directory_uri() . '/js/slick-1.8.1/slick.css' );
	wp_enqueue_style( 'homelesshampers-slick-theme-css', get_template_directory_uri() . '/js/slick-1.8.1/slick-theme.css' );
	wp_enqueue_style( 'homelesshampers-featherlight-lightbox-css', get_template_directory_uri() . '/js/featherlight-1.7.13/featherlight.min.css' );

	wp_enqueue_script( 'homelesshampers-jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '20191201', true );
	wp_enqueue_script( 'homelesshampers-featherlight-lightbox', get_template_directory_uri() . '/js/featherlight-1.7.13/featherlight.min.js', array(), '20191212', true );
	wp_enqueue_script( 'homelesshampers-matchheight', get_template_directory_uri() . '/js/matchheight/jquery.matchHeight-min.js', array(), '20191215', true );
	wp_enqueue_script( 'homelesshampers-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'homelesshampers-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'homelesshampers-main-menu', get_template_directory_uri() . '/js/main-menu.js', array(), '20191201', true );
	wp_enqueue_script( 'homelesshampers-team-members', get_template_directory_uri() . '/js/team-members.js', array(), '20191215', true );
	wp_enqueue_script( 'homelesshampers-match-height-inits', get_template_directory_uri() . '/js/match-height-inits.js', array(), '20191215', true );
	wp_enqueue_script( 'homelesshampers-slick-js', get_template_directory_uri() . '/js/slick-1.8.1/slick.min.js', array(), '20191202', true );
	wp_enqueue_script( 'homelesshampers-slick-carousels', get_template_directory_uri() . '/js/slick-carousels.js', array(), '20191202', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'homelesshampers_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// HOMELESS HAMPERS CUSTOM FUNCTIONALITY
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2 );

function my_wp_nav_menu_objects( $items, $args ) {

	// loop
	foreach ( $items as &$item ) {

		// vars
		$link_type = get_field( 'link_type', $item );


		// append icon
		if ( $link_type ) {

			$item->classes = $link_type;

		}
	}


	// return
	return $items;

}

