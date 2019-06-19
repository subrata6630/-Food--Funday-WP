 <? php

function add_theme_scripts() {
    
    wp_enqueue_style ('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(),'1.0.0','all');
    wp_enqueue_style ('responsive', get_template_directory_uri() . '/css/responsive.css', array(),'1.0.0','all');
    wp_enqueue_style ('colors', get_template_directory_uri() . '/css/colors/orange.css', array(),'1.0.0','all');
    wp_enqueue_style ('style', get_template_directory_uri() . 'style.css', array(),'1.0.0','all');
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');
   
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array (), 1.1, true);
    wp_enqueue_script ('modernizer', get_template_directory_uri() . '/js/modernizer.js', array(),'version','true');
    wp_enqueue_script ('all', get_template_directory_uri() . '/js/all.js', array(),'version','true');
    wp_enqueue_script ('custom', get_template_directory_uri() . '/js/custom.js', array(),'version','true');
    wp_enqueue_script ('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(),'version','true');
   
   
  }
   add_action( 'wp_enqueue_scripts', 'add_theme_scripts' ); 
