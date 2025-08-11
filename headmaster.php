<?php
$hs_title=get_field('hs_title', 'options');
$hs_image= get_field('head_teacher_image', 'options') ;
$hs_description= get_field('hs_description', 'options');
if($hs_title && $hs_image && $hs_description){
    echo '<div class="notice">
        <h2><span>' . $hs_title . '</span></h2>
        <div class="teacher-section">
            <div class="tea_photo">
                <img src="' . esc_url($hs_image['url']) . '" alt="Head Teacher" class="img-responsive">
            </div>
            <p>' . $hs_description . '</p>
            <a href="#" class="as_more">More <i class="fa fa-angle-double-right"></i></a>
        </div>
    </div>';
}
?>

