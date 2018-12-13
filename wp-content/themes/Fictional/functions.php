<?php 
function load_styles(){
    wp_enqueue_style( 'twentyfifteen-ie7',get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}


function load_scripts(){
    wp_enqueue_script( 'bootstrap_js', get_theme_file_uri('/js/scripts-bundled.js'), null, '1.0', true);
}

add_action('wp_enqueue_scripts','load_styles');
add_action('wp_enqueue_scripts','load_scripts');

function fictional_features(){
    add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'fictional_features');
?>