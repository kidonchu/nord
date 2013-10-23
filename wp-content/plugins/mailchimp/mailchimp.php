<?php
/*
Plugin Name: Wordpress Mail Chimp Wrapper
Description: MailChimp wrapper class for wordpress
Version: 1.0.0
Author: Kidon Chu
Author URI: http://kidonchu.com
*/

class wpMailChimp
{
	/**
	 * Hold singleton instance
	 * @var wpMailChimp
	 */
	static $instance = false;

	/**
	 * @access private
	 * @var string API Url
	 */
	private $_url = "https://us3.api.mailchimp.com/2.0/";

	/**
	 * @access private
	 * @var array Subscribe options
	 */
	private $_subscribe_options = array(
		'apikey'            => 'da854267f37f870a7f8bf7dedf5dd849-us3',
		'id'                => '7e8a065dab',
		'email'             => '',
		'email_type'        => 'html',
		'double_optin'      => true,
		'update_existing'   => false,
		'replace_interests' => true,
		'send_welcome'      => false,
	);

	/**
	 * Constructor, which is private to force the use of
	 * getInstance() to make this a Singleton
	 *
	 * @return wpMailChimp
	 */
	private function __construct() {}

	/**
	 * If an instance exists, this returns it.
	 * If not, it creates one and retuns it.
	 *
	 * @return wpMailChimp
	 */
	public static function getInstance()
	{
		if ( ! self::$instance)
		{
			self::$instance = new self;
		}
		return self::$instance;
	}

	/**
	 * Pings the MailChimp API
	 *
	 * @return string "Everything's Chimpy!" if successful
	 */
	public function ping()
	{
		$args['method'] = 'helper/ping';
		return $this->exec($args);
	}

	/**
	 * Subscribe the provided email to a list
	 *
	 * @return boolean true on success, false otherwise
	 */
	public function subscribe ($args = null)
	{
		$args = wp_parse_args($args, $this->_subscribe_options);
		$args['method'] = 'lists/subscribe';
		return $this->exec($args);
	}

	/**
	 * Performs API call to MailChimp
	 * @param string|array $args Parameters needed for call
	 *
	 * @return object response body
	 */
	public function exec($args)
	{
		$reqParams = array(
			'body'      => $args,
			'sslverify' => false,
		);

		$_url = "{$this->_url}{$args['method']}";

		$resp = wp_remote_post($_url, $reqParams);

		$respBody = json_decode($resp['body']);

		// If the response was valid, decode it and return it. Otherwise return a WP_Error
		if ( ! ($resp['response']['code'] >= 200 && $resp['response']['code'] < 300))
		{
			// customize error messag
			if ($respBody->name == 'List_AlreadySubscribed')
			{
				$respBody->error = $args['email']['email'].' is already subscribed to list NORD Newsletter.';
			}
		}

		return $respBody;
	}
}
