<?php

function _add_javascript()
{
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/dist/js/main.js', array(), null, true );
	wp_enqueue_script('bootstrap5-js', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js');
	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/e4c7447f25.js');
}
add_action('wp_enqueue_scripts', '_add_javascript', 100);

function _add_stylesheets()
{
	wp_enqueue_style('theme-css', get_template_directory_uri() . '/assets/dist/css/main.css', array(), null, 'all' );
	wp_enqueue_style('bootstrap5', get_stylesheet_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', '_add_stylesheets');
