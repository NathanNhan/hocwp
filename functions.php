<?php 
//Load css bootstrap
 function load_bootstrap_css () {
    //Xử lý code
    //Bước 1: Khởi tạo 1 cái link css 
    // wp_register_style( "bootstrap_css", get_template_directory_uri() . '/css/bootstrap.min.css' ,array(), "1.3", "all" );
    // //Bước 2: Nhúng vào thẻ head
    // wp_enqueue_script( "bootstrap_css", get_template_directory_uri() . '/css/bootstrap.min.css', array(), "1.3", false );
    wp_enqueue_style( "bootstrap_css", get_template_directory_uri() . '/css/bootstrap.min.css' ,array(), "1.3", "all" );

 }
 add_action( "wp_enqueue_scripts", "load_bootstrap_css" );




//Load js boots
 function load_bootstrap_js () {
    wp_enqueue_script( "bootstrap_js", get_template_directory_uri() . '/js/bootstrap.min.js', "jquery", "1.0.3", true );
 }

 add_action("wp_enqueue_scripts","load_bootstrap_js")


?>