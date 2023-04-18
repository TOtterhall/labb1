<?php

function to_theme_support(){
    //Lägger till dynamisk support
        add_theme_support("menus");
        add_theme_support("title-tag");
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
        add_theme_support("sidebar");
        add_theme_support("widgets");
    
    }
    
    add_action("after_setup_theme","to_theme_support");

// Definerar mina menyer
function to_menus() {
    $locations = array(
        "primary" => "Meny1",
        "footmenu" => "'footer_area_four'",
        'sekondary' => "undersidor",
        'sidebar' => "sidebar",
  
    );
    register_nav_menus($locations);

}

add_action("init","to_menus");



function to_footer_widgets() {
    // Definerar mina footer widgets
    $footer_widgets = array(
        'footer_widget_1' => 'Footer Widget 1',
        'footer_widget_2' => 'Footer Widget 2',
        'footer_widget_3' => 'Footer Widget 3',
    );

    // Loopar igenom footer widgets och registrerar de
    foreach ($footer_widgets as $widget_id => $widget_name) {
        register_sidebar(array(
            'id' => $widget_id,
            'name' => $widget_name,
            'description' => 'Widget area for the footer.',
            'before_widget' => '<div  class="widget ">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
    }
}

add_action('widgets_init', 'to_footer_widgets');

// function för mina widgets i sidebaren
function to_widgets_init()
{
    //registrerar sidebaren
    register_sidebar(
        array(
            'name' => __('Aside Area Two', 'custom-theme'),
            'id' => 'aside_area_two',
        )
    );

    register_sidebar(
        array(
            'name' => __('Aside Area Three', 'custom-theme'),
            'id' => 'aside_area_three',
        )
    );

    register_sidebar(
        array(
            'name' => __('Aside Area Four', 'custom-theme'),
            'id' => 'aside_area_four',
        )
    );

}

add_action('widgets_init', 'to_widgets_init');







// kör in script och styles
function enqueue_theme_scripts() {

    
    
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css', array('bootstrap-style'), '1.0', 'all' );
    
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0', 'all' );
    
    wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0', 'all' );
    wp_enqueue_script( 'to-script', get_template_directory_uri() . '/assets/js/jquery.js', array(), 'v3.1.0', true);
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
    
    
    }
    
    
    
    
    add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );



?>