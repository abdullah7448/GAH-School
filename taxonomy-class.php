<?php get_header(); ?>

<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="left_site Teacher_gal">
          <h2 class="before_after">
            <?php single_term_title(); ?>
          </h2>

          <?php  
            $posts_per_page = get_option('posts_per_page');

            $args = array(
              'post_type' => 'students', // Change if needed
              'posts_per_page' => $posts_per_page,
              'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'class',
                  'field' => 'slug',
                  'terms' => get_queried_object()->slug,
                ),
              ),
            );

            $zia = new WP_Query($args);
          ?>

          <?php if ($zia->have_posts()) : ?>
            <?php while ($zia->have_posts()) : $zia->the_post(); ?>
              <div class="col-md-3 col-sm-6">
                <div class="student_picture">
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('full'); // or use a size like 'thumbnail', 'medium', etc.
                    } else {
                        // URL to your placeholder image
                       $placeholder_url = get_template_directory_uri() . '/assets/img/place-holder-image.png'; 
                       echo '<img src="' . esc_url($placeholder_url) . '" alt="Placeholder Image" />';
                    }
                    $student_name= get_field('s_name');
                    $student_roll= get_field('s_roll');
                    $student_section= get_field('s_section');
                    $student_gender= get_field('s_gender');
                    $student_session= get_field('s_session');

                    if($student_name || $student_roll || $student_section || $student_gender || $student_session){
                        echo ' <h3>নাম :' .$student_name .'</h3>';
                        echo '  <p>রোল :' .$student_roll. '</p>';
                        echo '  <p>রোল :' . $student_section. '</p>';
                        echo '  <p>রোল :' .$student_gender. '</p>';
                        echo '  <p>রোল :' .$student_session. '</p>';
                    }

                    // if($stdent_name ){
                    //     echo ' <h3>নাম :' .$student_name .'</h3>';
                    // }
                    // if( $student_roll ){
                    //    echo '  <p>রোল :' .$student_roll. '</p>';
                    // }
                    // if( $student_section){
                    //     echo '  <p>রোল :' . $student_section. '</p>';
                    //  }
                    //  if($student_gender){
                    //     echo '  <p>রোল :' .$student_gender. '</p>';
                    //  }
                    //  if($student_session){
                    //     echo '  <p>রোল :' .$student_session. '</p>';
                    //  }
                    ?>
                  
                  
                  
                </div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <p>কোনো ছাত্রছাত্রী পাওয়া যায়নি।</p>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-12">
        <div class="page_nav">
          <div class="inner">
            <div class="page_nav">
              <?php 
                $temp_query = $wp_query;
                $wp_query   = NULL;
                $wp_query   = $zia;

                if (function_exists('my_pagination')) {
                  my_pagination(); 
                } else {
                  the_posts_pagination();
                }

                $wp_query = NULL;
                $wp_query = $temp_query;
                wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
