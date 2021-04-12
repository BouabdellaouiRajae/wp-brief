<?php


function thisismytheme_theme_support(){
    // image posts
    add_theme_support('post-thumbnails'); 
}
add_action('after_setup_theme','thisismytheme_theme_support');


function thisismytheme_register_styles(){
    wp_enqueue_style('thisismytheme-style', get_template_directory_uri(). "/style.css", array(),'1.0', 'all');
    wp_enqueue_style('thisismytheme-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(),'1.0', 'all');
    wp_enqueue_style('thisismytheme-icons', "https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css", array(),'1.0', 'all');

}
add_action('wp_enqueue_scripts','thisismytheme_register_styles');
?>


<?php
function thisismytheme_register_scripts(){
    wp_enqueue_script('thisismytheme-bootstrap', 'https://unpkg.com/scrollreveal', array(),'1.0', 'all');
    wp_enqueue_script('thisismytheme-js', get_template_directory_uri() ."/main.js", array(),true, 'all');
  

}
add_action('wp_enqueue_scripts','thisismytheme_register_scripts');




?>
