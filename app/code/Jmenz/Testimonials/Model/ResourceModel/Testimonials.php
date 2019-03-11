<?php

namespace Jmenz\Testimonials\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Jmenz\Testimonials\Api\Data\TestimonialsInterface;

class Testimonials extends AbstractDb
{
    const TABLE_NAME = "testimonials";

    /**
     * Source resource model constructor
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, TestimonialsInterface::ID);
    }
}