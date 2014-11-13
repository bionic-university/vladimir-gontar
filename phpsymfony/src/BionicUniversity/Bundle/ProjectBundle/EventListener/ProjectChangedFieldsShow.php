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

class ProjectChangedFieldsShow {

    public function preUpdate(LifecycleEventArgs $eventArgs){
        $entity = $eventArgs->getObject();
        if ($entity instanceof Project){
            $changeSet = $changeArray = $eventArgs->getEntityChangeSet();
            // если нету изменений - сюда не попадем вообще
            echo('Changed fields: '.implode(', ', array_keys($changeSet)));
            //exit();
        }
    }

}