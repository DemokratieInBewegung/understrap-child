<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'cookieconsent', get_stylesheet_directory_uri() . '/css/cookieconsent.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'cookieconsent', get_stylesheet_directory_uri() . '/js/cookieconsent.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}


function dib_theme_social_menu( $atts ) {
    return wp_nav_menu(
                array(
                    'theme_location'  => 'social',
                    'echo'            => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'list-inline',
                    'fallback_cb'     => '',
                    'menu_id'         => $atts['id'],
                    'walker'          => new understrap_WP_Bootstrap_Navwalker(),
                )
            );
}
add_shortcode( 'render_social_menu', 'dib_theme_social_menu' );

add_action( 'after_setup_theme', 'dib_theme_setup' );
if ( ! function_exists ( 'dib_theme_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function dib_theme_setup() {
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'secondary' => "Oben rechts",
            'social' => "Soziale Medien Kanäle",
            'footer' => "Unten rechts",
        ) );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
