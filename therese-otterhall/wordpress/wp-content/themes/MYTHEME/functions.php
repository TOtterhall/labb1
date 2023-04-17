<?php
function to_menus() {
    $locations = array(
        "primary" => "Meny1",
        "footmenu" => "SocialMeny",
        'sekondary' => "undersidor"
    );
    register_nav_menus($locations);

}

add_action("init","to_menus");
add_theme_support("menus");


function to_footer_widgets() {
    // Define footer widget areas
    $footer_widgets = array(
        'footer_widget_1' => 'Footer Widget 1',
        'footer_widget_2' => 'Footer Widget 2',
        'footer_widget_3' => 'Footer Widget 3',
    );

    // Loop through footer widget areas and register them
    foreach ($footer_widgets as $widget_id => $widget_name) {
        register_sidebar(array(
            'id' => $widget_id,
            'name' => $widget_name,
            'description' => 'Widget area for the footer.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ));
    }
}

add_action('widgets_init', 'to_footer_widgets');
function to_footerwidgets(){

        register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',

        ) );
        register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',

        ) );
        register_sidebar( array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',

        ) );

    }

add_action('after_setup_theme', 'to_footerwidgets');



// add_filter('ett_filter', 'byt_bokstav_funktion');


//     function byt_bokstav_funktion( $texten ){


//     $text_byt = str_replace('t', '5', $texten);

//     return $text_byt;

//     }

// function registrera_meny(){

//     register_nav_menu('huvudmeny', 'Meny1');

//     register_nav_menu('socialmeny', 'SocialMeny');

//     }

// add_action('after_setup_theme', 'registrera_meny');

function to_theme_support(){
//Add dynamic title support
    add_theme_support("menus");
    add_theme_support("title-tag");
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support("sidebar");
    add_theme_support("widgets");

}

add_action("after_setup_theme","to_theme_support");


// function to_register_styles() {
//     $version = wp_get_theme()->get("version");
//     wp_enqueue_style("to-bootstrap", get_template_directory_uri(). '/assets/css/bootstrap.css',"3.3.7","all");
//     wp_enqueue_style("to-style", get_template_directory_uri(). '/style.css',array('to-bootstrap'), $version, "all");
//     wp_enqueue_style("to-fontawesome", get_template_directory_uri(). '/assets/css/font-awesome.css',array(),"4.6.3","all");
// }



// add_action("wp_enqueue_styles","to_register_styles");


// function to_register_scripts() {
//     wp_enqueue_script("to-script", get_template_directory_uri(). 'assets/js/script.js', array(),true);
//     wp_enqueue_script("to-jqeury", get_template_directory_uri(). 'assets/js/jquery.js', array(),true);
// }

// add_action("wp_enqueue_script","to_register_scripts");

function enqueue_theme_scripts() {

    wp_deregister_script('jquery');
    
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css', array('bootstrap-style'), '1.0', 'all' );
    
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0', 'all' );
    
    wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0', 'all' );
    
    wp_enqueue_script( 'theme-script', get_stylesheet_directory_uri() . 'assets/js/script.js', array('jquery'));
    
    }
    
    
    
    
    add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );

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