<?php
namespace Kuzmich\CountReview\Controller\Product;
use Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
class View extends \Magento\Framework\App\Action\Action
{

    /**
     * @var PageFactory
     */
    private $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        
        return $resultPage;
    }
}
