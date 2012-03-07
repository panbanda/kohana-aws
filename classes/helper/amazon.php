<?php defined('SYSPATH') or die('No direct script access.');

class Helper_Amazon
{
	public static function asset($url, $bucket) 
	{
		$config = Kohana::$config->load('amazon.buckets.' . $bucket);
		
		if ($config == NULL) throw new Kohana_Exception(':bucket is not a valid bucket in Amazon Config', array(':bucket' => $bucket));
		
		# if the bucket is streaming
		if ($config['streaming']) return 'rtmp://' . rtrim($config['domain'], '/') . '/cfx/st/' . ltrim($url, '/');
		
		return 'http://' . rtrim($config['domain'], '/') . '/' . ltrim($url, '/');
	}
}

