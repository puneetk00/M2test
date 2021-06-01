<?php

namespace Puneet\Test\Model\Page;

class PageName implements \Puneet\Test\Model\PageInterface{
	
	protected $name;
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function getName(){
		return $this->name;
	}
	
}