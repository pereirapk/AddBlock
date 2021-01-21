<?php
namespace GP\AddBlock\Block;

use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\View\Element\Template\Context;


class AddBlock extends \Magento\Framework\View\Element\Template
{
    protected $store;
	public function __construct(Context $context,StoreManagerInterface $store)
	{
        parent::__construct($context);
        $this->store = $store;
	}

	public function storeLanguage()
	{
        return $this->store->getStore()->getCode();
    }
    public function baseUrl(){
        return "show";
    }
}