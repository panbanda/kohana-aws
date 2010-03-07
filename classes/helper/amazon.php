<?php defined('SYSPATH') or die('No direct script access.');

class Helper_Amazon {

	/**
	 * Provides a link to the amazon asset. If it 
	 * is a streaming bucket, it will return an RTMP protocol
	 *
	 * @param  $url     Local reference to file ex: "assets/picture.png"
	 * @param  $bucket  Key of bucket in Config file
	 */
	public static function asset($url, $bucket) 
	{
		$config = Kohana::config('amazon.buckets.' . $bucket);
		
		if ($config == NULL) throw new Kohana_Exception(':bucket is not a valid bucket in Amazon Config', array(':bucket' => $bucket));
		
		// streaming buckets return rtmp
		if ($config['streaming']) $domain = 'rtmp://' . rtrim($config['domain'], '/') . '/cfx/st/' . ltrim($url, '/');
		
		// otherwise return http
		else $domain = 'http://' . rtrim($config['domain'], '/') . '/' . ltrim($url, '/');
		
		return $domain;
	}
	
}  // End Helper_Amazon

