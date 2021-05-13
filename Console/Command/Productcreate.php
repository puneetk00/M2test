<?php


namespace Puneet\Test\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Productcreate extends Command
{
	
	/** @var \Magento\Framework\App\State **/
	private $state;

	public function __construct(\Magento\Framework\App\State $state) {
		$this->state = $state;
		parent::__construct();
	}

    const NAME_ARGUMENT = "name";
    const NAME_OPTION = "option";

    /**
     * {@inheritdoc}
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ) {
		
		$this->state->setAreaCode(\Magento\Framework\App\Area::AREA_ADMINHTML);
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$_products = $objectManager->create('\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory')->create();
		$_products->addAttributeToSelect('*');
		$_products->addAttributeToFilter('name',['like' => '%new%']);
		
		foreach($_products as $product){
			
			$name = str_replace("New","Used",$product->getName());
			$sku = str_replace("New","Used",$product->getSku());
			$urlkey = str_replace("New","Used",$product->getUrlKey());
			$metatitle = str_replace("New","Used",$product->getMetaTitle());
			
			$used = $objectManager->create('\Magento\Catalog\Model\Product')->load($product->getId());
			$used->setIsDuplicate(true);
			$used->setName($name);
			$used->setSku($sku);
			$used->setUrlKey($urlkey);
			$used->setMetaTitle($metatitle);
			$used->save();
			
			$name = str_replace("New","REFURBISHED",$product->getName());
			$sku = str_replace("New","REFURBISHED",$product->getSku());
			$urlkey = str_replace("New","REFURBISHED",$product->getUrlKey());
			$metatitle = str_replace("New","REFURBISHED",$product->getMetaTitle());
			
			$REFURBISHED = $objectManager->create('\Magento\Catalog\Model\Product')->load($product->getId());
			$REFURBISHED->setIsDuplicate(true);
			$REFURBISHED->setName($name);
			$REFURBISHED->setSku($sku);
			$REFURBISHED->setUrlKey($urlkey);
			$REFURBISHED->setMetaTitle($metatitle);
			$REFURBISHED->save();
			
			
		}
		
        $output->writeln("Product created");
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName("puneet_test:productcreate");
        $this->setDescription("Create product duplicate");
        parent::configure();
    }
}


	