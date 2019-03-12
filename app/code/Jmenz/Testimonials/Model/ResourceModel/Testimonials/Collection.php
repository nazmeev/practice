<?php

namespace Jmenz\Testimonials\Model\ResourceModel\Testimonials;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize resource model for collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init(
            \Jmenz\Testimonials\Model\Testimonials::class,
            \Jmenz\Testimonials\Model\ResourceModel\Testimonials::class
        );
    }
}