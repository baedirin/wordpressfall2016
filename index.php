<?php get_header(); ?>
<!--Begin Main Section-->
<div id= "content">
  <!--Begin WP Loop-->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article id= "post-excerpt-<?php the_ID(); ?>" class= "post-excerpt">
    <br><br>
    <h2><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
    <br>
    <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
    <a href= "<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
    <br>
    <?php the_excerpt(); ?>
    <p class="read-more"><a href= "<?php the_permalink(); ?>">Read More &raquo;</a></p>
  </article>
<?php endwhile; endif; ?>
<!--End WP Loop-->
</div>
<!--End Main Section-->
<?php get_footer(); ?>
