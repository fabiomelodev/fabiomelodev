<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary">
<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- 

    lorem  ipsum
-->

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
<!-- end banner -->

<!-- project -->
<section class="l-project py-5" id="projetos">

    <div class="container">

        <div class="row">

            <div class="col-12 mt-5">

                <h3 class="u-title font-weight-bold text-uppercase text-center text-white">
                    projetos
                </h3>
            </div>

            <div class="col-12 d-flex justify-content-center my-4">
                
                <ul class="l-project__navbar d-md-flex mb-0 pl-0">

                    <li 
                    class="l-project__navbar__item u-list-style-none my-4 my-md-0 mx-2 py-2 py-sm-0 js-project-items active"
                    data-value="all-categories">
                        Todos
                    </li>

                    <li 
                    class="l-project__navbar__item u-list-style-none my-4 my-md-0 mx-2 py-2 py-sm-0 js-project-items"
                    data-value="Landing Page">
                        Landing Page
                    </li>

                    <li 
                    class="l-project__navbar__item u-list-style-none my-4 my-md-0 mx-2 py-2 py-sm-0 js-project-items"
                    data-value="Blog">
                        Blog
                    </li>

                    <li 
                    class="l-project__navbar__item u-list-style-none my-4 my-md-0 mx-2 py-2 py-sm-0 js-project-items"
                    data-value="Produto">
                        Produto
                    </li>
                </ul>
            </div>

            <div class="col-12 mt-5">

                <div class="row">
                    
                    <?php
                        $args = array(
                            'posts_per_page' => 1,
                            'post_type'      => 'projects'
                        );

                        $projects = get_posts($args);

                        foreach($projects as $project) :
                            if(have_rows( 'projetos', $project->ID )) :
                                while(have_rows( 'projetos', $project->ID )) : the_row();
                     ?>
                                    <div 
                                    class="l-project__col col-lg-4 my-3 js-projects active"
                                    data-value="<?php echo get_sub_field( 'tipo_de_projeto', $project->ID ) ?>">

                                        <div class="card l-project__card border-0 rounded-0 overflow-hidden">

                                            <div class="card-img d-flex justify-content-center align-items-center py-4">
                                                <img
                                                class="img-fluid"
                                                src="<?php echo get_sub_field( 'imagem' ) ?>"
                                                alt="<?php echo get_sub_field( 'nome_do_projeto' ) ?>">
                                            </div>

                                            <div class="card-body">

                                                <h6 class="font-weight-bold text-center">
                                                    <!-- WNR Engenharia -->
                                                    <?php echo get_sub_field( 'nome_do_projeto' ) ?>
                                                </h6>

                                                <p class="u-font-size-12 u-font-weight-medium text-center u-color-folk-light-black">
                                                    <!-- Landing Page -->
                                                    <?php echo get_sub_field( 'tipo_de_projeto', $project->ID ) ?>
                                                </p>

                                                <a
                                                class="l-project__card-link text-decoration-none py-2 px-5"
                                                href="<?php echo get_sub_field( 'link_do_projeto', $project->ID ) ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Ver site
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                    <?php       endwhile; 
                            endif;
                        endforeach; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end project -->

<!-- tools -->
<section class="l-tools u-bg-folk-black mt-n2 mt-lg-0 py-5" id="servicos">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">
                    
                    <?php
                        $args = array(
                            'posts_per_page' => 1,
                            'post_type'      => 'services'
                        );

                        $services = get_posts($args);

                        foreach($services as $service) :
                            if(have_rows( 'servicos', $service->ID )) :
                                while(have_rows( 'servicos', $service->ID )) : the_row();
                     ?>
                                    <div class="col-lg-4 my-3 my-lg-0">

                                        <div class="card h-100 justify-content-between u-bg-folk-none">

                                            <div class="card-img d-flex justify-content-center align-items-center">
                                                <img
                                                class="img-fluid"
                                                src="<?php echo get_sub_field( 'imagem', $service->ID) ?>"
                                                alt="<?php echo get_sub_field( 'titulo', $service->ID) ?>">
                                            </div>

                                            <div class="card-body">
                                                <h6 class="u-font-weight-medium text-center text-white mb-3">
                                                    <!-- Sites -->
                                                    <?php echo get_sub_field( 'titulo', $service->ID) ?>
                                                </h6>

                                                <span class="d-block u-font-size-12 u-font-weight-medium text-center text-white">
                                                    <!-- Desenvolvimento de sites <br> 
                                                    em Worpress e estilização <br>
                                                    na Loja Integrada -->
                                                    <?php echo get_sub_field( 'conteudo', $service->ID) ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                    <?php       endwhile; 
                            endif;
                        endforeach; 
                    ?>

                    <!-- <div class="col-lg-4 my-3 my-lg-0">

                        <div class="card h-100 justify-content-between u-bg-folk-none">

                            <div class="card-img d-flex justify-content-center align-items-center">
                                <img
                                class="img-fluid"
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-maintenance.png"
                                alt="Single Temas">
                            </div>

                            <div class="card-body">
                                <h6 class="u-font-weight-medium text-center text-white mb-3">
                                    Manutenção
                                </h6>

                                <p class="u-font-size-12 u-font-weight-medium text-center text-white">
                                    Manutenção em sites <br>
                                    desenvolvido em Wordpress <br>
                                    com temas ou não
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 my-3 my-lg-0">

                        <div class="card h-100 justify-content-between u-bg-folk-none">

                            <div class="card-img d-flex justify-content-center align-items-center">
                                <img
                                class="img-fluid"
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/technology-icon-optimized.png"
                                alt="Single Temas">
                            </div>

                            <div class="card-body">
                                <h6 class="u-font-weight-medium text-center text-white mb-3">
                                    Otimização
                                </h6>

                                <p class="u-font-size-12 u-font-weight-medium text-center text-white">
                                    Tornando os sites mais <br>
                                    rápidos, leve e com <br>
                                    bom desempenho
                                </p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end tools -->

