<?php

namespace Puneet\Test\Model\Test;

Class Slowload{
	
	public function __construct(){
		$writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test1.log');
		$logger = new \Zend\Log\Logger();
		$logger->addWriter($writer);
		$logger->info('Your text message');
	}
	
	public function getvalue(){
		return "slowload value";
	}
}