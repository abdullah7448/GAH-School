<?php
// custom admin login logo
function gahs_custom_login() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/assets/images/siteLogo.png) !important; -webkit-background-size: 100% auto !important;	background-size: contain !important;; width:300px !important; height:100px !important; margin-bottom:10px !important;}
	</style>';
}
add_action('login_head', 'gahs_custom_login');

function gahs_the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'gahs_the_url' );
?>