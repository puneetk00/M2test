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
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
		\Puneet\Test\Model\Test\Fastload $Fastload
    )
    {    
		$this->Fastload = $Fastload;
		parent::__construct($context);
    }
	
	public function getValue(){
		echo $this->Fastload->getvalue();
	}
	
}
