<?php
require get_template_directory() . '/inc/function-admin.php';

// carregamento de scripts e folhas de estilo
function load_scripts(){
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');
    wp_enqueue_style('template', get_template_directory_uri(). '/css/template.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

// configurações do tema
function wrdp_config() {
    // registra menus
    register_nav_menus(
        [
            'my_man_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        ]
    );
    //cabeçalho customizado
    $args = [
        'height' => 225,
        'width'  => 1920
    ];
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['video', 'image']);
}

add_action('after_setup_theme', 'wrdp_config', 0);

