<?php 

add_theme_support( 'menus' );

function superliminal_register_theme_menus() {

    register_nav_menus(

        array(
            'bootstrap-menu' => __('Bootstrap Menu'),
        )
        // add more here

    );
}

add_action( 'init', 'superliminal_register_theme_menus');

function superliminal_theme_scripts() {

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css');

    wp_enqueue_script( 'flip.min.js', get_template_directory_uri() . '/js/flip.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'typeit.min.js', get_template_directory_uri() . '/js/typeit.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'extra.js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
    wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
}

add_action( 'wp_enqueue_scripts', 'superliminal_theme_scripts');

?>