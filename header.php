<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo('description');?>">
<meta name="author" content="www.dusrasoft.com">
<?php wp_head();?>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
<body>
<!-- cooding start for header-->
<header id="header">
  <div class="container clerfix">
    <div class="col-md-6">
      <div class="header-content-left "> 
      <?php
      $logo = get_field('site_logo', 'options'); 

      ?>
		<a href="<?php echo site_url(); ?>"><img src="<?php echo esc_url($logo['url']); ?>" alt="logo" width="120px"></a>
        <h2><?php echo get_field('logo_title1', 'options') ?></h2>
        <h3><?php echo get_field('logo_title2', 'options') ?></h3>
			<div class="clr"></div>
      </div>
    </div>

       <div class="col-md-3">
	 
	</div>
	<div class="col-md-3">
		<div class="top_right pull-right">
			<div class="as_social text-right">
        <?php while (have_rows('social_field', 'options')): the_row(); 
            $icon = get_sub_field('social_icon');
            $link = get_sub_field('social_link'); 
            ?>
                    <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener">
                        <?php echo $icon?>
                    </a>
        <?php endwhile; ?>

			</div>
			<div class="as_search">
				<form action="<?php esc_url(bloginfo('home'));?>" method="GET" class="text-right"> 
					<input type="text" name="s" placeholder="GAHS Search" class="form-control" id="as_input">
					<button type="submit" class="btn" id="as_button">Search</button>
				</form>
			</div>
		</div>
	</div>
  </div>
  <!-- cooding start for menu-->
  <div id="main-nav">
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
		<!-- Collect the nav links, forms, and other content for toggling -->
		<?php wp_nav_menu(array("theme_location" => "primary",'menu' => 'main_menu','depth'=> 2,'container' => 'div','container_class' => 'collapse navbar-collapse','container_id' => 'bs-example-navbar-collapse-1','items_wrap'=> '<ul class="nav navbar-nav" id="navigation">%3$s</ul>','fallback_cb'=> 'wp_bootstrap_navwalker::fallback',
		'walker'=> new wp_bootstrap_navwalker()));
		//'walker'=> new wp_bootstrap_navwalker()
		?>
		
        
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>
  <!-- cooding end-->
  <!-- cooding statr for main content body-->
  
  
<div class="news">
	<div class="container news_inner">
		<span>সংবাদ </span>
		<p>					
			<marquee id='scroll_news'><div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();"><?php 
        while (have_rows('our_top_news', 'options')): the_row();
         echo $news_title = get_sub_field('news_title'); 
        endwhile;
      ?></div></marquee>
		</p>
	</div>
</div>

</header>
