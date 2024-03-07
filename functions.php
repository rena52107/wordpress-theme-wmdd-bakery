<?php
function wmdd_bakery_support() {
    add_theme_support('wp-block-styles');
    add_editor_style( 'style.css' ); 

    add_editor_style('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    add_editor_style('https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap');
}

add_action('after_setup_theme', 'wmdd_bakery_support' );


function wmdd_bakery_styles() { 
    // Stylesheet
    wp_enqueue_style('wmdd-bakery-style',get_template_directory_uri() . '/style.css', Array(), filemtime(get_template_directory() . '/style.css'));

    // Font
    wp_enqueue_style('wmdd-bakery--google-fonts--roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    wp_enqueue_style('wmdd-bakery--google-fonts--caveat', 'https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap');
}

add_action( 'wp_enqueue_scripts', 'wmdd_bakery_styles' );


// Generate static page to set Front Page
function wmdd_bakery_theme__activation() {
    // Front Page
    wp_insert_post([
        'post_title'=>'Front Page',
        'post_name'=>'wmdd-bakery-front',
        'post_type'=>'page',
        'post_status'=>'publish'
    ]);
    
    // Posts Page
    wp_insert_post([
        'post_title'=>'Posts Page!',
        'post_name'=>'wmdd-bakery-posts',
        'post_type'=>'page',
        'post_status'=>'publish'
    ]);

    update_option('show_on_front', 'page');

    update_option('page_on_front', get_page_by_path('wmdd-bakery-front')->ID);
    update_option('page_for_posts', get_page_by_path('wmdd-bakery-posts')->ID);
}

add_action('after_switch_theme', 'wmdd_bakery_theme__activation');

// Delete posts generated by this theme
function wmdd_bakery_theme__deactivation() {
    wp_delete_post(get_page_by_path('wmdd-bakery-front')->ID, true);
    wp_delete_post(get_page_by_path('wmdd-bakery-posts')->ID, true);    
}

add_action('switch_theme', 'wmdd_bakery_theme__deactivation');