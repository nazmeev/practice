<?php

namespace Jmenz\Testimonials\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;
use Jmenz\Testimonials\Api\Data\TestimonialsInterface;
use Jmenz\Testimonials\Api\Data\TestimonialsInterfaceFactory;
use Jmenz\Testimonials\Api\TestimonialsRepositoryInterface;

/**
 * Class Save
 */
class Save extends Action
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
     * @var TestimonialsInterfaceFactory
     */
    private $testimonialsFactory;

    /**
     * Save constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param TestimonialsRepositoryInterface $testimonialsRepository
     * @param TestimonialsInterfaceFactory $testimonialsFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        TestimonialsRepositoryInterface $testimonialsRepository,
        TestimonialsInterfaceFactory $testimonialsFactory
    )
    {
        $this->pageFactory = $pageFactory;
        $this->testimonialsRepository = $testimonialsRepository;
        $this->testimonialsFactory = $testimonialsFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /** @var TestimonialsInterface $testimotials */
        $testimotials = $this->testimonialsFactory->create();

        $testimotials->setTitle('title')
            ->setContent('sdfsdf')
            ->setUserName('Petro');

        $this->testimonialsRepository->save($testimotials);

        print_r($testimotials->getData());

        return $this->pageFactory->create();
    }
}