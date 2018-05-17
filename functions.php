<?php
/**
 * cayitey functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cayitey
 */

if ( ! function_exists( 'claude_ayitey_setup' ) ) :

	function claude_ayitey_setup() {

		load_theme_textdomain( 'claude-ayitey', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'claude-ayitey' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'claude_ayitey_custom_background_args', array(
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
endif;
add_action( 'after_setup_theme', 'claude_ayitey_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function claude_ayitey_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'claude_ayitey_content_width', 640 );
}
add_action( 'after_setup_theme', 'claude_ayitey_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function claude_ayitey_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'claude-ayitey' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'claude-ayitey' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'claude_ayitey_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function claude_ayitey_scripts() {
	wp_enqueue_style( 'claude-ayitey-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/cayitey.css' );

	wp_enqueue_script( 'claude-ayitey-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'claude-ayitey-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'claude_ayitey_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Remove P Tags Around Images
function filter_ptags_on_images($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


/*
* Creating a function to create our CPT
*/
function custom_post_type() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Projects', 'Post Type General Name', 'claude-ayitey' ),
        'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'claude-ayitey' ),
        'menu_name'           => __( 'Projects', 'claude-ayitey' ),
        'parent_item_colon'   => __( 'Parent Project', 'claude-ayitey' ),
        'all_items'           => __( 'All Projects', 'claude-ayitey' ),
        'view_item'           => __( 'View project', 'claude-ayitey' ),
        'add_new_item'        => __( 'Add New project', 'claude-ayitey' ),
        'add_new'             => __( 'Add New', 'claude-ayitey' ),
        'edit_item'           => __( 'Edit project', 'claude-ayitey' ),
        'update_item'         => __( 'Update project', 'claude-ayitey' ),
        'search_items'        => __( 'Search project', 'claude-ayitey' ),
        'not_found'           => __( 'Not Found', 'claude-ayitey' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'claude-ayitey' ),
    );
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'projects', 'claude-ayitey' ),
        'description'         => __( 'Projects', 'claude-ayitey' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'events' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    // Registering your Custom Post Type
    register_post_type( 'projects', $args );
 }
/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );
