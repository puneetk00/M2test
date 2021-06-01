<?php
/**
 * @Author : Pkgroup
 * @Package : Pkgroup_Customeroffer
 * @Developer : Puneet Kumar
 */
namespace Puneet\Test\Block;

class Index extends \Magento\Framework\View\Element\Template
{
	protected $Fastload;
	protected $FastloadFactory;
	protected $PageName;
	public function __construct(
        \Magento\Backend\Block\Template\Context $context,
		\Puneet\Test\Model\Test\Fastload $Fastload,
		\Puneet\Test\Model\Test\FastloadFactory $FastloadFactory,
		\Puneet\Test\Model\Page\PageName $PageName
	)
    {
		$this->PageName = $PageName;
		$this->Fastload = $Fastload;
		$this->FastloadFactory = $FastloadFactory;
		parent::__construct($context);
    }
	
	public function pagetitleobj(){
		return $this->PageName;
	}
		
	public function getValue(){
		echo $this->Fastload->getvalue();
	}
	
	// injectable example
	public function setvalueforfactory(){
		$this->Fastload->setfactoryvalue("injectable class");
	}
	public function getvalueforfactory(){
		$this->setvalueforfactory();
		return $this->Fastload->getfactoryvalue();
	}
	
	public function setFactorynoninjectable(){
		$object = $this->FastloadFactory->create();
		$object->setfactorynoninjectablevalue("non injectable method");
		return $object; 
	}
	
	public function getFactorynoninjectable(){
		$varobject = $this->setFactorynoninjectable();
		return $varobject->getfactorynoninjectablevalue();
	}
	
}
