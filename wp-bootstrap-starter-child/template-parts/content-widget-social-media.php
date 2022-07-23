<?php
    $args = array(
        'posts_per_page' => 1,
        'post_type'      => 'social-media',
    );

    $socials = get_posts($args);

    foreach($socials as $social) :
?>
        <ul class="l-widget-social-media__list js-list-social-media">

            <?php if(get_field( 'link_facebook', $social->ID )) : ?>
                <li class="l-widget-social-media__item">
                    <a 
                    class="l-widget-social-media__link l-widget-social-media__icon l-widget-social-media__facebook"
                    href="<?php echo get_field( 'link_facebook', $social->ID ) ?>"
                    target="_blank"
                    rel="noreferrer noopener">
                        Link do Facebook
                    </a>
                </li>
            <?php endif; ?>

            <?php if(get_field( 'link_instagram', $social->ID )) : ?>
                <li class="l-widget-social-media__item">
                    <a 
                    class="l-widget-social-media__link l-widget-social-media__icon l-widget-social-media__instagram"
                    href="<?php echo get_field( 'link_instagram', $social->ID ) ?>"
                    target="_blank"
                    rel="noreferrer noopener">
                        Link do Instagram
                    </a>
                </li>
            <?php endif; ?>
            
            <?php if(get_field( 'link_twitter', $social->ID )) : ?>
                <li class="l-widget-social-media__item">
                    <a 
                    class="l-widget-social-media__link l-widget-social-media__icon l-widget-social-media__twitter"
                    href="<?php echo get_field( 'link_twitter', $social->ID ) ?>"
                    target="_blank"
                    rel="noreferrer noopener">
                        Link do Twitter
                    </a>
                </li>
            <?php endif; ?>

            <?php if(get_field( 'link_whatsapp', $social->ID )) : ?>
                <li class="l-widget-social-media__item">
                    <a 
                    class="l-widget-social-media__link l-widget-social-media__icon l-widget-social-media__whatsapp"
                    href="<?php echo get_field( 'link_whatsapp', $social->ID ) ?>"
                    target="_blank"
                    rel="noreferrer noopener">
                        Link do Whatsapp
                    </a>
                </li>
            <?php endif; ?>
        </ul>

        <div class="l-widget-social-media js-widget-social-media">
            <span class="l-widget-social-media__icon-open"></span>    
        </div>
<?php endforeach; ?>