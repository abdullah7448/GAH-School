<!-- cooding for main content end-->



<div id="footer">
   <div class="container">
      <div class="row">
        <div class="footer-content">            
            <div class="col-md-3 footer-link">
				  <div class="facebook_content">
					<h2>Facebook</h2>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGilabariAdarshaHighSchool&tabs=timeline&width=275&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="270" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					<div class="clr"></div>
				  </div>
            </div>            
            <div class="col-md-3 footer-link">
               <h2>গুরুত্বপূর্ণ লিঙ্ক</h2>
               <?php
                  wp_nav_menu(array(
                     'theme_location' => 'footer_menu',
                     'container'      => 'nav',
                     'container_class'=> 'footer-navigation',
                     'menu_class'     => 'footer-menu',
                  ));
                  ?>
				 
            </div>
			<div class="col-md-3 footer-link">
               <h2>গুরুত্বপূর্ণ তথ্যসমূহ </h2>
               <?php
                  wp_nav_menu(array(
                     'theme_location' => 'footer_secondary',
                     'container'      => 'nav',
                     'container_class'=> 'footer-navigation',
                     'menu_class'     => 'footer-menu',
                  ));
                  ?>
            </div>
            <div class="col-md-3 footer-link">
                <address class="address" style="overflow:hidden">
					
                   <h2> গিলাবাড়ী আদর্শ উচ্চ বিদ্যালয়</h2>
                   <a style="display:block" href="<?php echo site_url(); ?>"><img src="<?php $_logo = get_field('fooer_logo', 'options');  echo esc_url($_logo['url']); ?>" alt="logo" width="120px"></a>
                     <p><?php echo get_field('f_address','options') ?></p>
					     <abbr>Phone : </abbr> <a href="tel:01713724952"><?php echo get_field('f_phone', 'options') ?></a><br>
                      <abbr>Email : </abbr> <a href="mailto:gahsedubd@gmail.com"><?php echo get_field('f_email', 'options') ?></a>
                      
               </address>
            </div>
        </div>
      </div>
   </div>
</div>
<footer class="footer_bottom">
	<div class="container">
		<div class="clerfix">
			<div class="col-xs-6">
				<div class="ft_left">
					<p>&copy; 2016. All rights reserved.</p>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="ft_right"><p class="text-right">Developed By <a href="http://dusrasoft.com/" target="_blank">DUSRA Soft</a></p></div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>