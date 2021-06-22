<?php get_header(); ?>
	<div class="container mx-5">            
		<div class="row text-center d-flex border border-light">
			<div class="content col-8">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<!-- the_title() permet d’afficher le titre -->
				<h1 class="text-dark text-upercase"><?php the_title(); ?></h1>

				<!-- the_content() va afficher le contenu de la page -->
				<?php the_content(); ?>


				<?php endwhile; endif; ?>
			</div>
			<div class="slideBar col-4 border-left bg-light">    						
				<div class="col-12">
					<h5 >Culture</h5>
					<div><?php echo do_shortcode("[pt_view id=e8d5c6eb36]"); ?></div>
				</div>
				<hr>
				<div class="col-12">
					<h5 >Sport</h5>
					<div><?php echo do_shortcode("[pt_view id=34056ae4wh]"); ?></div>
				</div>
				<hr>
				<?php get_sidebar(); ?>	
			</div>
		</div>
	</div>
<?php get_footer(); ?>
