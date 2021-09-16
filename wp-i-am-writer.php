<?php

/**
 * Plugin Name:       I Am Writer
 * Plugin URI:        https://www.rodzandonadi.com/i-am-writer/
 * Description:       Transforme seu WordPress em uma plataforma de escrita literária. Para escritores profissionais e amadores.
 * Version:           1.0.0
 * Requires at least: 5.8.1
 * Requires PHP:      7.3.0
 * Author:            Rod Zandonadi
 * Author URI:        https://www.rodzandonadi.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://www.rodzandonadi.com/i-am-writer/
 * Text Domain:       i-am-writer   
 * Domain Path:       /languages
 * Git:               https://github.com/rodrigozan/i-am-writer.git
 * Branch:            master
*/

/*
I Am Writer é um software livre: você pode redistribuí-lo e / ou modificar sob os termos da GNU General Public License conforme publicada por a Free Software Foundation, seja a versão 2 da Licença, ou qualquer versão posterior.
I Am Writer é distribuído na esperança de ser útil, mas SEM QUALQUER GARANTIA; sem mesmo a garantia implícita de COMERCIALIZAÇÃO ou ADEQUAÇÃO A UM DETERMINADO FIM. Veja o GNU General Public License para mais detalhes.
Você deve ter recebido uma cópia da GNU General Public License junto com I Am Writer. Caso contrário, consulte {URI para licença de plug-in}.
*/

if ( is_admin() ) {
    // we are in admin mode
    require_once __DIR__ . '/admin/wp-i-am-writer-admin.php';
    require_once __DIR__ . '/includes/wp-i-am-writer-livros.php';
    require_once __DIR__ . '/includes/wp-i-am-writer-contos.php';
    require_once __DIR__ . '/includes/wp-i-am-writer-personagens.php';
    require_once __DIR__ . '/includes/wp-i-am-writer-functions.php';
}

function wp_i_am_writer_scripts() {
    wp_enqueue_script( 'jquery', get_template_directory_uri() . 'assets/js/jquery.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_i_am_writer_scripts' );

