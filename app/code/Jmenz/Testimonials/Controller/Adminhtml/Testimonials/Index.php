<?php

namespace Jmenz\Testimonials\Controller\Adminhtml\Testimonials;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class Index
 */
class Index extends Action
{
    const ADMIN_RESOURCE = 'Jmenz_Testimonials::base';

    /**
     * @var PageFactory
     */
    private $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * List action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();

        $resultPage->setActiveMenu('Jmenz_Testimonials::testimonials');
        $resultPage->getConfig()->getTitle()->set(__("Testimonials"));
        $resultPage->getConfig()->getTitle()->prepend(__("Testimonials"));

        return $resultPage;
    }
}
