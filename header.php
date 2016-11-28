<!DOCTYPE html>
<!--Begin Head Tag-->
<head>
<!--Title Tag-->
<title><?php get_my_title_tag(); ?></title>
<!--End Title Tag-->

<!--Meta Tags-->
<meta name= "description" content= "<?php echo strip_tags(get_the_excerpt()); ?>"/>
<meta name= "viewport" content= "user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!--End Meta Tags-->

<!--Stylesheets-->
<link rel= "stylesheet" href= "<?php bloginfo('stylesheet_url'); ?>" type= "text/css" media= "all"/>
<link rel= "stylesheet" href= "<?php bloginfo('template_directory'); ?>/jquery.bxslider.css" type= "text/css" media= "all"/>

<!--End Stylesheets-->

<!--Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>

<!--End Scripts-->

<!--WP Head-->
<?php wp_head(); ?>
<!--End WP Head-->

</head>
<!--End Head Tag-->

<!--Begin Body Tag-->
<body <?php body_class(); ?>>

<!--Begin Header Tag-->
  <header>
    <div id= "header">
      <a href= "<?php echo get_option('home') ?>">"<img src= "<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
    </div>
  </header>
<!--End Header Tag-->
  <nav id= "top-nav">
    <?php wp_nav_menu($mainMenu); ?>
  </nav>
<!--Begin Top Nav-->

<!--End Top Nav-->

<!--Begin Main Section-->
  <div id= "middle">
