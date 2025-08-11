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
					<?php
                  $_logo = get_field('fooer_logo', 'options'); 
                  $_phone =get_field('f_phone', 'options');
                  $_email= get_field('f_email', 'options');
                  $_address= get_field('f_address','options') ;
               if($_logo){
                  echo '<a style="display:block" href="' . esc_url( site_url() ) . '">
                  <img src="' . esc_url( $_logo['url'] ) . '" alt="logo" width="120px">
                  </a>';
               }
               if($_address){
                  echo '<p>' . esc_html( $_address ) . '</p>';
               }
               if($_phone){
                  echo '<abbr>Phone : </abbr> <a href="tel:' . esc_attr( $_phone ) . '">' . esc_html( $_phone ) . '</a><br>';
               }
               if($_email){
                  echo '<abbr>Email : </abbr> <a href="mailto:' . esc_attr( $_email ) . '">' . esc_html( $_email ) . '</a>';
               }
               ?>   
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
				<div class="ft_right"><p class="text-right">Developed By <a href="https://dusrasoft.com/" target="_blank">DUSRA Soft Ltd.</a></p></div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>