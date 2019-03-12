<?php

namespace Jmenz\Testimonials\Model;

use Jmenz\Testimonials\Api\Data\TestimonialsInterface;
use Magento\Framework\Model\AbstractModel;

class Testimonials extends AbstractModel implements TestimonialsInterface
{

    /**
     * Set resource model
     */
    protected function _construct()
    {
        $this->_init(\Jmenz\Testimonials\Model\ResourceModel\Testimonials::class);
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param integer $id
     * @return TestimonialsInterface
     */
    public function setId($id)
    {
        $this->setData(self::ID, $id);
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @param string $title
     * @return TestimonialsInterface
     */
    public function setTitle($title)
    {
        $this->setData(self::TITLE, $title);
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * @param string $content
     * @return TestimonialsInterface
     */
    public function setContent($content)
    {
        $this->setData(self::CONTENT, $content);
        return $this;
    }

    public function getUserName()
    {
        return $this->getData(self::USER_NAME);
    }

    public function setUserName($userName)
    {
        $this->setData(self::USER_NAME, $userName);
        return $this;
    }
}
