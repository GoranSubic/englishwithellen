<?php
/**
 * Functions and definitions for the Hello Biz Child theme.
 *
 * Enqueue styles for Hello Biz Child.
 * 
 * @category WordPress
 * @package  HelloBizChild
 * @author   Goran Subic <gsubic@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0+
 * @version  GIT: <4ced6ba0e4c4fa82ad25d9a2bdae7757b319ceef>
 * @link     https://englishwithellen.education
 */

/**
 * Enqueue styles for Hello Biz Child.
 * 
 * @return void
 */
function hello_biz_child_enqueue_styles() {
    // Enqueue Parent Theme CSS.
    wp_enqueue_style(
        'hello-biz-style', 
        get_template_directory_uri() . '/style.css'
    );
    
    // Enqueue Child Theme CSS.
    wp_enqueue_style(
        'hello-biz-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('hello-biz-style'),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'hello_biz_child_enqueue_styles' );
