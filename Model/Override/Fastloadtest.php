<?php

namespace Puneet\Test\Model\Override;

class Fastloadtest extends \Puneet\Test\Model\Test\Fastload{
	
	 public function getvalue(){
		 return "My override value test";
	 }
}