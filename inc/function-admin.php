<?php
/*

===================
    ADMIN PANEL
===================

*/
function awesome_add_admin_page(){
    add_menu_page(
        'Awesome Theme Options',
        'Theme Options',
        'manage_options',
        'awesome_theme',
        'awesome_theme_create_page',
        get_template_directory_uri() . '/img/bb-logo.png',
        54);

    add_submenu_page(
        'awesome_theme',
        'Awesome Theme Options',
        'Settings',
        'manage_options',
        'awesome_theme',
        'awesome_theme_create_page');

    add_submenu_page(
        'awesome_theme',
        'About Awesome Theme',
        'About',
        'manage_options',
        'awesome_theme_about',
        'awesome_theme_create_page_about');
}

function awesome_theme_create_page(){
    require_once( get_template_directory() . '/inc/templates/awesome-admin.php');
}
function awesome_theme_create_page_about(){
    require_once( get_template_directory() . '/inc/templates/awesome-about.php');
}

add_action('admin_menu', 'awesome_add_admin_page');

add_action('admin_init', 'awesome_custom_settings');

function awesome_custom_settings (){
    register_setting('awesome-settigns-group', 'first_name');
    add_settings_section('awesome-sidebar-options', 'Sidebar Options', 'awesome_sidebar_options', 'awesome_theme');
    add_settings_field('sidebar-name', 'First Name', 'awesome_sidebar_name', 'awesome_theme', 'awesome-sidebar-options');
}

function awesome_sidebar_options(){
    echo 'Customize the sidebar informations.';
}
function awesome_sidebar_name(){
    $firtName = esc_attr(get_option('first_name'));
    echo '<input type="text" name="first_name" value="'.$firtName.'" placeholder="First Name"/>';
}
