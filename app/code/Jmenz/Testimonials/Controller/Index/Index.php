<?php

namespace Jmenz\Testimonials\Controller\Index;

use Jmenz\Testimonials\Api\Data\TestimonialsInterface;
use Jmenz\Testimonials\Api\TestimonialsRepositoryInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Index
 */
class Index extends Action
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * @var TestimonialsRepositoryInterface
     */
    private $testimonialsRepository;

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param TestimonialsRepositoryInterface $testimonialsRepository
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        TestimonialsRepositoryInterface $testimonialsRepository,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->pageFactory = $pageFactory;
        $this->testimonialsRepository = $testimonialsRepository;
        parent::__construct($context);
    }

    /**
     * @return void
     */
    public function execute()
    {
//        /** @var TestimonialsInterface $testimotials */
//        $testimotials = $this->testimonialsRepository->getById($this->getRequest()->getParam('id'));
//
//        print_r($testimotials->getData());

        print_r($this->scopeConfig->getValue(
            'testimonials/general/page_title',
            ScopeInterface::SCOPE_STORES
        ));

//        return $this->pageFactory->create();
    }
}
