<?php

register_sidebar(array(
  'before_widget' => '<div id= "%1$s" class= "widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h2>',
  'after_title' => '</h2>',

));

register_nav_menus (array(
  'main-menu' => __('Main'),
));

add_theme_support('post-thumbnails');

add_post_type_support('page', 'excerpt');

function get_my_title_tag() {

  global $post;
  if (is_front_page()) {
    bloginfo('description');
  }
  elseif (is_page()) || is_single()) {
    the_title();
  }
  else {
    bloginfo('description');
  }
  if ($post->post_parent){
    echo ' | ';
    echo get_the_title($post->post_parent);
  }
  echo ' | ';
  bloginfo('name');
  echo ' | ';
  echo 'Seattle, WA.';
}
?>
