<?php
add_theme_support("menus");




function registrera_meny(){

    register_nav_menu('huvudmeny', 'Meny1');
    
    register_nav_menu('socialmeny', 'SocialMeny');
    
    }

    add_action('after_setup_theme', 'registrera_meny');
function to_theme_support(){
//Add dynamic title support
    add_theme_support("title-tag");
}

add_action("after_setup_theme","to_theme_support");


function to_register_styles() {
    $version = wp_get_theme()->get("version");
    wp_enqueue_style("to-style", get_template_directory_uri()."/style.css",array("to-bootstrap"), $version, "all");
    wp_enqueue_style("to-bootstrap", get_template_directory_uri()."theme-template/css/bootstrap.css",array(),"1.0");
    wp_enqueue_style("to-fontawesome", get_template_directory_uri()."theme-template/css/font-awesome.css",array(),"1.0");
}

add_action("wp_enqueue","to_register_styles");


function to_register_scripts() {
    wp_enqueue_script("to-script", get_template_directory_uri()."assets/js/script.js", array(),true);
    wp_enqueue_script("to-jqeury", get_template_directory_uri()."assets/js/jquery.js", array(),true);
}   

add_action("wp_enqueue_script","to_register_scripts");

// add_theme_support("menus");

// add_action('after_setup_theme', 'registrera_meny');


// function registrera_meny(){

//     register_nav_menu('huvudmeny', 'Meny1');
    
//     register_nav_menu('socialmeny', 'SocialMeny');
    
//     }


// function load_styles() {
//     wp_enqueue_style("bootstrap",get_template_directory_uri()."/css/bootstrap.css",array(),false,"all");
//     wp_enqueue_style("fonts",get_template_directory_uri()."/css/font-awesome.css", array(),false,"all");
//     wp_enqueue_style("fonts",get_template_directory_uri()."/css/main.css", array(),false,"all");
// }
    
//     add_action('wp_enque_scripts', 'load_styles');


// function load_scripts() {
//     wp_deregister_script("jquery");
//     wp_register("jquery",get_stylesheet_directory_uri()."js/jquery.js");
//     wp_enqueue_script("jquery");

//     wp_register_script("custom-scripts",get_stylesheet_directory_uri()."/js/script.js");
//     wp_enqueue_script("custom-scripts");
// }

// add_action('wp_enque_scripts', 'load_scripts');


// // add_action('henrik_info','info_function');

// // function info_function(){
// //     echo"En ny banan";
// //     }

    
// // function mina_script() {
// //     wp_enqueue_style('main',get_template_directory_uri().'/style.css');
// //     wp_enqueue_style('main',get_template_directory_uri().'css/style.css');
// //     wp_enqueue_style('scripts',get_template_directory_uri().'front/script.js',array('jquery'));
// // }

?>