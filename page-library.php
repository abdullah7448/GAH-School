<?php get_header(); ?>
<?php 
		/*
			Template Name:laibrary
		*/
// Library Title
$library_title = get_field('library_title');
// Library Image
$library_image = get_field('library_image');
// Library Description
$library_description = get_field('library_description');

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
			   if (!empty($library_title)) {
					echo  esc_html($library_title);
				}?>
			   </span> </h2>
			   <?php
			   if (is_array($library_image) && isset($library_image['url'])) {
					echo '<img src="' . esc_url($library_image['url']) . '" alt="' . esc_attr($library_title) . ' class="img-thumbnail img-responsive"';
				} ?>
						<!-- <img src="<?php  //echo $gahs['laibari_picture']['url'];  ?>" alt=""  > -->
				
				<p>
					<?php
				if (!empty($library_description)) {
						echo  wp_kses_post($library_description) ;
					}?>
				</p>
				
			</div>
			
		</div>
      </div>
    </div>
  </div>
  
</section>

<?php  get_footer(); ?>


