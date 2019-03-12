<?php

namespace Jmenz\Testimonials\Model;

use Jmenz\Testimonials\Api\TestimonialsRepositoryInterface;
use Jmenz\Testimonials\Api\Data\TestimonialsInterface;
use Jmenz\Testimonials\Api\Data\TestimonialsInterfaceFactory;
use Jmenz\Testimonials\Model\ResourceModel\Testimonials as ResourceModel;
use Magento\Framework\Event\ManagerInterface as EventManager;

class TestimonialsRepository implements TestimonialsRepositoryInterface
{
    /**
     * @var TestimonialsInterfaceFactory
     */
    private $testimonialsFactory;

    /**
     * @var ResourceModel
     */
    private $resourceModel;

    /**
     * @var EventManager
     */
    private $eventManager;

    /**
     * TestimonialsRepository constructor.
     * @param TestimonialsInterfaceFactory $testimonialsFactory
     * @param ResourceModel $resourceModel
     * @param EventManager $eventManager
     */
    public function __construct(
        TestimonialsInterfaceFactory $testimonialsFactory,
        ResourceModel $resourceModel,
        EventManager $eventManager
    ) {
        $this->testimonialsFactory = $testimonialsFactory;
        $this->resourceModel = $resourceModel;
        $this->eventManager = $eventManager;
    }

    /**
     * @inheritdoc
     */
    public function getById($id)
    {
        /** @var TestimonialsInterface $testimonial */
        $testimonial = $this->testimonialsFactory->create();
        $this->resourceModel->load($testimonial, $id);
        return $testimonial;
    }

    /**
     * @inheritdoc
     */
    public function save($testimonial)
    {
        $this->resourceModel->save($testimonial);
        $this->eventManager->dispatch('jmenz_testimonials_save_after', ['testimonial' => $testimonial]);
        return $testimonial;
    }

    /**
     * @inheritdoc
     */
    public function delete($testimonial)
    {
        $this->resourceModel->delete($testimonial);
    }

}
