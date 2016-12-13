<?php get_header(); ?>
<?php get_sidebar(); ?>
<!--Begin Main Content-->
<div id= "content">
  <!--Begin WP Loop-->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php the_content(''); ?>
<!--End WP Loop-->
<?php endwhile; endif; ?>
</div>
<!--End Main Content-->
<?php get_footer(); ?>
