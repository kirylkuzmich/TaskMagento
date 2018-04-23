<?php
namespace Kuzmich\CategoryA\Block;

use \Magento\Backend\Block\Template\Context;
use \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
class CategoryA extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory
     */
    private $categoryCollectionFactory;

    public function __construct(Context $context, CollectionFactory $categoryCollectionFactory)
    {
        parent::__construct($context);
        $this->categoryCollectionFactory = $categoryCollectionFactory;
    }


    /**
     * @param $isActive
     * @param $isOrder
     * @param $condition
     * @return \Magento\Catalog\Model\ResourceModel\Category\Collection
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getCategoryCollection($isActive, $isOrder, $condition)
    {
        $collection = $this->categoryCollectionFactory->create();
        $collection
            ->addAttributeToSelect('*')
            ->addAttributeToFilter('name', array("like"=>"%".$condition."%"));

        if ($isActive)
        {
            $collection->addIsActiveFilter();
        }

        if($isOrder)
        {
            $collection->addOrderField('name');
        }

        return $collection;
    }
}
