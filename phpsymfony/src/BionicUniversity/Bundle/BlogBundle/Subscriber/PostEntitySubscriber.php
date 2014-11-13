<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 08.11.14
 * Time: 16:14
 */

namespace BionicUniversity\Bundle\BlogBundle\Subscriber;


use BionicUniversity\Bundle\BlogBundle\Entity\Post;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class PostEntitySubscriber
{
    public function prePersist(LifecycleEventArgs $event)
    {
        $this->updateCommentsCount($event->getObject());
    }

    private function updateCommentsCount(Post $post)
    {
        $post->updateCommentsCounter();
    }
}