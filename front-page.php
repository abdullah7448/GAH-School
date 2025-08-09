<?php 
get_header();
?>
	<!-- cooding for main content -->


<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="content-start">
        <div class="col-md-8 ">
          <div class="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
			  <div class="carousel-inner" role="listbox">
				<?php 
						//$posts = query_posts('post_type=zi_slider&posts_per_page=10'); 
							$text=''; $i=0;							
							while ( have_rows('slider_data', 'options') ) : the_row();
                            
                            $img=get_sub_field('slider_image');	
                            $title=get_sub_field('slider_title');												
                            $desc=get_sub_field('slider_description');	
								//if ( has_post_thumbnail() ) {
									//$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID) );
									if($i==0){$active = "active";}else{$active=NULL;}
    							    echo'<div class="item '.$active.'">
    										<img src="'.$img['url'].'" alt="'.get_the_title().'">
    										<div class="carousel-caption">
    											<h3>'.$title.'</h3>
    											<p>'.$desc.'</p>
    										</div>
    									</div>';
    									$i++;
								//}
								
							endwhile;	
						//wp_reset_query();
					?>	
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>  
			 </div>
          </div>
          
          <div class="welcome-section">
            <h2><span><?php echo get_field('welcome_title', 'options')?></span></h2>
            <p><?php echo get_field('wc_desc', 'options')?></p>
			
          </div>
		  <div class="Kumati welcome-section">
			<h2><span><?php echo get_field('sp_title', 'options')?></span></h2>
			
			<div class="picture_Kumati">
				<img src="<?php $sp_image= get_field('sp_image', 'options') ;echo esc_url($sp_image['url']); ?>" alt="Head Teacher" class="img-responsive img-thumbnail">
				<p>
					<?php echo get_field('sp_description', 'options') ?>
				</p>
			</div>
			
		  </div>
        </div>
        <div class="col-md-4">
         <div class="aside">
            <?php require_once('r-site-notic.php') ;?>
            <?php require_once('headmaster.php') ?>
			<?php require_once('right-site-celander.php');?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once('picture-patha.php');?>
<?php  get_footer(); ?>
