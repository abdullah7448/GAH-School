<?php get_header(); ?>

<section id="main-content">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
			<div class="left_site Teacher_gal">
				<h2 class="before_after">টিচার গ্যলারী</h2>
					<?php  
				
					$posts_per_page = get_option('posts_per_page');	//pagination admin pelan code 			
					$args = array(
						
						'post_type' => 'teacher_l',
						'posts_per_page' => $posts_per_page,
					 );
					$args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; /*jodi post type hoy tahole  d key dite hobe */
					
					$zia = new WP_Query($args);
			
			
					?>
				
				<?php while($zia -> have_posts()) : $zia ->the_post(); ?>
				<div class="col-md-3 col-sm-6">
				
					<div class="img_gelary">
						<?php
						 if ( has_post_thumbnail() ) {
							the_post_thumbnail('full'); // or use a size like 'thumbnail', 'medium', etc.
						} else {
							// URL to your placeholder image
						   $placeholder_url = get_template_directory_uri() . '/assets/img/place-holder-image.png'; 
						   echo '<img src="' . esc_url($placeholder_url) . '" alt="Placeholder Image" />';
						}?>
						  <h3>নাম: <?php echo get_post_meta(get_the_ID($zia->ID),'name', true); ?></h3>
						 <p>পদবি: <?php echo get_post_meta(get_the_ID($zia->ID),'Surname', true); ?></p>
                        <p>মোবা: <?php echo get_post_meta(get_the_ID($zia->ID),'t_mob', true); ?></p>
					</div>
				</div>
				<?php endwhile; ?>	
						
			</div>
		</div>
				<div class="col-md-12">
			<div class="page_nav">
					<div class="inner">
						<?php // my_pagination(); ?>
						
						<div class="page_nav">
							<?php 
								$temp_query = $wp_query;
								$wp_query   = NULL;
								$wp_query   = $zia;
								
								//my_pagination(); 
								
								$wp_query = NULL;
								$wp_query = $temp_query;
								wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
		</div>
        
      </div>
    </div>
  </div>
</section>
<?php require_once('picture-patha.php');?>
<?php get_footer(); ?>