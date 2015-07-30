<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TParametrosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ftDescricao')
            ->add('fdLimiterealizacao')
            ->add('ftCumpreespecificacao')
            ->add('ftConclusao')
            ->add('ftObservacao')
            ->add('fdCriacao')
            ->add('fdConclusao')
            ->add('fdAutorizacao')
            ->add('fnPrecocompra')
            ->add('fnPrecovenda')
            ->add('fnFactorcorreccao')
            ->add('fbAcreditado')
            ->add('fnLimitelegal')
            ->add('ftFormulaquimica')
            ->add('fnVolumeminimo')
            ->add('fbConfirmacao')
            ->add('fbContraanalise')
            ->add('fdRealizacao')
            ->add('fnMetodo', 'entity', array(
                'class' => 'AppBundle:TMetodos',
                'placeholder' => 'Escolha uma opção',
                'property' => 'FtDescricao'
            ))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TParametros',
            'csrf_protection' => false // usado para desativar csrf via ajax
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_tparametros';
    }
}
