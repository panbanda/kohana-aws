<?php defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'php-aws/class.ec2');

class Amazon_EC2 extends EC2
{
	public function __construct() 
	{
		parent::__construct(Kohana::$config->load('amazon.account.access_key'), Kohana::$config->load('amazon.account.secret_key'));
	}
}

