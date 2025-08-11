<?php
$theme_dir = get_template_directory_uri();
if( have_rows('easy_content')){
    $j=1;
    while ( have_rows('easy_content')) : the_row();
        // contact
        if( get_row_layout() == 'contact_sec' ):
            get_template_part( "template-parts/flexible-content/contact",
                null, array(
                    'j' => $j,
                )
            );
     endif;

        if( get_row_layout() == 'facility' ):
            get_template_part( "template-parts/flexible-content/facility",
                null, array(
                    'j' => $j,
                )
            );
        endif;
        if( get_row_layout() == 'slider_bottom' ):
            get_template_part( "template-parts/flexible-content/slider-footer",
                null, array(
                    'j' => $j,
                )
            );
        endif;

        if( get_row_layout() == 'comming_soon' ):
            get_template_part( "template-parts/flexible-content/comming-soon",
                null, array(
                    'j' => $j,
                )
            );
        endif;
        
        $j++;
    endwhile;
}else{
    echo '<section class="defualtSection">
    <div class="container">';
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    echo '</div></section>';
}
