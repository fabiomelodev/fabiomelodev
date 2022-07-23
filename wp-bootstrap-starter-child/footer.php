<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
  
    <?php get_template_part( 'footer-widget' ); ?>
    
    <!-- <footer id="colophon" class="site-footer <php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <php echo date('Y'); ?> <php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

            </div>
        </div>
    </footer> #colophon -->

    <!-- widget social media -->
    <?php echo get_template_part( 'template-parts/content', 'widget-social-media' ) ?>
    <!-- end widget social media -->

    <!-- loading -->
    <?php echo get_template_part( 'template-parts/content', 'loading' );  ?>
    <!-- end loading -->

    <!-- change language -->
    <?php echo get_template_part( 'template-parts/content', 'change-language' );  ?>
    <!-- end change language -->

    <footer class="l-footer u-bg-folk-black mt-n3 mt-lg-0 py-5">
        <p class="font-weight-bold text-center u-color-folk-white mb-0">
            <?php echo '&copy;' . ' ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ); ?>
        </p>
    </footer>

<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>