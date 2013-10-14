<?php
/*
Plugin Name: Subscription for Nord
Description: Mail subscription plugin for NORD website
Version: 1.0
Author: kidonchu
Author URI: http://kidonchu.com
*/

class SFN
{
	// declare globals
	private $options_name      = 'gafn_options';
	private $options_group     = 'gafn_options_group';
	private $options_page      = 'google_analytics_for_nord';
	private $plugin_name       = 'Google Analytics for Nord';
	private $plugin_textdomain = 'GoogleAnalyticsForNord';

	public function __construct ()
	{
		register_activation_hook(__FILE__, array($this, 'install'));
		register_deactivation_hook(__FILE__, array($this, 'uninstall'));
		// add_action('admin_menu', array($this, 'register_menu'));
	}

	/**
	 * Gets called when plugin is activated
	 */
	public function install ()
	{
		global $wpdb;
		$table = $wpdb->prefix."sfn_subscribers";
		$sql = "CREATE TABLE $table (
			id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			name VARCHAR(200) NOT NULL,
			email VARCHAR(200) NOT NULL
		);";
		$wpdb->query($sql);
	}

	public function register_menu() {
		// add_menu_page('Subscribers', 'Subscribers', 'add_users',
		// 	__DIR__.'/index.php', '', plugins_url('icon.png', __FILE__), 54.133);
	}

	/**
	 * Gets called when plugin is deactivated
	 */
	public function uninstall ()
	{
		global $wpdb;
	}

	public function validate_input ($email)
	{
		return is_email($email);
	}

	public function check_duplicate_email ($email)
	{
		global $wpdb;
		$result = $wpdb->query("SELECT * FROM {$wpdb->prefix}sfn_subscribers WHERE email LIKE '{$wpdb->escape($email)}'");
		return (mysql_num_rows($result) < 1);
	}

	public function add_subscriber ($name, $email)
	{
		global $wpdb;
		$wpdb->query("INSERT INTO {$wpdb->prefix}sfn_subscribers(name, email) VALUES ('{$wpdb->escape($name)}', '{$wpdb->escape($email)}')");
	}
}
	}

} // end class

$sfn = new SFN;

// handle form submission
if ($_POST['sfn_subscribe'])
{
	$name = $_POST['sfn_name'];
	$email = $_POST['sfn_email'];

	$validated = $sfn->validate_input($email);
	if ($validated)
	{
		$duplicate = $sfn->is_duplicate_email($email);
		if (! $duplicate)
		{
			$sfn->add_subscriber($name, $email);
		}
	}
}
?>








