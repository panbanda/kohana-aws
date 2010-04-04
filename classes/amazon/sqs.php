<?php defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'php-aws/class.sqs');

class Amazon_SQS extends SQS
{
	public function __construct() 
	{
		parent::__construct(Kohana::config('amazon.account.access_key'), Kohana::config('amazon.account.secret_key'));
	}
}

