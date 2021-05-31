<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid">
        <header class="header text-center ">
            <a href="<?php echo home_url( '/' ); ?>">
                <img style="width: 10%;"src="<?php echo get_template_directory_uri(); ?>/img/logo-journal.jpg" alt="Logo">
            </a>
        </header>


        <nav class="navbar-light bg-light text-center">
            <!-- Apelle la fonction NavMenu -->
            <?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu' ) ); ?>

        </nav>

        <?php wp_body_open(); ?>