<?php

namespace BionicUniversity\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, array('label' => 'Название'))
            ->add('excerpt', null, array('label' => 'Краткое описание'))
            ->add('content', null, array('label' => 'Полное описание'))
            //->add('status')
            //->add('author')
            ->add('Category', 'entity', array(
                'class'    => 'BionicUniversityNewsBundle:Category',
                'property' => 'name',
                'expanded' => false,
                'multiple' => false,
                'label'  => 'Выберите категорию:',
            ))
            ->add('Tag', 'entity', array(
                'class'    => 'BionicUniversityNewsBundle:Tag',
                'property' => 'name',
                'expanded' => false,
                'multiple' => true,
                'label'  => 'Выберите теги:',
            ))

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BionicUniversity\NewsBundle\Entity\Article',
            //'em' => '',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bionicuniversity_newsbundle_article';
    }
}