<!-- budget -->
<section class="l-budget position-relative d-flex justify-content-center align-items-center u-bg-folk-black mt-n3 mt-lg-0 py-5" id="orcamento">
    <span class="l-budget__overlay-top"></span>
    <span class="l-budget__overlay-bottom"></span>
    <span class="l-budget__overlay-left"></span>
    <span class="l-budget__overlay-right"></span>

    <div class="container">

        <div class="row">

            <div class="col-12 d-flex flex-column align-items-center">

                <h3 class="l-budget__title u-font-weight-medium text-center u-color-folk-white">
                    Faça seu orçamento
                </h3>

                <p class="l-budget__text u-font-weight-medium text-center u-color-folk-white my-3">
                    Mostre os seus objetivos e sonhos <br>  
                    Ajudarei a tornar digital
                </p>

                <a
                class="c-btn-pattern border-0 u-font-size-14 font-weight-bold text-center text-uppercase text-decoration-none u-color-folk-black hover:u-color-folk-white u-bg-folk-white hover:u-bg-folk-purple py-1 px-4"
                href="#">
                    orçamento
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end budget -->

<!-- logo -->
<section class="l-logo u-bg-folk-black mt-n3 mt-lg-0 py-5">   

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-10 mt-5">

                <!-- swiper -->
                <div class="swiper-container js-swiper-logo ">

                    <div class="swiper-wrapper">
                        
                        <?php
                            if(have_rows( 'logos' )) :
                                while(have_rows( 'logos' )) : the_row();
                        ?>
                                    <div class="swiper-slide">
                                        <img
                                        class="img-fluid"
                                        src="<?php echo get_sub_field( 'logo' ) ?>"
                                        alt="<?php echo get_sub_field( 'titulo' ) ?>">
                                    </div>
                        <?php   endwhile; 
                            endif;
                        ?>
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
<!-- end logo -->

<!-- contact -->
<section class="l-contact u-bg-folk-black mt-n3 mt-lg-0 py-5" id="contato">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-6 mt-5">

                <h3 class="l-contact__title font-weight-bold text-center u-color-folk-white mb-5">
                    Entre em contato
                </h3>

                <!-- <form>

                    <div class="row">

                        <div class="col-12 my-3">
                            <label
                            class="l-contact__label u-font-weight-medium u-color-folk-white"
                            for="your-name">
                                Seu nome:
                            </label>
                            <input
                            class="c-input-field p-2"
                            type="text"
                            id="your-name">
                        </div>

                        <div class="col-12 my-3">
                            <label
                            class="l-contact__label u-font-weight-medium u-color-folk-white"
                            for="your-email">
                                Seu e-mail:
                            </label>
                            <input
                            class="c-input-field p-2"
                            type="email"
                            id="your-email">
                        </div>

                        <div class="col-12 my-3">
                            <label
                            class="l-contact__label u-font-weight-medium u-color-folk-white"
                            for="your-tel">
                                Seu telefone:
                            </label>
                            <input
                            class="c-input-field p-2"
                            type="text"
                            id="your-tel"
                            placeholder="(xx) xxxxx-xxxx">
                        </div>

                        <div class="col-12 my-3">
                            <input
                            class="c-btn-pattern w-100 border-0 font-weight-bold text-center hover:u-color-folk-white u-bg-folk-white hover:u-bg-folk-purple py-2"
                            type="submit"
                            value="ENVIAR">
                        </div>
                    </div>
                </form> -->

                <?php echo do_shortcode( '[contact-form-7 id="61" title="Contato"]' ) ?>
            </div>
        </div>
    </div>
</section>
<!-- end contact -->

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
