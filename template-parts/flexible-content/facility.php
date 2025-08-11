<?php
//  Title
$facility_title = get_sub_field('facility_title', 'options');
//  Image
$facility_image = get_sub_field('facility_image', 'options');
//  Description
$facility_description = get_sub_field('facility_description', 'options');
?>


<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="content">
        <div class="col-md-12">
          
			<div class="hestory welcome-section" >
			   <h2><span>
			   <?php
			   if (!empty($facility_title)) {
					echo  esc_html($facility_title);
				}?>
			   </span> </h2>
			   <?php
			   if (is_array($facility_image ) && isset($facility_image ['url'])) {
					echo '<img src="' . esc_url($facility_image ['url']) . '" alt="' .' class="img-thumbnail img-responsive"';
				} ?>
				
				<p>
				<?php
				if (!empty($facility_description )) {
						echo  wp_kses_post($facility_description ) ;
					}?>
				</p>
				
			</div>
            </div>
      </div>
    </div>
  </div>
</section>