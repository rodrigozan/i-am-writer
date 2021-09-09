<?php

// Registrar custom type post books

add_action('init', 'type_post_contos');

function type_post_contos() { 
    $labels = array(
        'name' => _x('Contos', 'post type general name'),
        'singular_name' => _x('Conto', 'post type singular name'),
        'add_new' => _x('Criar Conto', 'Novo item'),
        'add_new_conto' => __('Novo Conto'),
        'edit_conto' => __('Editar Conto'),
        'new_conto' => __('Conto Novo'),
        'view_conto' => __('Ver Contos'),
        'search_contos' => __('Procurar Contos'),
        'not_found' =>  __('Nenhum Conto encontrado'),
        'not_found_in_trash' => __('Nenhum Conto encontrado na lixeira'),
        'parent_conto_colon' => '',
        'menu_name' => 'Contos'
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

register_post_type( 'conto' , $args );
    flush_rewrite_rules();
}

add_action( 'init', 'create_contos_taxonomy_serie', 0 );

function create_contos_taxonomy_serie() {

    $labels = array(
        'name' => _x( 'Série', 'taxonomy general name' ),
        'singular_name' => _x( 'Série', 'taxonomy singular name' ),
        'search_items' =>  __( 'Pesquisar Séries' ),
        'all_items' => __( 'Todas as Séries' ),
        'edit_item' => __( 'Editar Série' ), 
        'update_item' => __( 'Atualizar Série' ),
        'add_Novo_item' => __( 'Nova Série' ),
        'Novo_item_name' => __( 'Novo nome da Série' ),
        'menu_name' => __( 'Série' ),
    );    

    // Now register the taxonomy
    register_taxonomy(
        'serie',
        array('conto'), 
        array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'serie' ),
        )
    );

}

add_action( 'init', 'create_contos_taxonomy_genero', 0 );

function create_contos_taxonomy_genero() {

$labels = array(
    'name' => _x( 'Gênero', 'taxonomy general name' ),
    'singular_name' => _x( 'Gênero', 'taxonomy singular name' ),
    'search_items' =>  __( 'Pesquisar Gênero' ),
    'all_items' => __( 'Todos os Gêneros' ),
    'edit_item' => __( 'Editar Gênero' ), 
    'update_item' => __( 'Atualizar Gênero' ),
    'add_Novo_item' => __( 'Novo Gênero' ),
    'Novo_item_name' => __( 'Novo nome do Gênero' ),
    'menu_name' => __( 'Gênero' ),
);    

register_taxonomy(
    'genero',
    array('conto'), 
    array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'genero' ),
    )
);

}

add_action( 'init', 'create_contos_nonhierarchical_tags', 0 );

function create_contos_nonhierarchical_tags() {

    $labels = array(
        'name' => _x( 'Tags', 'taxonomy general name' ),
        'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Tags' ),
        'popular_items' => __( 'Popular Tags' ),
        'all_items' => __( 'All Tags' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Tag' ), 
        'update_item' => __( 'Update Tag' ),
        'add_new_item' => __( 'Add Nova Tag' ),
        'new_item_name' => __( 'Novo nome da Tag' ),
        'separate_items_with_commas' => __( 'Separate Tags with commas' ),
        'add_or_remove_items' => __( 'Add ou Remover Tags' ),
        'choose_from_most_used' => __( 'Choose from the most used tags' ),
        'menu_name' => __( 'Tags' ),
    ); 

    register_taxonomy(
        'tags',
        'conto',
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