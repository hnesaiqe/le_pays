<?php get_header(); ?>
	<div class="row text-center d-flex align-items-center border border-light">
		<div class="content col-7 bg-warning border border-light">
			<h1></h1>
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
<?php get_footer(); ?>