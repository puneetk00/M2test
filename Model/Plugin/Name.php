<?php

namespace Puneet\Test\Model\Plugin;

class Name{
	
	public function aftergetName(\Puneet\Test\Model\Page\PageName $subject, $result){
		return $result . " - After_plugin_test";
	}
	
	public function beforesetName(\Puneet\Test\Model\Page\PageName $subject, $name){
		return "Before_plugin_test " . $name;
	}
	
	public function aroundgetName(\Puneet\Test\Model\Page\PageName $subject, callable $proceed){
		return " - mid - " . $proceed() . " - mid - ";
	}
	
}