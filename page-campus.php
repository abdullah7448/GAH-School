<?php get_header(); ?>
<?php 
		/*
			Template Name:about(campus)
		*/
//  Title
$science_lab_title = get_field('sc_lab_title');
$organization_title = get_field('org_title');
//  Image
$science_lab_image = get_field('sc_lab_image');
$organization_image = get_field('org_image');
//  Description
$science_lab_description = get_field('sc_lab_desc');
$organization_description = get_field('org_desc');
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
			   if (!empty($science_lab_title)) {
					echo  esc_html($science_lab_title);
				}?>
               </span> </h2>
			   
               <?php
			   if (is_array($science_lab_image) && isset($science_lab_image['url'])) {
					echo '<img src="' . esc_url($science_lab_image['url']) . '" alt="' .' class="img-thumbnail img-responsive"';
				} ?>
				<p>
                <?php
				if (!empty($science_lab_description)) {
						echo  wp_kses_post($science_lab_description) ;
					}?>
                </p>
				
			</div>
			<div class="hestory welcome-section">
			   <h2><span>
               <?php
			   if (!empty($organization_title)) {
					echo  esc_html($organization_title);
				}?>
               </span> </h2>  
               <?php
			   if (is_array($organization_image) && isset($organization_image['url'])) {
					echo '<img src="' . esc_url($organization_image['url']) . '" alt="' .' class="img-thumbnail img-responsive"';
				} ?>
			<p>
            <?php
				if (!empty($organization_description)) {
						echo  wp_kses_post($organization_description) ;
					}?>
            </p>
				
			</div>	
		</div>
      </div>
    </div>
  </div>
</section>
<?php require_once('picture-patha.php');?>
<?php  get_footer(); ?>


