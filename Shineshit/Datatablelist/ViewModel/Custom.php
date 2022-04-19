<?php

namespace Shineshit\Datatablelist\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;


class Custom implements ArgumentInterface
{
     protected $_productCollectionFactory;

     protected $customerFactory;

    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory
        )
    {
        $this->_productCollectionFactory = $productCollectionFactory;
    }
    public function getProductcollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        return $collection;
    }

}
