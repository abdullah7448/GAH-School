<?php get_header(); ?>
<?php 
		/*
			Template Name:about
		*/
 ?>
<!-- cooding for main content -->
<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="content">
        <div class="col-md-12">
          
			<div class="hestory welcome-section" >
			   <h2><span><?php //global $gahs; echo $gahs['since_leb_title']; ?></span> </h2>
			   
				<img src="<?php // echo $gahs['since_picture']['url'];  ?>" alt="" class="img-thumbnail img-responsive" >
				
				<p><?php //echo $gahs['since_tex']?></p>
				
			</div>
			<div class="hestory welcome-section">
			   <h2><span><?php //global $gahs; echo $gahs['Organogram']; ?></span> </h2>  
			<img src="<?php // echo $gahs['Organogram_picture']['url'];  ?>" alt="" class="img-thumbnail img-responsive" >
			<p><?php //echo $gahs['Organogram_tex']; ?></p>
				
			</div>	
		</div>
      </div>
    </div>
  </div>
</section>
<?php require_once('picture-patha.php');?>
<?php  get_footer(); ?>


