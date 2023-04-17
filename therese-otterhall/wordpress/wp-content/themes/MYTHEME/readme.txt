

_____________>
<?php

// aktiverar menystöd för temat.

add_theme_support("menu");




add_action('after_setup_theme', 'to_register_menus');




//

function to_register_menus()

{

//registrerar de olika nav menyerna i temat.

register_nav_menus(

array(

'primary' => __('Primary Menu', 'Meny1'),

'footer' => __('Footer Menu', 'Social'),

'sideMenu' => __('Side Menu', 'Sidebar')

)

);

}




function theme_support()

{

// lägger till stöd för titel-taggar, anpassade logotyper och utvalda inläggsbilder.

add_theme_support('title-tag');

add_theme_support('custom-logo');

add_theme_support('post-thumbnails');

}




add_action('after_setup_theme', 'theme_support');

function to_footerwidgets(){

    register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 2',
    'id' => 'footer-sidebar-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 3',
    'id' => 'footer-sidebar-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

}

add_action('after_setup_theme', 'to_footerwidgets');

//add's dynamic title tag support

// /*****/

add_action('henrik_info', 'info_funktion');




function info_funktion()

{
 echo "Ny Wordpress Version Ute";

}




function to_register_styles()

{

//registrerar och laddar stilark (CSS) för temat.

$version = wp_get_theme()->get('Version');




wp_enqueue_style('to-cssstyle', get_template_directory_uri() . "./style.css", array('to-bootstrap'), $version, "all");

wp_enqueue_style(

'to-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.css",

array(),

"3.3.7",

"all"

);

wp_enqueue_style(

'to-fontawesome', get_template_directory_uri() . "/assets/css/font-awesome.css",

array(),

"4.6.3",

"all"

);

}





add_action('wp_enqueue_scripts', 'to_register_styles');





function to_register_scripts()

{
    wp_deregister_script('jquery');
//registrerar och laddar JavaScript-filer för temat.

wp_enqueue_script('to-jquery', get_template_directory_uri() . "/assets/js/jquery.js", array(), '3.1.0', true);

wp_enqueue_script('to-js', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

}







?>