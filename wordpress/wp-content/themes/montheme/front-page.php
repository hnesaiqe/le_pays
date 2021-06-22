<?php get_header(); ?>
	<div class="container">
		<div class="row text-center">
			<div class="content col-8">
				<div class='col-12 text-start mt-2'>
					<ul class="nav nav-tabs text-uppercase">
						<li class="nav-item">
							<a class="nav-link active text-danger" aria-current="page" href="#">à la une</a>
						</li>
					</ul>					
				</div>
				<div class="cards">
					Article
				</div>
				<hr>
				<div class="col-12 d-flex">	
					<div class="col-12 px-3">
						<?php echo do_shortcode("[pt_view id=d442c459dg]"); ?>                        
					</div>
				</div>
			</div>
			<div class="slideBar col-4 border-left bg-light">    						
				<div class="col-12">
					<h5 class="text-dark">Culture</h5>
					<div><?php echo do_shortcode("[pt_view id=e8d5c6eb36]"); ?></div>
				</div>
				<hr>
				<div class="col-12">
					<h5 class="text-dark">Sport</h5>
					<div><?php echo do_shortcode("[pt_view id=34056ae4wh]"); ?></div>
				</div>
				<hr>
				<?php get_sidebar(); ?>	
			</div>
		</div>
	</div>
<?php get_footer(); ?>
   