<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div hidden>
    <?php get_template_part( 'loop-templates/sprite', 'svg' ); ?>
</div>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

        <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="row no-gutters navbar navbar-expand-lg align-items-center mt-2 mb-0">

            <?php if ( 'container' == $container ) : ?>
            <div class="container">
                <?php endif; ?>

                <!-- Your site title as branding in the menu -->
                <?php if ( ! has_custom_logo() ) { ?>

            <?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand m-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

            <?php else : ?>

                <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

            <?php endif; ?>


                <?php } else {
                    the_custom_logo();
                } ?><!-- end custom logo -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                    <span class="fa fa-bars"></span>
                </button>

    			<div class="collapse navbar-collapse p-0 m-0 col d-lg-flex justify-content-between" id="navbarNavDropdown">

                <!-- The WordPress Menu goes here -->
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'navbar-nav',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 1,
                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                ); ?>

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'secondary',
							'container_class' => 'justify-content-end mt-3 mr-3 mr-lg-0 mt-lg-0',
							'container_id'    => '',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'top-right-menu',
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				</div>


                <?php if ( 'container' == $container ) : ?>
            </div><!-- .container -->
        <?php endif; ?>

        </nav><!-- .site-navigation -->

    </div><!-- #wrapper-navbar end -->