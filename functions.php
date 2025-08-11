<?php

function gahs_support_include() {
    load_theme_textdomain( "gahs" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
}
add_action( "after_setup_theme", "gahs_support_include" );

//include files
require_once "inc/acf_option.php";
require_once 'inc/custom-wp-login.php';

// dns preload font google
function gahs_dns_prefetch() { ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<?php }
// add_action("wp_head", "gahs_dns_prefetch", 0);


function gahs_style_and_script() {


    // Bootstrap CSS
    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',[],'6.5.2');
    wp_enqueue_style("jquery-css", get_template_directory_uri() . "/assets/css/jquery.fancybox.css", array(), "0.0.1");
    wp_enqueue_style("marque", get_template_directory_uri() . "/assets/css/marquee.css", array(), "0.0.1");
    wp_enqueue_style("mmenu-light", get_template_directory_uri() . "/assets/css/bootstrap.css", array(), "0.0.1");
	//wp_enqueue_style("font-awesome", get_template_directory_uri() . "/assets/css/font-awesome.css", array(), "0.0.1");
	wp_enqueue_style("gallary", get_template_directory_uri() . "/assets/css/gallary.css", array(), "0.0.1");
	wp_enqueue_style("gallary-theme", get_template_directory_uri() . "/assets/css/gallary-theme.css", array(), "0.0.1");
	wp_enqueue_style("normalize", get_template_directory_uri() . "/assets/css/normalize.css", array(), "0.0.1");
    wp_enqueue_style("gahs", get_stylesheet_uri(), array(), "0.0.3");



    	// Enqueue jQuery (WordPress includes it)
    //wp_enqueue_script('jquery');

    // Bootstrap JS
    //wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js', array('jquery'), '3.4.1', true);
    
    //wp_enqueue_script("slick-slider", get_template_directory_uri()."/assets/js/slick.min.js", array("jquery"), "0.0.1", true);
    //wp_enqueue_script("mmenu-light", get_template_directory_uri()."/assets/js/mmenu-light.js", array(), "0.0.1", true);
    //wp_enqueue_script("bootstrap-bundle", get_template_directory_uri()."/assets/js/bootstrap.bundle.min.js", array(), "0.0.1", true);
    wp_enqueue_script("jquery-asset", get_template_directory_uri()."/assets/js/jquery.js", array(), "0.0.1", true);
    wp_enqueue_script("bootstrap-min", get_template_directory_uri()."/assets/js/bootstrap.min.js", array(), "0.0.1", true);

    wp_enqueue_script("gallery-js", get_template_directory_uri()."/assets/js/gallary.js", array(), "0.0.1", true);
    wp_enqueue_script("gahs-main", get_template_directory_uri()."/assets/js/main.js", array("jquery"), "0.0.1", true);

	 
	
	
}
add_action("wp_enqueue_scripts", "gahs_style_and_script");


//require files
include_once('assets/metabox/meta-box.php');
include_once('assets/CMB2/init.php');
include_once('assets/zi_cl7/meta-box.php');
include_once('assets/zi_cl8/meta-box.php');
include_once('assets/zi_cl10/meta-box.php');
include_once('assets/zi_cl9/meta-box.php');
include_once('assets/former/meta-box.php');
include_once('assets/zi_old/meta-box.php');
include_once('assets/zi_ssc/meta-box.php');
include_once('assets/zi_js_r/meta-box.php');
include_once('assets/zi_cumi/meta-box.php');
include_once('assets/teacher_list/meta-box.php');
require_once('assets/wp_bootstrap_navwalker.php');

//add header menu
function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary' ),
            'footer_menu' => __( 'Footer Menu 1' ),
            'footer_secondary' => __( 'Footer Secondary' ),
        )
    );
}

//footer menu
add_action( 'after_setup_theme', 'register_my_menus' );

