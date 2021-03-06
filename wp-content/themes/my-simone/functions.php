<?php
/**
 * my-simone functions and definitions
 *
 * @package my-simone
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600; /* pixels */
}

if ( ! function_exists( 'my_simone_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function my_simone_setup() {

	// This theme styles the visual editor to resemble the theme style.
	$font_url = 'http://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,900,900italic|PT+Serif:400,700,400italic,700italic';
	add_editor_style( array( 'inc/editor-style.css', str_replace( ',', '%2C', $font_url ) ) );


	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on my-simone, use a find and replace
	 * to change 'my-simone' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'my-simone', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'post-thumbnails' );
	add_image_size('large-thumb', 1060, 650, true);
	add_image_size('index-thumb', 180, 180, true);


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'my-simone' ),
                'social' => __( 'Social Menu', 'my-simone' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside' ) );

	// Setup the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'my_simone_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
                'caption',
	) );
}
endif; // my_simone_setup
add_action( 'after_setup_theme', 'my_simone_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function my_simone_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'my-simone' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
        
	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'my-simone' ),
		'description'   => __( 'Footer widgets area appears in the footer of the site.', 'my-simone'),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Top Widgets', 'my-simone' ),
		'description'   => __( 'Top of site widget that goes under main nav menu.', 'my-simone'),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Bottom Widgets', 'my-simone' ),
		'description'   => __( 'Bottom Widget that goes under content and above footer.', 'my-simone'),
		'id'            => 'sidebar-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Mobile Top Widget', 'my-simone' ),
		'description'   => __( 'Top Widget that goes above content and under main nav (MOBILE ONLY).', 'my-simone'),
		'id'            => 'sidebar-5',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Mobile Bottom Widget', 'my-simone' ),
		'description'   => __( 'Bottom Widget that goes under content and above footer (MOBILE ONLY).', 'my-simone'),
		'id'            => 'sidebar-6',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Mobile Footer Widget', 'my-simone' ),
		'description'   => __( 'Footer Widget (MOBILE ONLY).', 'my-simone'),
		'id'            => 'sidebar-7',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Above Nav Buttons Widget', 'my-simone' ),
		'description'   => __( 'Widget that goes above the next/previous buttons.', 'my-simone'),
		'id'            => 'sidebar-8',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Mobile Above Nav Buttons Widget', 'my-simone' ),
		'description'   => __( 'Widget that goes above the next/previous buttons (MOBILE ONLY).', 'my-simone'),
		'id'            => 'sidebar-9',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header Widget', 'my-simone' ),
		'description'   => __( 'Widget that sits on top of header image.', 'my-simone'),
		'id'            => 'sidebar-10',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'my_simone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function my_simone_scripts() {
	wp_enqueue_style( 'my-simone-style', get_stylesheet_uri() );

		if (is_page_template('page-templates/page-nosidebar.php')) {
			wp_enqueue_style( 'my-sinome-layout-style' , get_template_directory_uri() . '/layouts/no-sidebar.css');
		} else {
			wp_enqueue_style( 'my-sinome-layout-style' , get_template_directory_uri() . '/layouts/content-sidebar.css');
		}
        
        wp_enqueue_style('my-simone-google-fonts', 'http://fonts.googleapis.com/css?family=Lato:100,400,700,900,400italic,900italic|PT+Serif:400,700,400italic,700italic|Exo+2:400,400italic,600,600italic,700,700italic,800,800italic');
        
        wp_enqueue_Style( 'my-simone-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );

        wp_enqueue_script( 'my-simone-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20140404', true );
        
        wp_enqueue_script( 'my-simone-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('my-simone-superfish'), '20140328', true );
        
        wp_enqueue_script( 'my-simone-hide-search', get_template_directory_uri() . '/js/hide-search.js', array('jquery'), '20140404', true );

	wp_enqueue_script( 'my-simone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'my-simone-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'my-simone-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20140401', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_simone_scripts' );

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





/** Add featured image as background image to post navigation elements.

 * @see wp_add_inline_style()
*/

function my_simone_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'my_simone-style', $css );
}
add_action( 'wp_enqueue_scripts', 'my_simone_post_nav_background' );