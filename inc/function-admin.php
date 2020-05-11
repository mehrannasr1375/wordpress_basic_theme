<?php

// add 
function add_theme_menu() {
    add_menu_page('Theme Options', 'Cloth', 'manage_options', 'theme_settings', 'theme_initialization', get_template_directory_uri() . '/img/menu-icon.png', 110);
}
add_action('admin_menu', 'add_theme_menu'); 

function theme_initialization() {
    // init page
    echo "<h1>Theme Settings:</h1>";
}