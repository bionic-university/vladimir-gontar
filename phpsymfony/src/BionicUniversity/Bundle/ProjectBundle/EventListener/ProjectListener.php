<?php
/**
 * Created by PhpStorm.
 * User: volodya
 * Date: 13.11.14
 * Time: 14:08
 */

namespace BionicUniversity\Bundle\ProjectBundle\EventListener;

use BionicUniversity\Bundle\ProjectBundle\Entity\Project;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ProjectListener
{

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function prePersist(LifecycleEventArgs $event)
    {
        $entity = $event->getObject();
        if ($entity instanceof Project) {
            $em = $this->container->get('doctrine')->getManager();
            $status = $em->getRepository('BionicUniversityProjectBundle:Status')->find(1);
            $entity->setStatus($status);
        }
    }
} 