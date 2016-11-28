<?php get_header(); ?>

<main>
  <!--Begin WP Loop-->
  <div id= "widgets">
    <section class= "widget-item">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(''); ?>
      <?php endwhile; endif; ?>
    </section>
  <!--End WP Loop-->
  <section class= "widget-item">
    <h2>Lastest Postings:</h2>
    <ul>
      <?php rewind_posts(); ?>
      <?php query_posts('showposts=4'); ?>
      <!--Begin WP Loop 2-->
      <?php while (have_posts()) : the_post(); ?>
        <li><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
      <!--End WP Loop 2-->
    </ul>
  </section>
  <section class= "widget-item">
    <h2>Contact Me:</h2>
    <p><strong>Phone: </strong>888-555-1212<br><strong>Email: </strong><a href= "mailto:nicomoving@gmail.com">nicomoving@gmail.com</a></p>
    <p>111 1st Street<br>Seattle, WA 98101</p>
  </section>
</div>
<!--End Widgets-->

<?php get_footer(); ?>
