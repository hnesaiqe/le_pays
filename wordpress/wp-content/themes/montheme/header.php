<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid">
        <header class="logo text-center mb-3">
            <a href="<?php echo home_url( '/' ); ?>">
                <img style="width: 10%;" src="<?php echo get_template_directory_uri(); ?>/img/logo-journal.jpg"
                    alt="Logo">
            </a>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div><a class="navbar-brand" href="#"></a></div>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'main',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav mx-auto',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            )); ?>

        </nav>

        <?php wp_body_open(); ?>