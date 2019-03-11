<?php

namespace Jmenz\Testimonials\Api\Data;

interface TestimonialsInterface
{
    const ID = 'id';

    const TITLE = 'title';

    const CONTENT = 'content';

    const USER_NAME = 'user_name';

    /**
     * @return integer
     */
    public function getId();

    /**
     * @param integer $id
     * @return TestimonialsInterface
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return TestimonialsInterface
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $content
     * @return TestimonialsInterface
     */
    public function setContent($content);

    /**
     * @return string
     */
    public function getUserName();

    /**
     * @param string $userName
     * @return TestimonialsInterface
     */
    public function setUserName($userName);


}