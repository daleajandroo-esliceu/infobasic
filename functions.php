<?php


require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function infobasic_config() {

    register_nav_menus( array(
        'infobasic_main_menu' => 'Info Basic Menu Principal',
    ) );

}
add_action( 'after_setup_theme', 'infobasic_config' );

function infobasic_scripts() {

    // Bootstrap JS (necesita jQuery)
    wp_enqueue_script(
        'bootstrap_js',
        get_theme_file_uri('/inc/js/bootstrap.min.js'),
        array('jquery'),
        '4.5',
        true
    );

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap_css',
        get_theme_file_uri('/inc/css/bootstrap.min.css'),
        array(),
        '4.5',
        'all'
    );
}
add_action( 'wp_enqueue_scripts', 'infobasic_scripts' );
