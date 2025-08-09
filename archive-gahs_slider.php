<?php get_header(); ?>
<!-- cooding for main content -->
<section id="main-content">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
			<div class="left_site Teacher_gal ">
				<h2 class="before_after">ছবি গ্যালারি </h2>
				<?php 
					$posts = query_posts('post_type=gahs_slider&posts_per_page=500'); 
							$text=''; $i=0;							
							while ( have_posts() ) : the_post();													
								if ( has_post_thumbnail() ) {
									$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID) );
										}else{$url="";}										
									   echo'<div class="col-md-3 col-sm-6">
												<div class="img_gelary">			
													<img src="'.$url.'" alt="'.get_the_title().'">
													<div class="zoom_mor">
														<a href="#"aria-hidden="true" data-toggle="modal" data-target=".bs-example-modal-lg'.$i.'">Zoom <i class="fa fa-search-plus" ></i></a>
													</div>
												
												</div>
												<div class="modal fade bs-example-modal-lg'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
												  <div class="modal-dialog modal-lg">
													<div class="modal-content">
														<img src="'.$url.'" alt="'.get_the_title().'" class="img-thumbnail">
													</div>
												  </div>
												</div>
											</div>';
											$i++;
						
						endwhile;	
						wp_reset_query();
					?>			
			</div>
		</div>     
  </div>
</section>
<?php get_footer(); ?>

