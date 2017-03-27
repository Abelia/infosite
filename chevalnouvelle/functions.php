<?php

/**
 * Gestion des miniatures dans les thèmes
 **/
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 300, 300, array( 'center', 'center')  ); // 50 pixels wide by 50 pixels tall, crop from the center
/**
 * configurer un header personnaliser
 */
$args = array(
    'flex-width'    => true,
    'width'         => 980,
    'flex-height'    => true,
    'height'        => 200,
    'default-image' => get_template_directory_uri() . '/img-layout/banniere.svg',
);
add_theme_support( 'custom-header', $args );
