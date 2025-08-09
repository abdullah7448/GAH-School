<?php
if ($args["j"]) {
    $j = $args["j"];
} else {
    $j = 0;
}
?>
<?php get_header();?>

<a href="<?php echo get_post_type_archive_link( 'product' )  ?>"></a>
<!-- cooding for main content -->
<section id="main-content">
  <div class="container">
    <div class="row">
        <div class="col-md-8">
			<div class="contruct_as">
				<h2>যোগাযোগ</h2>
				<div class="row">
					<?php dynamic_sidebar('contracts_form'); ?>
					<div class="col-md-6">
						<div class="cont_address">
							<address>
								<img src="<?php $logo = get_sub_field('contact_logo','options'); echo $logo['url']  ?>" alt="logo" class="img-responsive">
                                <h4><?php echo get_sub_field('c_schl_name', 'options') ?></h4> <br>
								<p> <?php echo get_sub_field('c_address', 'options') ?></p><br>
                                
                                <a href="tel:01713724952"><?php  echo get_sub_field('c_phone', 'options') ?></a> <br>
                                <a href="mailto:gahsedubd@gmail.com"><?php  echo get_sub_field('c_email', 'options') ?></a>
							
							</address>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
          <div class="aside">
            <?php require_once get_template_directory() .'/r-site-notic.php';?>
            <?php require_once get_template_directory(). '/headmaster.php' ?>
		  </div>
          </div>
      </div>
		<div class="row">
			<div class="col-md-12">
				<div class="as_google_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114735.22007444118!2d88.40142483553933!3d26.017989413736878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xc8b8c6afee693f8e!2sBorder+Guards+Bangladesh!5e0!3m2!1sen!2sbd!4v1455517218810"  frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			
			</div>
		</div>
    </div>
  
</section>
<?php require_once get_template_directory() .'/picture-patha.php' ?>

<?php  get_footer(); ?>


