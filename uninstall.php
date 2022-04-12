<?php
    if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) exit();
    global $wpdb;
    $mytable = $wpdb->prefix .'mytable';
    $wpdb->query( "DROP TABLE IF EXISTS {$mytable}" );
?>






