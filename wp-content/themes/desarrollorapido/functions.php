<?php
    require_once('wp-bootstrap-navwalker.php');

  function load_assets( ){

  wp_enqueue_style( 'nav', 'https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/slate/bootstrap.min.css');
  wp_enqueue_style( 'fuente', 'https://fonts.googleapis.com/css?family=Slabo+27px' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_script('js', 'https://code.jquery.com/jquery-3.1.1.slim.min.js');
  wp_enqueue_script( 'cloudflare', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js' );
  wp_enqueue_script( 'maxcdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js' );

  }

  add_action('wp_enqueue_scripts', 'load_assets');

  register_nav_menus( array (
  'primary'=> __( 'Primary Menu' )
) );

add_theme_support('post-thumbnails' );

 ?>
