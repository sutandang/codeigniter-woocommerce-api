<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once( 'Woocommerce/woocommerce-api.php' );

class Woocommerce
{
	protected $options;
	function __construct()	
	{
		// parent::__construct();
		$this->options = array(
			'debug'           => true,
			'return_as_array' => false,
			'validate_url'    => false,
			'timeout'         => 30,
			'ssl_verify'      => false,
		);
	}
	public function request()
	{
	 	$client = new WC_API_Client( 'http://mbelinger.com', 'ck_e0b80698c8f59fa47aa6933281fae5e73d161e82', 'cs_942892737175f9e9f2b1d72dc6371fb269726643', $this->options );
	 	return $client;
	}
}