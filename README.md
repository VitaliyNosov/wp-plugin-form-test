<p align="center">
    <img width="180" height="180"  src="https://i.ibb.co/MgLwYwP/Wordpress-logo-8-1.png">
</p> 

# WordPress plugin starter:
<p>
    <img src="https://i.ibb.co/kGvw68G/Top-Word-Press-Plugin.png"alt="Baner">
</p>

> Starting structure for WordPress plugin development.


```php 

<?php 

/**
 * Plugin Name:       Form Test Plugin
 * Plugin URI:        https://gifted-fermat-f7e371.netlify.app/
 * Description:       Form Test Plugin Test.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Vitaliy Nosov
 * Author URI:        https://www.linkedin.com/in/vitaliy-nosov-5543a8173/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       plugin-test
 * Domain Path:       /languages
 */


// Basic plugin protection:

if( !defined('ABSPATH')){
    die;
}

// An alternative to this notation, you can use any:

// defined('ABSPATH') || exit;

// Display function in the admin panel menu

function form_test_show_item(){
    add_menu_page(
        esc_html__( 'Welcome to plugin page', 'music-palyer'),
        esc_html__('Form Test Plugin', 'music-palyer'),
        'manage_options',
        'form-test-options',
        'form_test_content',
        'dashicons-media-audio',
        6
    );
}

add_action('admin_menu','form_test_show_item');


// The function of displaying the plugin page in the admin panel

function form_test_content(){
    echo '<div class="block">
        <button class="button">block button</button>
    </div>';
    
}

// Style and Script Registration Function

function plugin_register_assets(){
    wp_enqueue_style('form-test_styles', plugins_url('assets/css/plugin-style.css', __FILE__));
    wp_register_script('form-test_jquery', plugins_url('assets/js/jquery.min.js', __FILE__));
    wp_enqueue_script('form-test_scripts', plugins_url('assets/js/admin.js', __FILE__));
}

add_action('admin_enqueue_scripts','plugin_register_assets');


// Connecting styles for display on the frontend

function form_test_scripts() {
	wp_enqueue_style( 'style', plugins_url('assets/css/plugin-style.css', __FILE__));
  	wp_enqueue_script( 'jquery', plugins_url('assets/js/jquery.min.js', __FILE__), array(), true );
    wp_enqueue_script('form-test_front', plugins_url('assets/js/form-test-script.js', __FILE__), array(), true);
}

add_action( 'wp_enqueue_scripts','form_test_scripts' );

// The function of connecting styles and scripts

function music_load_assets($hook){
    if($hook != 'toplevel_page_form-test-options'){
        return;
    }
    wp_enqueue_style('form-test_styles');
    wp_enqueue_script('form-test_scripts');

    // If you need to use styles or scripts that are already built into WordPress: 
    // wp_enqueue_script('jquery-ui-tabs');
}

add_action('admin_enqueue_scripts','music_load_assets');

// We connect our shortcode:

require_once( dirname(__FILE__) . '/shortcode/form-test-front.php');



```