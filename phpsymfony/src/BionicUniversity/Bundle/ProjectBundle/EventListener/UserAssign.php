<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 13.11.14
 * Time: 17:12
 */

namespace BionicUniversity\Bundle\ProjectBundle\EventListener;


use BionicUniversity\Bundle\ProjectBundle\Entity\Project;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;


class UserAssign implements EventSubscriber
{

    public function getSubscribedEvents()
    {
        return array(
            'prePersist',
            'preUpdate'
        );
    }

    public function prePersist(LifecycleEventArgs $event)
    {
        $entity = $event->getObject();
        if ($entity instanceof Project) {
            if (null !== $entity->getUser()) {
                $this->sendMail();
            }
        }
    }

    public function preUpdate(LifecycleEventArgs $eventArgs)
    {
        $entity = $eventArgs->getObject();
        if ($entity instanceof Project) {
            $changeSet = $eventArgs->getEntityChangeSet();
            if (isset($changeSet['user']) && $changeSet['user'][1] != null) {
                $this->sendMail();
            }
        }
    }

    public function sendMail()
    {
        echo('send email USER ASSIGN'); //TODO
        //exit();
        return true;
    }
}