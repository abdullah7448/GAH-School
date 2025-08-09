<div class="notice">
              <h2><span>নোটিশ বোর্ড</span></h2>
			  
				
				<!-- <marquee behavior="scroll" direction="up" scrollamount="5" style="width:100%; height:fit-content; vertical-align:middle; cursor:pointer;" onmouseover="javascript:this.setAttribute('scrollamount','0');" onmouseout="javascript:this.setAttribute('scrollamount','5');"> -->
				<marquee id="scroll_news2" direction="up" style="width:100%; height:fit-content; vertical-align:middle; cursor:pointer;"><div onmouseover="document.getElementById('scroll_news2').stop();" onmouseout="document.getElementById('scroll_news2').start();">
					
					<?php  
						$zia = new WP_Query(array(
							'post_type' => 'notic_post',
							'posts_per_page' => 4
						
						));
					
					?>
					<?php while($zia -> have_posts()) : $zia ->the_post(); ?>
						
					 <div class="date">
						<span class="top">
							
							<?php the_time('d'); ?>


						</span>
						<span class="bottom"><?php the_time('M'); ?></span>
					</div>
					  <div class="content_notice">
						<p><a href="<?php the_permalink(); ?>"><?php read_more(7);  ?></a>
							
						
						</p>
						
					</div>
					
					
					
					 <?php endwhile; ?>
					 <?php wp_reset_query(); ?>
					 
				
				</marquee>
   
			           
            </div>