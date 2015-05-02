<?php
/*
Plugin Name: Nothing Much
Plugin URI: http://wordpress.org/plugins/nothing/
Description: This plugin does nothing of value, and is used to test things in the plugin directory/repo.
Author: stephdau
Version: 1.0
Text Domain: nothing-much
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

class NothingMuch {
    public function __construct() {
        add_action( 'admin_notices', array( $this, 'admin_notices' ) );
    }

    public function admin_notices() {
        echo '<div class="updated">' . __( 'Told you this plugin didn\'t do much. :)', 'nothing-much' ) . '</div>';
    }
}

new NothingMuch();