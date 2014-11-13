<?php

namespace BionicUniversity\Bundle\BlogBundle\Subscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class BlogSubscriber implements EventSubscriberInterface
{
    static public function getSubscribedEvents()
    {
        return array(
            'kernel.response' => 'onKernelResponse',
            'kernel.request' => 'onKernelRequest',
        );
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        echo('onKernelRequest' . "\r");

    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        echo('onKernelResponse');
        exit();

    }

}