<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <title><?php get_my_title_tag(); ?></title>
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="<?php bloginfo('styles.css'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>jquery.bxslider.css"></script>
<script src="js/jquery.bxslider.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.bxslider').bxSlider();
    });
  </script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
	$("#toggle").click(function() { // when toggle is clicked...
		$("#navigation").toggle(); // ... open or close the navigation
	});
  });
</script>
<?php wp_head(); ?>
<!-- End WP Head -->

</head>
<body <?php body_class();?>>

<!-- Begin Header -->
<div id="header">
<h1 id="logo"><a href="http://www.web170.premiumdw.com/wordpress/">Mike Sinkula</a></h1>
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" width="25" height="25" alt="Toggle Menu">
</div>
<!-- End Header -->

<!-- Begin Navigation -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
<!-- End Navigation -->

<!-- Begin Content -->
<div id="middle">
