<?php

require_once __DIR__ . '/../local/vendor/autoload.php';

use Pheanstalk\Pheanstalk;

class SendEmailJob {
	
	private $pheanstalk;
	private $data;
	
	function __construct() {		
		$this->pheanstalk = new Pheanstalk('127.0.0.1');
	}
	
	function send($data) {
		$this->data = $data;
		if(!empty($this->data)) {
			$this->pheanstalk
				->useTube('email_queue')
				->put(json_encode($this->data));
		}
	}
}