//prev function.php
function gahs_default_functions(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    
    //load_theme_textdomain('gahs', get_template_directory_uri. '/languages');
    /*slider code*/
    // Register Custom Navigation Walker
    //require_once('wp_bootstrap_navwalker.php');
    
    // add slider dynamic 
    register_post_type('notic_post',array(
    'labels' => array( 
    'name' => 'স্কুলের নোটিস যোগ করুন',
    'add_new_item' => __('Add New notic', 'gahs')
    ),
    'public' => true,
    
    'supports' => array('editor','title'),
    ));
    // add slider dynamic 
    
    register_post_type('gahs_slider',array(
    'labels' => array(
        'name' => 'ছবির পাতা','add_new_item' =>'কিছু গুরুত্বপূর্ন ছবি যোগ করুন '
    
    ),
    
    'public' =>true,
    'supports' => array('title', 'editor','thumbnail'),
    'has_archive' => true, // This enables archive URL
    ));
    // register_post_type('former',array(
    //     'labels' => array(
    //         'name' => 'প্রাক্তন ছাত্রছাত্রী তালিকা','add_new_item' =>'প্রাক্তন ছাত্রছাত্রীর ফিল্ড পুরুন করুন'
    //     ),
    //     'public' =>true,
    //     'supports' => array('thumbnail','title'),
    //     'has_archive' => true
    // )
    
    // );
    // footer_dynamic
    // register_post_type('f_1st_blog',array(
    // 'labels' => array(
    //     'name' => 'গুরুত্বপূর্ণ লিঙ্ক','add_new_item' =>'গুরুত্ব পুর্নলিঙ্ক সমূহ'
    
    // ),
    
    // 'public' =>true,
    // 'supports' => array('editor')
    // )
    
    // );
    // register_post_type('f_2st_blog ' ,array(
    //     'labels' => array(
    //         'name' => 'গুরুত্বপূর্ণ তথ্যসমূহ ','add_new_item' =>'গুরুত্বপূর্ণ তথ্যসমূহ  যোগ করুন ',
    //         'menu_icon'   => 'dashicons dashicons-admin-users',
    
    // ),
    
    //     'public' =>true,
    //     'supports' => array('editor')
    // )
    
    // );
    // footer_link
    // add student_info function
                // start cumuti page section
    // register_post_type('cumuti' ,array(
    //     'labels' => array(
    //         'name' => 'কমিটি তালিকা ','add_new_item' =>'কমিটির  তালিকা যোগ করুন  ',
    //         'menu_icon'   => 'dashicons dashicons-admin-users',
    
    // ),
    
    //     'public' =>true,
    //     'supports' => array('title','thumbnail')
    // )
    
    // );

    register_post_type('cumuti', array(
        'labels' => array(
            'name' => 'কমিটি তালিকা',
            'add_new_item' => 'কমিটির  তালিকা যোগ করুন',
            'menu_icon' => 'dashicons-admin-users',
        ),
        'public' => true,
        'has_archive' => true, // This enables archive URL
        'supports' => array('title', 'thumbnail'),
    ));

    register_post_type('js_ex_info',array(
        'labels' => array(
            'name' => 'জেএসির তথ্যসমূহ','add_new_item' =>'নিম্নে  ফিল্ড পূরুন করুন '
        
        ),
        
        'public' =>true,
        'supports' => array('title'),
        'has_archive' => true
    )
    
    );
     register_post_type('ssc_info',array(
        'labels' => array(
            'name' => 'এস এস সি  তথ্যসমূহ','add_new_item' =>'নিম্নে  ফিল্ড পূরুন করুন '
        
        ),
        
        'public' =>true,
        'supports' => array('title'),
        'has_archive' => true
    )
    
    );
     register_post_type('st_old',array(
        'labels' => array(
            'name' => 'পুরাতন ছাত্রছাত্রী','add_new_item' =>'পুরুতন ছাত্রছাত্রর ফিল্ড পুরুন করুন'
        ),
        'public' =>true,
        'supports' => array('thumbnail','title')
    )
    
    );
    // register_post_type('teacher_l',array(
    //     'labels' => array(
    //         'name' => 'টিচার তালিকা ','add_new_item' =>'শিক্ষকের তালিকা যোগ করুন'
    //     ),
    //     'public' =>true,
    //     'supports' => array('thumbnail','title')
    // )
    
    // );
    register_post_type('teacher_l', array(
        'labels' => array(
            'name' => 'টিচার তালিকা',
            'add_new_item' => 'শিক্ষকের তালিকা যোগ করুন',
        ),
        'public' => true,
        'has_archive' => true,  // Enable archive page
        'supports' => array('thumbnail', 'title'),
    ));
    
          
        
    }
    function read_more($limit){
        $post_content = explode(" ", get_the_content());
        $less_content= array_slice($post_content, 0, $limit);
        echo implode (" ", $less_content);
    }
    add_action('after_setup_theme','gahs_default_functions');



    function ziarul_widget_function() {
    	
        register_sidebar(array(
                'name' => __('contracts_form','gahs'), 
                'description' =>__('contracts_form','gahs'),
                'id' =>'marquee_notic',
                'before_widget' => '<div class="col-md-6">',
                'after_widget' => '</div> ',
                'before_title' => ' ',
                'after_title' => ' ',
            ));
            
        /*notic_board sitebar */
        }
  
        add_action('widgets_init','ziarul_widget_function');


