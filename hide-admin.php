<?php
/*
Plugin Name: Remove Admin Bar
Plugin URI: http://karimabdelwahab
Description: Simply removes the admin bar from all users but the admin.
Version: 1.0
Author: Karim Abdelwahab
Author URI: http://karimabdelwahab.com
License: None
*/

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
	}
}

?>