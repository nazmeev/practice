<?php

namespace Jmenz\Testimonials\Controller\Adminhtml\Testimonials;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class Edit
 */
class Edit extends Action
{
    const ADMIN_RESOURCE = 'Jmenz_Testimonials::all_access';

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

        $resultPage->getConfig()->getTitle()->set(__("Edit Testimonial"));
        $resultPage->getConfig()->getTitle()->prepend(__("Edit Testimonial"));
        return $resultPage;
    }
}
