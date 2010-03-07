<?php

return array
(
	'account' => array
	(
		'access_key' 	=> 'ACCESS_KEY',
		'secret_key'	=> 'SECRET_KEY'
	),
	
	'buckets' => array
	(
		'streaming' => array
		(
			'domain' 	=> 'SUBDOMAIN.cloudfront.net',
			'streaming'	=> TRUE,
		),
		
		'download' => array
		(
			'domain' 	=> 'SUBDOMAIN.cloudfront.net',
			'streaming'	=> FALSE,
		)
	),
);