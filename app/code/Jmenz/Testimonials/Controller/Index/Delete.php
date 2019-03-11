<?php

namespace Jmenz\Testimonials\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;
use Jmenz\Testimonials\Api\Data\TestimonialsInterface;
use Jmenz\Testimonials\Api\TestimonialsRepositoryInterface;

/**
 * Class Delete
 */
class Delete extends Action
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
     * Delete constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param TestimonialsRepositoryInterface $testimonialsRepository
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        TestimonialsRepositoryInterface $testimonialsRepository
    )
    {
        $this->pageFactory = $pageFactory;
        $this->testimonialsRepository = $testimonialsRepository;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /** @var TestimonialsInterface $testimotials */
        $testimotials = $this->testimonialsRepository
            ->getById($this->getRequest()->getParam('id'));

        $this->testimonialsRepository->delete($testimotials);
        return $this->pageFactory->create();
    }
}