<?php
/**
 * @Author : Pkgroup
 *@Package : Pkgroup_Customeroffer
 *@Developer : Puneet Kumar
 */
namespace Puneet\Test\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		//die("i am here");
		return $this->_pageFactory->create();
	}
}