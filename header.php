<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
  <title><?php blog_info('Nico Moving'); ?> <?php wp_title(); ?></title>
  <link rel= "stylesheet" type= "text/css" href= "styles/styles2.css"/>
  <link rel= "stylesheet" type= "text/css" href= "styles/navstyles.css"/>
  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
  <link href="styles/jquery.bxslider.css" rel="stylesheet"/>
  <!-- jQuery library (served from Google) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
  <script src="js/jquery.bxslider.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.bxslider').bxSlider();
    });
  </script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id= "page">
    <div id= "header">
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h4><?php bloginfo('description'); ?></h4>
    </div>
    </div>
