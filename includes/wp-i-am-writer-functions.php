<?php

add_action('rest_api_init', 'custom_api_get_projects');
function custom_api_get_projects(){
  register_rest_route( 'livros', '/all-posts', array(
    'methods' => 'GET',
    'callback' => 'custom_api_get_projects_callback'
  ));
}

function custom_api_get_projects_callback($request){
    $posts_data = array();
    $paged = $request->get_param('page');
    $paged = (isset($paged) || !(empty($paged))) ? $paged : 1;
    $posts = get_posts( array(
      'post_type'       => 'livros',
      'status'          => 'published',
      'posts_per_page'  => 9,
      'orderby'         => 'post_date',
      'order'           => 'DESC',
      'paged'           => $paged
    ));
    foreach($posts as $post){
      $id = $post->ID;
      $post_thumbnail = (has_post_thumbnail($id)) ? get_the_post_thumbnail_url($id) : null;
      $post_cat = get_the_category($id);
      $featured = (get_field('project_featured', $id)) ? true : false;
      $posts_data[] = (object)array(
        'id' => $id,
        'slug' => $post->post_name,
        'type' => $post->post_type,
        'title' => $post->post_title,
        'featured_img_src' => $post_thumbnail,
        'featured' => $featured,
        'category' => $post_cat[0]->cat_name
      );
    }
    return $posts_data;
}