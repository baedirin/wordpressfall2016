<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
  <title><?php bloginfo('Nico Moving'); ?> <?php wp_title(); ?></title>
  <link rel= "stylesheet" type= "text/css" href= "style.css"/>
  <link href="jquery.bxslider.css" rel="stylesheet"/>
  <!-- jQuery library (served from Google) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js"></script>
<script>
  <script>
    $(document).ready(function(){
      $('.bxslider').bxSlider();
    });
  </script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id= "main-container">
    <div id= "page">
      <div id= "header">
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <h4><?php bloginfo('description'); ?></h4>
      </div>
    </div>
  </div>