// // Register Custom Post Type: Students
function register_students_post_type() {
    $labels = array(
        'name'                  => _x( 'ছাত্রছাত্রী তালিকা', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'ছাত্র/ছাত্রী', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'ছাত্রছাত্রী', 'textdomain' ),
        'name_admin_bar'        => __( 'ছাত্র/ছাত্রী', 'textdomain' ),
        'archives'              => __( 'ছাত্রছাত্রী আর্কাইভ', 'textdomain' ),
        'attributes'            => __( 'ছাত্রছাত্রীর বৈশিষ্ট্য', 'textdomain' ),
        'all_items'             => __( 'সকল ছাত্রছাত্রী', 'textdomain' ),
        'add_new_item'          => __( 'নতুন ছাত্র/ছাত্রী যুক্ত করুন', 'textdomain' ),
        'add_new'               => __( 'নতুন যুক্ত করুন', 'textdomain' ),
        'new_item'              => __( 'নতুন ছাত্র/ছাত্রী', 'textdomain' ),
        'edit_item'             => __( 'ছাত্র/ছাত্রী সম্পাদনা করুন', 'textdomain' ),
        'update_item'           => __( 'ছাত্র/ছাত্রী হালনাগাদ করুন', 'textdomain' ),
        'view_item'             => __( 'ছাত্র/ছাত্রী দেখুন', 'textdomain' ),
        'view_items'            => __( 'ছাত্রছাত্রী দেখুন', 'textdomain' ),
        'search_items'          => __( 'ছাত্র/ছাত্রী খুঁজুন', 'textdomain' ),
    );

    $args = array(
        'label'                 => __( 'ছাত্র/ছাত্রী', 'textdomain' ),
        'description'           => __( 'মাধ্যমিক বিদ্যালয়ের ছাত্রছাত্রী তালিকা', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array( 'slug' => 'students' ),
        'show_in_rest'          => true,
        'menu_icon'             => 'dashicons-welcome-learn-more',
    );

    register_post_type( 'students', $args );
}
add_action( 'init', 'register_students_post_type' );

// Register Custom Taxonomy: Class
function register_class_taxonomy() {
    $labels = array(
        'name'              => _x( 'শ্রেণীসমূহ', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'শ্রেণী', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'শ্রেণী অনুসন্ধান করুন', 'textdomain' ),
        'all_items'         => __( 'সকল শ্রেণী', 'textdomain' ),
        'parent_item'       => __( 'মূল শ্রেণী', 'textdomain' ),
        'parent_item_colon' => __( 'মূল শ্রেণী:', 'textdomain' ),
        'edit_item'         => __( 'শ্রেণী সম্পাদনা করুন', 'textdomain' ),
        'update_item'       => __( 'শ্রেণী হালনাগাদ করুন', 'textdomain' ),
        'add_new_item'      => __( 'নতুন শ্রেণী যুক্ত করুন', 'textdomain' ),
        'new_item_name'     => __( 'নতুন শ্রেণীর নাম', 'textdomain' ),
        'menu_name'         => __( 'শ্রেণী', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array( 'slug' => 'class' ),
        'show_in_rest'      => true,
    );

    register_taxonomy( 'class', array( 'students' ), $args );
}
add_action( 'init', 'register_class_taxonomy' );

// Register Custom Taxonomy: Class
// function register_class_taxonomy() {
//     $labels = array(
//         'name'              => _x( 'শ্রেণীসমূহ', 'taxonomy general name', 'textdomain' ),
//         'singular_name'     => _x( 'শ্রেণী', 'taxonomy singular name', 'textdomain' ),
//         'search_items'      => __( 'শ্রেণী অনুসন্ধান করুন', 'textdomain' ),
//         'all_items'         => __( 'সকল শ্রেণী', 'textdomain' ),
//         'parent_item'       => __( 'মূল শ্রেণী', 'textdomain' ),
//         'parent_item_colon' => __( 'মূল শ্রেণী:', 'textdomain' ),
//         'edit_item'         => __( 'শ্রেণী সম্পাদনা করুন', 'textdomain' ),
//         'update_item'       => __( 'শ্রেণী হালনাগাদ করুন', 'textdomain' ),
//         'add_new_item'      => __( 'নতুন শ্রেণী যুক্ত করুন', 'textdomain' ),
//         'new_item_name'     => __( 'নতুন শ্রেণীর নাম', 'textdomain' ),
//         'menu_name'         => __( 'শ্রেণী', 'textdomain' ),
//     );

//     $args = array(
//         'hierarchical'      => true,
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'rewrite'           => array( 'slug' => 'class' ),
//         'show_in_rest'      => true,
//     );

//     register_taxonomy( 'class', array( 'students' ), $args );
// }
// add_action( 'init', 'register_class_taxonomy' );


?>
