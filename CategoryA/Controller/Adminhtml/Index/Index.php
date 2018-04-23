<?php
namespace Kuzmich\CategoryA\Controller\Adminhtml\Index;
use \Magento\Backend\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
class Index extends \Magento\Backend\App\Action
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
        return  $resultPage = $this->resultPageFactory->create();
    }
}
?>
  