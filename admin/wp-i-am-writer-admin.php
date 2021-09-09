<?php

// Registrar custom type post books

add_action('init', 'type_post_livros');

function type_post_livros() { 
    $labels = array(
        'name' => _x('Livros', 'post type general name'),
        'singular_name' => _x('Livros', 'post type singular name'),
        'add_Novo' => _x('Adicionar Novo Livros', 'Novo item'),
        'add_Novo_livro' => __('Novo Livros'),
        'edit_livro' => __('Editar Livros'),
        'Novo_livro' => __('Novo Livros'),
        'view_livro' => __('Ver Livros'),
        'search_livros' => __('Procurar livros'),
        'not_found' =>  __('Nenhum livro encontrado'),
        'not_found_in_trash' => __('Nenhum livro encontrado na lixeira'),
        'parent_livro_colon' => '',
        'menu_name' => 'Livros'
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

register_post_type( 'livros' , $args );
    flush_rewrite_rules();
}

add_action( 'init', 'create_livros_taxonomy_serie', 0 );

function create_livros_taxonomy_serie() {

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
        array('livros'), 
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

add_action( 'init', 'create_livros_taxonomy_genero', 0 );

function create_livros_taxonomy_genero() {

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
    array('livros'), 
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

add_action( 'init', 'create_livros_nonhierarchical_tags', 0 );

function create_livros_nonhierarchical_tags() {

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
        'livros',
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

/* *** */

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