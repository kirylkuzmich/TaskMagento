<?php
namespace Kuzmich\CountReview\Block;
use Magento\Framework\View\Element\Template;

class CountReview extends Template
{

    /**
     * @return int
     */
    function getCountReviews()
    {
        $objectManager =  \Magento\Framework\App\ObjectManager::getInstance();
        $registry = $objectManager->get('\Magento\Framework\Registry');
        $currentProduct = $registry->registry('current_product');
        $reviews = $objectManager
            ->get('Magento\Review\Model\Review')
            ->getResourceCollection()
            ->addEntityFilter('product',  $currentProduct->getId());
        $reviewsCount =  count($reviews);
        
        return $reviewsCount;
    }

}