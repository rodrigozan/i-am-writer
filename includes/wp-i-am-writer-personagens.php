<?php

// Registrar custom type post personagens

add_action('init', 'type_post_personagems');

function type_post_personagems() { 
    $labels = array(
        'name' => _x('Personagens', 'post type general name'),
        'singular_name' => _x('Personagens', 'post type singular name'),
        'add_Novo' => _x('Adicionar Novo Personagens', 'Novo item'),
        'add_Novo_livro' => __('Novo Personagens'),
        'edit_livro' => __('Editar Personagens'),
        'Novo_livro' => __('Novo Personagens'),
        'view_livro' => __('Ver Personagens'),
        'search_personagens' => __('Procurar Personagens'),
        'not_found' =>  __('Nenhum personagem encontrado'),
        'not_found_in_trash' => __('Nenhum personagem encontrado na lixeira'),
        'parent_personagem_colon' => '',
        'menu_name' => 'Personagems'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,           
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,      
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'comments', 
            'excerpt', 
            'custom-fields', 
            'revisions', 
            'trackbacks'
        )
      );
    register_post_type( 'personagens' , $args );
    flush_rewrite_rules();
}

add_action( 'init', 'create_personagem_nonhierarchical_qualidades', 0 );

function create_personagem_nonhierarchical_qualidades() {

    $labels = array(
        'name' => _x( 'Qualidades', 'taxonomy general name' ),
        'singular_name' => _x( 'Qualidade', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Qualidades' ),
        'popular_items' => __( 'Popular Qualidades' ),
        'all_items' => __( 'All Qualidades' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Qualidade' ), 
        'update_item' => __( 'Update Qualidade' ),
        'add_new_item' => __( 'Add Nova Qualidade' ),
        'new_item_name' => __( 'Novo nome da Qualidade' ),
        'separate_items_with_commas' => __( 'Separate Qualidades with commas' ),
        'add_or_remove_items' => __( 'Add ou Remover Qualidades' ),
        'choose_from_most_used' => __( 'Choose from the most used Qualidades' ),
        'menu_name' => __( 'Qualidades' ),
    ); 

    register_taxonomy(
        'qualidades',
        'personagens',
        array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'tag' ),
        )
    );
}

add_action( 'init', 'create_personagem_nonhierarchical_defeitos', 0 );

function create_personagem_nonhierarchical_defeitos() {

    $labels = array(
        'name' => _x( 'Defeitos', 'taxonomy general name' ),
        'singular_name' => _x( 'Deveito', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Defeitos' ),
        'popular_items' => __( 'Popular Defeitos' ),
        'all_items' => __( 'All Defeitos' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Deveito' ), 
        'update_item' => __( 'Update Deveito' ),
        'add_new_item' => __( 'Add Nova Deveito' ),
        'new_item_name' => __( 'Novo nome da Deveito' ),
        'separate_items_with_commas' => __( 'Separate Defeitos with commas' ),
        'add_or_remove_items' => __( 'Add ou Remover Defeitos' ),
        'choose_from_most_used' => __( 'Choose from the most used Defeitos' ),
        'menu_name' => __( 'Defeitos' ),
    ); 

    register_taxonomy(
        'defeitos',
        'personagens',
        array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'tag' ),
        )
    );
}