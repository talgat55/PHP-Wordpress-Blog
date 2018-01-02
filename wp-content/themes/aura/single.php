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

			<?php  while ( have_posts() ) : the_post();  ?>
 
					<article id="post-<?php the_ID(); ?>" <?php post_class('large-post-item'); ?>>
						<div class="post-thumb">
							 <img src="<?php echo wp_get_attachment_image_url(  get_post_thumbnail_id(),'full'); ?>"  /> 
						</div>
					 		<div class="post-entry">
													
								<div class="post-header">
													
								 <h2><?php echo get_the_title(); ?></h2> 
													
								</div>

								<div class="post-meta">
									<span class="post-meta-data">
										<?php echo get_the_date('d-M'); ?>
									</span>
											
									<span class="sep-post-meta">/</span>
									
									<span class="post-meta-tag">
										<?php 
											foreach (get_the_tags() as $key => $value) {

												if($key==0){
													echo $value->name;
												}else{

													echo ' ,'.$value->name;
												}
											}
										?>
									</span>
														
									<!--<span class="sep-post-meta">/</span>
									
									<span class="post-meta-likes">
										 <i class="fa fa-heart"></i>
										 <span>99</span>
									</span>
											-->			
								</div>
								<div class="post-content">
									<p>
										<?php echo get_the_content(); ?>
									</p>
								</div>
														 
							</div>
					 
					 	<?php  comments_template('', true); ?>

						</article><!-- #post-## -->

			<?php endwhile; ?>
				</div>
			</div>
			<div class="col-lg-3 no-padding">
				<?php get_sidebar(); ?>
			</div> 
		</div><!--  container end -->
			
</section><!--  content end -->
<?php get_footer();
