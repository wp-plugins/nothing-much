<?php
/*
Plugin Name: Nothing Much
Plugin URI: http://wordpress.org/plugins/nothing/
Description: This plugin does nothing of value, and is used to test things in the plugin directory/repo.
Author: stephdau
Version: 1.3
Text Domain: nothing-much
Domain Path: /languages
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

class NothingMuch {
    public function __construct() {
        add_action( 'admin_init', array( $this, 'load_textdomain' ) );
        add_action( 'admin_notices', array( $this, 'admin_notices' ) );
    }

    public function load_textdomain() {
        load_plugin_textdomain( 'nothing-much', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    }

    public function admin_notices() {
        echo '<div class="updated">' . __( 'We told you this plugin didn\'t do much. :)', 'nothing-much' ) . '</div>';
    }
}

new NothingMuch();
