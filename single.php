<?php get_header(); ?>

<!-- Begin Main Section -->
<div id= "content">
  <!--Begin WP Loop -->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article id= "post-<?php the_ID(); ?>" class= "post">
    <h2><?php the_title(); ?></h2>
    <br>
    <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
    <br>
    <?php the_post_thumbnail( 'large' ); ?>
    <br><br>
    <?php the_content(''); ?>
  </article>
  <!--End WP Loop-->
  <?php endwhile; endif; ?>
</div>
<!--End Main Section-->
<?php get_footer(); ?>
