<section class="l-banner position-relative d-flex justify-content-center align-items-center">

    <span class="l-banner__overlay-top"></span>
    <span class="l-banner__overlay-bottom"></span>
    <span class="l-banner__overlay-left"></span>
    <span class="l-banner__overlay-right"></span>

    <div class="container">

        <div class="row">

            <div class="col-lg-6">

                <p class="u-font-size-12 u-font-weight-regular text-white">
                    Bem-vindo(a)
                </p>

                <span class="l-banner__title d-block u-font-weight-medium text-white">
                    <?php the_content() ?>
                </span>

                <div class="d-flex flex-column d-sm-block mt-5 mt-lg-4">
                    <a
                    class="c-btn-pattern u-border-color-white u-font-size-14 u-font-weight-medium text-center text-sm-left text-decoration-none u-color-folk-white hover:u-color-folk-black hover:u-bg-folk-white my-2 my-sm-0 py-2 px-3 js-navbar-hide"
                    href="#projetos">
                        Meus projetos
                    </a>

                    <a
                    class="c-btn-pattern u-border-color-white hover:u-border-color-purple u-font-size-14 u-font-weight-medium text-center text-sm-left text-decoration-none u-color-folk-black hover:u-color-folk-white u-bg-folk-white hover:u-bg-folk-purple my-2 my-sm-0 ml-sm-3 py-2 px-3 js-navbar-hide"
                    href="#orcamento">
                        Faça orçamento
                    </a>
                </div>
            </div>
        </div>

        <?php
            $args = array(
                'posts_per_page' => 1,
                'post_type'      => 'social-media',
            );

            $socials = get_posts($args);

            foreach($socials as $social) :
        ?>
                <ul class="l-social-media__top d-none d-lg-block js-social-media">

                    <?php if(get_field( 'link_facebook', $social->ID )) : ?>
                        <li class="l-social-media__top__item u-list-style-none" data-username="<?php echo get_field( 'facebook', $social->ID ) ?>">
                            <a
                            class="u-icon__brands u-icon__facebook u-font-size-0 before::u-font-size-20 text-decoration-none text-white"
                            href="<?php echo get_field( 'link_facebook', $social->ID ) ?>"
                            target="_blank"
                            rel="noreferrer noopener">
                                Link do Facebook
                            </a>
                        </li>
                    <?php endif; ?>
                    
                    <?php if(get_field( 'link_instagram', $social->ID )) : ?>
                        <li class="l-social-media__top__item u-list-style-none my-2" data-username="<?php echo get_field( 'instagram', $social->ID ) ?>">
                            <a
                            class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-20 text-decoration-none text-white"
                            href="<?php echo get_field( 'link_instagram', $social->ID ) ?>"
                            target="_blank"
                            rel="noreferrer noopener">
                                Link do Instagram
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_field( 'link_whatsapp', $social->ID )) : ?>
                        <li class="l-social-media__top__item u-list-style-none" data-username="<?php echo get_field( 'whatsapp', $social->ID ) ?>">
                            <a
                            class="u-icon__brands u-icon__whatsapp u-font-size-0 before::u-font-size-20 text-decoration-none text-white"
                            href="<?php echo get_field( 'link_whatsapp', $social->ID ) ?>"
                            target="_blank"
                            rel="noreferrer noopener">
                                Link do Whatsapp
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
        <?php endforeach; ?>

        <a class="l-banner__icon-arrow-down text-decoration-none is-bouncing js-navbar-hide" href="#projetos"></a>
    </div>
</section>