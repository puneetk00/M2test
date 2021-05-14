<?php


namespace Puneet\Test\Model\Test;

class Fastload{
	
	protected $Slowload;
	protected $factoryclassvalue;
	public function __construct(Slowload $Slowload){
		$this->Slowload = $Slowload;
	}
	
	
	// Proxy realtime example
	public function getvalue(){
		return "fastload value" . $this->getslowload();
	}
	
	
	public function getslowload(){
		$this->Slowload->getvalue();
	}
	// Proxy realtime example!
	
	
	// Factories classes realtime example
	public function setfactoryvalue($strings){
		$this->factoryclassvalue = $strings;
	}
	public function getfactoryvalue(){
		return $this->factoryclassvalue;
	}
	
	public function setfactorynoninjectablevalue($strings){
		$this->factoryclassvalue = $strings;
	}
	public function getfactorynoninjectablevalue(){
		return $this->factoryclassvalue;
	}
	// Factories classes realtime example!
}