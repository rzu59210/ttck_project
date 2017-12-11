<?php

namespace ttckBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom' , null , array(
                'required' => true
                ))
            ->add('prenom' , null , array(
                'required' => true
                ))
            ->add('password' , 'password' , array(
                'required' => true,
                ))
            ->add('mail' , 'email' , array(
                'required' => true

                ))
            ->add('save','submit',array('label' => 'Enregistrer'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ttckBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ttckbundle_user';
    }
}
