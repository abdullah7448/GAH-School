<?php get_header(); ?>
<?php 
		/*
			Template Name:computer
		*/
//  Title
$computer_lab_title = get_field('c_lab_title');
//  Image
$computer_lab_image = get_field('c_lab_image');
//  Description
$computer_lab_description = get_field('c_lab_description');
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
			   if (!empty($computer_lab_title)) {
					echo  esc_html($computer_lab_title);
				}?>
			   </span> </h2>
			   <?php
			   if (is_array($computer_lab_image) && isset($computer_lab_image['url'])) {
					echo '<img src="' . esc_url($computer_lab_image['url']) . '" alt="' .' class="img-thumbnail img-responsive"';
				} ?>
			   
				<img src="<?php // echo $gahs['computer_picture']['url'];  ?>" alt="" class="img-thumbnail img-responsive" >
				
				<p>
				<?php
				if (!empty($computer_lab_description)) {
						echo  wp_kses_post($computer_lab_description) ;
					}?>
				</p>
				
			</div>
			
		</div>
      </div>
    </div>
  </div>
</section>

<?php  get_footer(); ?>


