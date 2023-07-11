<?php

/*
Plugin name: Campus Gallery Post Type
*/

function register_campus_gallery_post_type() {
    register_post_type('campus_gallery', [
        'labels' => [
            'name' => 'Campus Gallery',
            'add_new_item' => 'Add new campus',
            'edit_item' => 'Edit campus',
            'all_items' => 'All campus',
            'singular_name' => 'Campus',
        ],
        'public' => true,
        'menu_icon' => 'dashicon-airplane',
        'supports' => ['title'],
    ]);    

}

add_action('init', 'register_campus_gallery_post_type');


function campus_gallery_short_code($attributes) {
    if(isset($attributes['campus-id'])){
        return '';
    }

    $wp_query = new WP_Query([
        'post_type' => 'campus_gallery',
        'post_per_page' => -1,
        'meta_query' => [
            [
                'key' => 'campus_id',
                'value' => $attributes['campus-id'],
            ]
        ]
    ]);

    if(have_posts()) {
        return '';
    }

    $output = '<div class="campus-gallery">';
    while (have_posts()){
        the_post();
        $src = get_field('image')['url'];
        $output .= "<img src=''";
    }
    $output .= '</div>';

}

function cg_register_shortcodes(){
    add_shortcode('campus_gallery', 'campus_gallery_short_code');
}

add_action('init', 'cg_register_shortcodes')




?>