<?php
/**
 * Travel Tripper functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Travel_Tripper
 */

if ( ! function_exists( 'traveltripper_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function traveltripper_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Travel Tripper, use a find and replace
		 * to change 'traveltripper' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'traveltripper', get_template_directory() . '/languages' );

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

		/*
         * Register navigation menu for use with wp_nav_menu()
         */
		register_nav_menus( array(
			// 'menu-header' => esc_html__( 'Header Main', 'traveltripper' ),
			// 'menu-mobile' => esc_html__( 'Mobile', 'traveltripper' ),
			'menu-footer-1' => esc_html__( 'Footer Solutions', 'traveltripper' ),
			'menu-footer-2' => esc_html__( 'Footer Who We Serve', 'traveltripper' ),
			'menu-footer-3' => esc_html__( 'Footer About', 'traveltripper' ),
			'menu-footer-4' => esc_html__( 'Footer Resources', 'traveltripper' ),
			'menu-footer-bottom' => esc_html__( 'Footer Bottom', 'traveltripper' ),
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
		add_theme_support( 'custom-background', apply_filters( 'traveltripper_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
}
add_action( 'after_setup_theme', 'traveltripper_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function traveltripper_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'traveltripper_content_width', 640 );
}
add_action( 'after_setup_theme', 'traveltripper_content_width', 0 );


/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
add_action( 'widgets_init', 'traveltripper_widgets_init' );
function traveltripper_widgets_init() {
    // Primary Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar - Blog', 'traveltripper' ),
		'id'            => 'sidebar-primary',
		'description'   => esc_html__( 'Add widgets here.', 'traveltripper' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );

    // Resources Sidebar
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Sidebar - Resources', 'traveltripper' ),
	// 	'id'            => 'sidebar-resources',
	// 	'description'   => esc_html__( 'Add widgets here.', 'traveltripper' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>'
	// ) );
}


/**
 * Allow PHP in the Text widget.
 */
// add_filter( 'widget_text', 'execute_php', 100 );
function execute_php( $html ) {
    if ( strpos( $html, "<" . "?php" ) !== false ) {
        ob_start();
        eval( "?" . ">" . $html );
        $html = ob_get_contents();
        ob_end_clean();
    }
    return $html;
}


/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'traveltripper_scripts' );
function traveltripper_scripts() {
	wp_enqueue_style( 'traveltripper', get_stylesheet_uri() );

    //* Add Google fonts
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,600i,700');

    wp_enqueue_script( 'traveltripper-javascript', get_template_directory_uri() . '/js/main.min.js', array(), null, true);

    if ( is_page_template( array( 'page-templates/solutions.php', 'page-templates/reztrip.php', 'page-templates/ttweb.php', 'page-templates/digital-marketing.php', 'page-templates/rate-match.php' ) ) ) {
        wp_enqueue_script( 'unbounce-javascript', 'https://58b1f8f7754642a9a92d909305e6d42c.js.ubembed.com', array(), null, true);
    }

	// wp_enqueue_script( 'traveltripper-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'traveltripper-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


/**
 * Hide ACF Custom Menu from non-developers
 */
add_filter( 'acf/settings/show_admin', 'tt_acf_show_admin' );
function tt_acf_show_admin( $show ) {
    if ( get_user_by( 'email', 'brad@traveltripper.com' ) || get_user_by( 'email', 'jburkhard@traveltripper.com' ) || get_user_by( 'email', 'not@relevent.com' ) ) {
        return true;
    }
}


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
 * Custom Post Types
 */
require get_template_directory() . '/inc/custom-post-types.php';


/**
 * Custom Taxonomies
 */
require get_template_directory() . '/inc/custom-taxonomies.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Load ACF Options Pages.
 */
require get_template_directory() . '/inc/acf-options.php';
