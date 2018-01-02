<?php get_header(); ?>


<section id="content" class="full-screen main-wallpapers clearfix" style="background-color: #f9f9f9;">
	<div class="title-box">
				<div class="container clearfix">
					<h1><?php _e( 'Posts', 'light' ); ?></h1>
				</div>
	</div>
		<div class="container"><!--  container -->
 			<div class="col-lg-9 no-padding">
				
				<div class="large-posts clearfix">

			<?php 

				/* Start the Loop */
				while ( have_posts() ) : the_post(); 
					 
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

		  
			?>
				</div>
			</div>
			<div class="col-lg-3 no-padding">
				<?php get_sidebar(); ?>
			</div> 
		</div><!--  container end -->
			
</section><!--  content end -->
<?php get_footer();
