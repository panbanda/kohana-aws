# Amazon AWS for Kohana 3+

A module for managing amazon aws (including EC2, SQS, S3, and AWIS) [Kohana framework](http://kohanaphp.com/) (v3.0+).

## Quick Start

This is a wrapper module to avoid entering your private key and and access key each time you call methods.  It also contains a helper for linking to assets inside of your S3 buckets.  It supports streaming URLs if your bucket is streaming.  Please see the config file.

### Modify the Config File

Move config/amazon.php to your application config directory and modify your Amazon security information as Amazon indicates.

### Code Away!

Example of a class:

    class Controller_Amazon extends Controller {
        
        public function action_s3()
        {
            $s3 = new Amazon_S3;
            $s3->upload('assets/icons/fast_forward.png', 'test.png', 'bucket_name');
			
            echo Amazon::asset('test.png', 'bucket_name');
        }
		
		public function action_sqs()
		{
			$sqs = new Amazon_SQS;
			
			$url = 'http://queue.amazonaws.com/inputqueue';
			
			echo Kohana::debug($sqs->listQueues());
			echo Kohana::debug($sqs->getSize($url));
			echo Kohana::debug($sqs->receiveMessage(1, NULL, $url));
		}
        
    }