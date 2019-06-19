
<?php 



/* navigation menu */

register_nav_menus(array(
  'primary'=>__('Primary Menu'),
  'footer'=>__('Footer Menu'),
));


/* Set up WordPress logo feature */

add_theme_support( 'custom-logo', array(
  'width'       => 640,
  'height'      => 360,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
    ) );


   

    


?>