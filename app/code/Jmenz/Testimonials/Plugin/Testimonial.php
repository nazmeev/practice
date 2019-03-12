<?php

namespace Jmenz\Testimonials\Plugin;

use Jmenz\Testimonials\Api\Data\TestimonialsInterface;


class Testimonial{
    public function beforeSetUserName(TestimonialsInterface $subject, $username){
        $username = "asdfasf";
        return $username;
    }

    public function aroundSetUserName(TestimonialsInterface $subject, callable $proceed, $username){
        if($subject->getContent() == 'ddd'){
            $subject->setContent('11222');
        }
        $result = $proceed($username);
        $result->setId(5);
        return $result;
    }


    public function afterSetUserName(TestimonialsInterface $subject, TestimonialsInterface $result){
        $result->setTitle("adsf");
        return $result;
    }
}