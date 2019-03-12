<?php
namespace Jmenz\Testimonials\Api;

/**
 * Interface TestimonialsRepositoryInterface
 */
interface TestimonialsRepositoryInterface
{
    /**
     * @param integer $id
     * @return \Jmenz\Testimonials\Api\Data\TestimonialsInterface
     */
    public function getById($id);

    /**
     * @param \Jmenz\Testimonials\Api\Data\TestimonialsInterface $testimonial
     * @return \Jmenz\Testimonials\Api\Data\TestimonialsInterface
     */
    public function save($testimonial);

    /**
     * @param \Jmenz\Testimonials\Api\Data\TestimonialsInterface $testimonial
     * @return void
     */
    public function delete($testimonial);
}