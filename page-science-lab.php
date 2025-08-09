<?php get_header(); ?>
<?php 
		/*
			Template Name:science
		*/
//  Title
$physics_lab_title = get_field('physics_title');
$chemistry_lab_title = get_field('chemistry_title');
$biology_lab_title = get_field('biology_title');
//  Image
$physicsr_lab_image = get_field('physics_image');
$chemistry_lab_image = get_field('chemistry_image');
$biology_lab_image = get_field('biology_image');
//  Description
$physics_lab_description = get_field('physics_description');
$chemistryr_lab_description = get_field('chemistry_description');
$biology_lab_description = get_field('biology_description');
 ?>
<!-- cooding for main content -->
<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="content">
        <div class="col-md-12">
          
			<div class="hestory welcome-section" >
			   <h2><span>
			   <?php
			   if (!empty($physics_lab_title)) {
					echo  esc_html($physics_lab_title);
				}?>
			   </span> </h2>
			   <?php
			   if (is_array($physicsr_lab_image) && isset($physicsr_lab_image['url'])) {
					echo '<img src="' . esc_url($physicsr_lab_image['url']) . '" alt="' .' class="img-thumbnail img-responsive"';
				} ?>
				
				<p>
				<?php
				if (!empty($physics_lab_description)) {
						echo  wp_kses_post($physics_lab_description) ;
					}?>
				</p>
				
			</div>
			
			<div class="hestory welcome-section" >
			   <h2><span>
			   <?php
			   if (!empty($chemistry_lab_title )) {
					echo  esc_html($chemistry_lab_title );
				}?>
			   </span> </h2>
			   
			   <?php
			   if (is_array($chemistry_lab_image) && isset($chemistry_lab_image['url'])) {
					echo '<img src="' . esc_url($chemistry_lab_image['url']) . '" alt="' .' class="img-thumbnail img-responsive"';
				} ?>
				
				<p>
				<?php
				if (!empty($chemistryr_lab_description )) {
						echo  wp_kses_post($chemistryr_lab_description ) ;
					}?>
				</p>
				
			</div>
			<div class="hestory welcome-section" >
			   <h2><span>
			   <?php
			   if (!empty($biology_lab_title)) {
					echo  esc_html($biology_lab_title);
				}?>
			   </span> </h2>
			   
			   <?php
			   if (is_array($biology_lab_image ) && isset($biology_lab_image ['url'])) {
					echo '<img src="' . esc_url($biology_lab_image ['url']) . '" alt="' .' class="img-thumbnail img-responsive"';
				} ?>
				
				<p>
				<?php
				if (!empty($biology_lab_description)) {
						echo  wp_kses_post($biology_lab_description) ;
					}?>
				</p>
				
			</div>
			
		</div>
      </div>
    </div>
  </div>
</section>

<?php  get_footer(); ?>


