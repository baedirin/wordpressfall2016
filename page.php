<?php get_header(); ?>

<!--Begin Main Content-->
<div id= "content">
  <!--Begin WP Loop-->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content(''); ?>
<!--End WP Loop-->
<?php endwhile; endif; ?>
<small>page.php</small>
</div>
<!--End Main Content-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
