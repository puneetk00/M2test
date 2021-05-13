<?php


namespace Puneet\Test\Model\Test;

class Fastload{
	
	protected $Slowload;
	public function __construct(Slowload $Slowload){
		$this->Slowload = $Slowload;
	}
	
	public function getvalue(){
		return "fastload value" . $this->getslowload();
	}
	
	public function getslowload(){
		$this->Slowload->getvalue();
	}
}