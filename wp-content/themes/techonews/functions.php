<?php

function load_scripts() {
    wp_enqueue_script('hello', get_theme_file_uri('scripts/hello.js'), [], '1.0', true);
}

function load_style() {
    wp_enqueue_style('style-css', get_theme_file_uri('assets/css/style.css'), [], '1.0');
    wp_enqueue_style('login-css', get_theme_file_uri('assets/css/login.css'), [], '1.0');
}


function technonews_register_menus(){
    register_nav_menu('navbar-menu', 'Navbar Menu');
}



function technonews_login_errors(){
    session_start();
    $_SESSION['errors'] = ['Username/Password does not match'];
    wp_redirect(home_url('login'));
}


function register_campus_post_type() {
    register_post_type('campus', [
        'public' => true,
        'menu_position' => 2,
        'menu_icon' => 'dashicons-building',
        'labels' => [
            'name' => 'Campus',
            'add_new_item' => 'Add new Campus',
            'edit_item' => 'Edit the campus',
            'all_items' => 'All of Our Campuses',
            'singular_name' => 'Campus',
            'add_new' => "Add Campus",
        ],
        'rewrite' => [
            'with-front' => false,
        ],
    ]);

    flush_rewrite_rules(false);
}


function say_hello_shortcode($attributes) {
    $name = $attributes['name'] ?? "";
    
    return "
        <h2>Halo, Selamat pagi $name</h2>
    ";
}

function register_shortcode() {
    add_shortcode('sayhello', 'say_hello_shortcode');
}


add_action('init', 'register_shortcode');
add_action('init', 'technonews_register_menus');
add_action('login_errors', 'technonews_login_errors');
add_action('init', 'register_campus_post_type');

add_action('wp_enqueue_scripts', 'load_scripts');
add_action('wp_enqueue_scripts', 'load_style');

?>

