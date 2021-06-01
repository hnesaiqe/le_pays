<?php get_header(); ?>
<div class="container">
    FRONT-PAGE.PHP
    <div class="row text-center d-flex align-items-center border border-light">
        <div class="content col-8">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <!-- the_title() permet d’afficher le titre -->
            <h1><?php the_title(); ?></h1>

            <!-- the_content() va afficher le contenu de la page -->
            <?php the_content(); ?>

            <?php endwhile; endif; ?>
        </div>
        <div class="slideBar col-4 border-left">
            <?php get_sidebar(); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>