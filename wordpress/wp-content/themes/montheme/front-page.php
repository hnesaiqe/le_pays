    <?php get_header(); ?>
    <div class="container">
        FRONT-PAGE.PHP
        <div class="row text-center d-flex align-items-center border border-light">
            <div class="content col-8">
                <h1 class="text-dark text-uppercase">Acceuil</h1>
                <div class="col-12 d-flex h-25">
                    <div class="col-6 px-3">
                        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

                        <!-- the_title() permet d’afficher le titre -->
                        <h3 class="text-dark"><?php the_title(); ?></h3>

                        <?php the_post_thumbnail(); ?>
                        <?php the_excerpt(); ?>
                        <p>
                            <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
                        </p>
                    </div>
                    <div class="col-6 px-3">
                        <?php endwhile; endif; ?>
                    </div>
                </div>

            </div>
            <div class="slideBar col-4 border-left bg-light">
                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>
    <?php get_footer(); ?>
    </div>