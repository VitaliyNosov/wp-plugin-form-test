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
        esc_html__( 'Welcome to plugin page', 'form-test'),
        esc_html__('Form Test Plugin', 'form-test'),
        'manage_options',
        'form-test-options',
        'form_test_content',
        'dashicons-forms',
        6
    );
}

add_action('admin_menu','form_test_show_item');


// The function of displaying the plugin page in the admin panel

function form_test_content(){
    echo '
    
    <div class="content">
        <div class="border">
        <div class="info__text">
            <span>This plugin collects data through a feedback form. All users can be seen in the table below :)</span>
            </br>
            <span>Click on the blue button and copy the shortcode. Paste it on the page, a form will appear.</span>
        </div>
        </div>
            <div class="text">
                <span>Copy shortcode:</span>
            <div class="text__copy_link">[form-test-shortcode]</div>
        </div>
            <div class="copy__link_mess">Copied to clipboard</div>
    </div>
    
    ';

    require_once( dirname(__FILE__) . '/admin-table.php');

    
}

// Style and Script Registration Function

function plugin_register_assets(){
    wp_enqueue_style('form-test_styles', plugins_url('assets/css/plugin-style.css', __FILE__));
    wp_enqueue_style('form-test_bootstrap', plugins_url('assets/css/bootstrap.min.css', __FILE__));
    // wp_register_script('form-test_jquery', plugins_url('assets/js/jquery.min.js', __FILE__));
    wp_enqueue_script('form-test_scripts', plugins_url('assets/js/admin.js', __FILE__));
}

add_action('admin_enqueue_scripts','plugin_register_assets');


// Connecting styles for display on the frontend

function form_test_scripts() {
	wp_enqueue_style( 'style', plugins_url('assets/css/plugin-style.css', __FILE__));
    wp_deregister_script('jquery');
	wp_enqueue_script('jquery-front', plugins_url('assets/js/jquery.min.js', __FILE__));
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script('form-test_front', plugins_url('assets/js/form-test-script.js', __FILE__), array(), true);
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.11.2/css/all.css' );
}

add_action( 'wp_enqueue_scripts','form_test_scripts' );



// The function of connecting styles and scripts

function form_load_assets($hook){
    if($hook != 'toplevel_page_form-test-options'){
        return;
    }
    wp_enqueue_style('form-test_styles');
    wp_enqueue_script('form-test_scripts');

    // If you need to use styles or scripts that are already built into WordPress: 
    // wp_enqueue_script('jquery-ui-tabs');
}

add_action('admin_enqueue_scripts','form_load_assets');

// We connect our shortcode:

require_once( dirname(__FILE__) . '/shortcode/form-test-front.php');

// activete plugin functions

register_activation_hook(__FILE__, 'mytable_activation_function');

// callback function to create table

function mytable_activation_function()
{
    global $wpdb;

    if ($wpdb->get_var("show tables like '" . owt_create_my_table() . "'") != owt_create_my_table()) {

        $mytable = 'CREATE TABLE `' . owt_create_my_table() . '` (
                            `Name` varchar(100) NOT NULL,
                            `Email` varchar(100) NOT NULL,
                            `Phone` varchar(100) NOT NULL,
                            `Date` varchar(100) NOT NULL
                          ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;';

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($mytable);
    }
}

// returns table name

function owt_create_my_table()
{
    global $wpdb;
    return $wpdb->prefix . "mytable";
}


// Отправка формы

// add_action( 'wp_ajax_form_test', 'form_test' );
// add_action( 'wp_ajax_form_test', 'form_test' );

// function form_test() {

// ajax form submit function:

if(isset($_POST['submitbtm'])) {

    $data = array(
        'Name' => $_POST['userName'],
        'Email' => $_POST['userEmail'],
        'Phone' => $_POST['userPhone'],
        'Date' => $_POST['userDate']
    );
    $table_name = $wpdb->prefix . "mytable";

    $result = $wpdb->insert($table_name, $data, $format=NULL);

    // if($result==1) {
    //     echo "<script>alert('Book Saved')</script>";
    // }else{
    //     echo "<script>alert('Unable to Save')</script>";
    // }
}
	
// ajax form submit function.
			
// }




