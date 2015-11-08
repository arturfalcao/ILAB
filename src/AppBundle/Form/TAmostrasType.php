<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TAmostrasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fnIdCliente', 'entity', array('class' => 'AppBundle:TClientes'))
            ->add('fnIdLocalcolheita', 'entity', array('class' => 'AppBundle:TClientes'))
            ->add('fnIdCliente', 'entity', array('class' => 'AppBundle:TClientes'))
            ->add('fnIdCliente', 'entity', array('class' => 'AppBundle:TClientes'))
            ->add('save', 'submit', array('label' => 'Gravar'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TAmostras'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Novo_Planeamento';
    }
}
