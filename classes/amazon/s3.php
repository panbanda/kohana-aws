<?php defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'php-aws/class.s3');

class Amazon_S3 extends S3
{
	public function __construct() 
	{
		parent::__construct(Kohana::$config->load('amazon.account.access_key'), Kohana::$config->load('amazon.account.secret_key'));
	}

	/**
	 * Uploads a file to the S3 service
	 *
	 * @param  $filename    Location of the file
	 */
	public function upload($filename, $remote_name, $bucket)
	{
		if (!file_exists($filename) || !is_file($filename))
			throw new Kohana_Exception('Could not find file: :file', array(':file' => $filename)); 
		
		return $this->uploadFile($bucket, $remote_name, $filename, TRUE);
	}
}

