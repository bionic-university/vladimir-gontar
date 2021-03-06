<?php

namespace BionicUniversity\Bundle\ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('budget')
            ->add('user')
            ->add('status');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'BionicUniversity\Bundle\ProjectBundle\Entity\Project'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bionicuniversity_bundle_projectbundle_project';
    }
}
