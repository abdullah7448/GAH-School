<div class="notice">
    <h2><span><?php  echo get_field('hs_title', 'options')?></span></h2>
<div class="teacher-section">
    <div class="tea_photo">
        <img src="<?php $hs_image= get_field('head_teacher_image', 'options') ;echo esc_url($hs_image['url']); ?>" alt="Head Teacher" class="img-responsive">
    </div>
    <p>
        <?php echo get_field('hs_description', 'options')?>
    </p>
    <a href="#" class="as_more">More <i class="fa fa-angle-double-right"></i></a>
</div>
</div>