<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajouter bootstrap 
function add_theme_scripts() {
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . 'https://code.jquery.com/jquery-3.5.1.slim.min.js');
    wp_enqueue_script( 'js', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
    
    wp_enqueue_style( 'style', get_stylesheet_uri("style.css") );
    wp_enqueue_style('bootstrapcss' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'); 

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );