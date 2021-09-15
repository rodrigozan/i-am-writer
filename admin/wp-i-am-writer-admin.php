<?php

add_action( 'admin_menu', 'iawriter_options_page' );
add_action( 'admin_menu', 'register_my_custom_submenu_page' );

function iawriter_options_page_html() {
    include 'wp-i-am-writer-view.php';
}

function iawriter_options_subpage_livros_html() {
    include 'subpages/wp-i-am-writer-submenu-livros.php';
}

function iawriter_options_subpage_contos_html() {
    include 'subpages/wp-i-am-writer-submenu-contos.php';
}

function iawriter_options_subpage_personagens_html() {
    include 'subpages/wp-i-am-writer-submenu-personagens.php';
}

function iawriter_options_subpage_form_personagens_html() {
    include 'subpages/wp-i-am-writer-submenu-form-personagem.php';
}

function iawriter_options_page() {
    add_menu_page(
        'I Am Writer',
        'I Am Writer',
        'manage_options',
        'i_am_writer',
        'iawriter_options_page_html',
        'dashicons-book',
        20
    );
}

function register_my_custom_submenu_page() {
    add_submenu_page( 'i_am_writer', 'Livros', 'Livros', 'manage_options', 'iawriter_options_subpage_livros_html', 'iawriter_options_subpage_livros_html' ); 
    add_submenu_page( 'i_am_writer', 'Criar Personagem', 'Criar Personagem', 'manage_options', 'iawriter_options_subpage_form_personagens_html', 'iawriter_options_subpage_form_personagens_html' );
    add_submenu_page( 'i_am_writer', 'Contos', 'Contos', 'manage_options', 'iawriter_options_subpage_contos_html', 'iawriter_options_subpage_contos_html' );
    add_submenu_page( 'i_am_writer', 'Personagens', 'Personagens', 'manage_options', 'iawriter_options_subpage_personagens_html', 'iawriter_options_subpage_personagens_html' );
}

/*add_action( 'admin_menu', 'iawriter_options_page' );
function iawriter_options_page() {
    add_menu_page(
        'I Am Writer',
        'I Am Writer',
        'manage_options',
        'iawriter',
        'iawriter_options_page_html',
        plugin_dir_url(__FILE__) . 'img/wp-i-am-writer-icon.png',
        20
    );
}

add_action('admin_menu', 'iawriter_options_subpage_livros', 11 );
function iawriter_options_subpage_livros() 
{
    add_submenu_page(
        'i-am-writer ', // Third party plugin Slug 
        'Livros', 
        'Livros', 
        'delete_plugins', 
        'third_party_submenu', 
        'iawriter_options_subpage_livros_html'
    );
}
*/
