<?php
 /*
 Plugin Name: Add Page Excerpt
 Plugin URI: https://github.com/w3programmers/add-page-excerpt
 Description: Adding Excerpt to Page
 Version: 1.0
 Author: Masud Alam
 Author URI: http://w3programmers.com/bangla
 License: GPLv2
 */

add_action('init', 'add_page_excerpt');
 
/**
 * Add excerpt support to pages
 */
function add_page_excerpt() {
    add_post_type_support( 'page', array('excerpt') );
}
?> 
