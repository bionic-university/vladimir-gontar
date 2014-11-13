<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 13.11.14
 * Time: 13:19
 */

namespace BionicUniversity\Bundle\ProjectBundle\EventListener;

use BionicUniversity\Bundle\ProjectBundle\Entity\User;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;


class UserListener
{
    public function prePersist(LifecycleEventArgs $event)
    {
        $entity = $event->getObject();
        if ($entity instanceof User) {
            echo('send email to admin about new user ' . $entity->getFirstName() . ' ' . $entity->getLastName(
                )); // TODO send mail
            //exit();
        }

    }
} 