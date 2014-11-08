<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 08.11.14
 * Time: 15:35
 */

namespace BionicUniversity\Bundle\BlogBundle\EventListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class PostListener
{
    /**
     * @var SecurityContextInterface
     */
    private $securityContext;
    /**
     * @param SecurityContextInterface $securityContext
     */
    public function setSecurityContext($securityContext)
    {
        $this->securityContext = $securityContext;
    }
    public function prePersist(OnFlushEventArgs $event)
    {
        $entity = $event->getObject();
        if ($entity instanceof Post) {
            $entity->setCreated(new \DateTime);
            if ($this->securityContext->getToken()->isAuthenticated()) {
                $user = new User;
                $event->getObjectManager()->persist($user);
                $entity->setAuthor($user);
            }
        }
    }
}