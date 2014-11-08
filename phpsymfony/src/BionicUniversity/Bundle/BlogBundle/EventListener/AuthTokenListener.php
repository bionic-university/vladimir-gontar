<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 01.11.14
 * Time: 17:16
 */

namespace BionicUniversity\Bundle\BlogBundle\EventListener;


use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class AuthTokenListener {
    public function onKernelRequest(GetResponseEvent $event){


        $get = $event->getRequest()->query;
        /*
        var_dump($get);
         */


    }

} 