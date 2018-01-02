 
<article id="post-<?php the_ID(); ?>" <?php post_class('large-post-item'); ?>>
	<div class="post-thumb">
		<a href="<?php echo get_permalink(); ?>"><img src="<?php echo wp_get_attachment_image_url(  get_post_thumbnail_id(),'full'); ?>"  /></a>
	</div>
 		<div class="post-entry">
								
			<div class="post-header">
								
				<a href="<?php echo get_permalink(); ?>"><h2><?php echo get_the_title(); ?></h2></a>
								
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
					<?php echo get_the_excerpt(); ?>
				</p>
			</div>
									 
		</div>
 
 

</article><!-- #post-## -->
