<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<a title="Privacy-friendly Web Analytics" href="https://clicky.com/101374165"><img alt="Clicky" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
<script async src="//static.getclicky.com/101374165.js"></script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/101374165ns.gif" /></p></noscript>
</head>

<body <?php body_class(); ?>>

<?php 
    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

    <header id="masthead" class="l-header site-header navbar-static-top py-3 <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">

        <div class="container-fluid">

            <div class="navbar-brand">
                <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                    <a href="<?php echo esc_url( home_url( '/' )); ?>">
                        <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    </a>
                <?php else : ?>
                    <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                <?php endif; ?>

            </div>

            <nav class="l-navbar navbar navbar-expand-xl justify-content-center p-0 js-navbar">

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'd-flex justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav d-block',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>

            <button 
            class="l-navbar__toggler js-btn-toggler">
                menu
            </button>
        </div>
    </header><!-- #masthead -->
    
    <?php endif; ?>