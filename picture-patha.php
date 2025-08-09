<div id="picture-gallery">
	   <div class="container picture-gallery welcome-section">
		  <h2><span>ছবির পাতা</span></h2>
		  <div class="row">
			 <div class="col-md-12">
				 <div id="owl">
					<?php  
						$zia = new WP_Query(array(
							'post_type' => 'gahs_slider',
							'posts_per_page' => 10
						
						));
					
					?>
					<?php while($zia -> have_posts()) : $zia ->the_post(); ?>
				 
					  <div class="item"> <?php  the_post_thumbnail(); ?> </div> 
					  
					 <?php endwhile; ?>
					
					
				<!--	
				  <div class="item"><img src="img/gallary/1.jpg" alt="gallery"></div>
                  <div class="item"><img src="img/gallary/1.jpg" alt="gallery"></div>   -->
                  
				 </div>
			 </div>
		  </div>
	   </div>
	</div>