<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

function theme_enqueue_child_scripts()
{
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null);
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('simple-parallax-js', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.6.0/dist/simpleParallax.min.js', array(), null, true);
    

    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/js/script.js', array('swiper-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_child_scripts');



// wp_enqueue_script('skrollr-js', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js', array(), null, true);