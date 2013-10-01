<?php
/*
Plugin Name: Google Analytics for Nord
Description: Insert Google Analytics code for NORD website
Version: 1.0
Author: kidonchu
Author URI: http://kidonchu.com
*/

class GoogleAnalyticsForNord
{
	// declare globals
	private $options_name      = 'gafn_options';
	private $options_group     = 'gafn_options_group';
	private $options_page      = 'google_analytics_for_nord';
	private $plugin_name       = 'Google Analytics for Nord';
	private $plugin_textdomain = 'GoogleAnalyticsForNord';

	// constructor
	function __construct ()
	{
		add_action('admin_init', array($this, 'initOptions'));
		add_action('admin_menu', array($this, 'addOptionsPage')); // add settings page
		add_action('wp_head', array($this, 'getTrackingCode'), 1000); // add tracking code in head
	}

	function loadTextDomain ()
	{
		load_plugin_textdomain($this->plugin_textdomain, false, trailingslashit(dirname(plugin_basename( __FILE__)) ).'lang/');
	}

	function getDefaultOptions ()
	{
		return array(
			'tracking_code' => '',
		);
	}

	function getOptions ()
	{
		return get_option($this->options_name, $this->getDefaultOptions());
	}

	function initOptions ()
	{
		register_setting($this->options_group, $this->options_name, array($this, 'validate'));
	}

	function addOptionsPage ()
	{
		add_options_page($this->plugin_name.' '.__('Settings', $this->plugin_textdomain ),
			__('Google Analytics', $this->plugin_textdomain),
			'manage_options', $this->options_page,
			array($this, 'showOptionsPage')
		);
	}

	// validate options input
	function validate ($input)
	{
		return array(
			'tracking_code' =>  wp_filter_nohtml_kses($input['tracking_code']),
		);
	}

	// draw the options page
	function showOptionsPage ()
	{
	?>
		<div class="icon32" id="icon-options-general"></div>
		<h2><?php echo $this->plugin_name.__(' Settings', $this->plugin_textdomain) ?></h2>
		<br>
		<form name="form1" id="form1" method="post" action="options.php">
			<?php settings_fields( $this->options_group ) ?>
			<?php $options = $this->getOptions() ?>
			<label for="<?php echo $this->options_name ?>[tracking_code]"><?php _e( 'Tracking Code', $this->plugin_textdomain ); ?>: </label>
			UA-<input type="text" name="<?php echo $this->options_name ?>[tracking_code]" value="<?php echo $options['tracking_code']; ?>" style="width:120px;">
			<input type="submit" class="button-primary" value="<?php _e( 'Save', $this->plugin_textdomain ) ?>">
		</form>
	<?php
	}

	// retrieve tracking code
	function getTrackingCode()
	{
		$options = $this->getOptions();
	?>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-<?php echo $options["tracking_code"] ?>']);
			_gaq.push(['_trackPageview']);
			(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();
		</script>
	<?php
	}

} // end class

$googleAnalyticsForNord = new GoogleAnalyticsForNord;
?>