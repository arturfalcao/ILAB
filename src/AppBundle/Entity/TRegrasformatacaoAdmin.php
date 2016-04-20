<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TRegrasformatacaoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnOrdem')
            ->add('ftDescricao')
            ->add('fnLimiteinferior')
            ->add('fnLimitesuperior')
            ->add('fnCasasdecimais')
            ->add('fbFormatoexponencial')
            ->add('fbFormatoutilizador')
            ->add('ftExpressaoutilizador')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnOrdem')
            ->add('ftDescricao')
            ->add('fnLimiteinferior')
            ->add('fnLimitesuperior')
            ->add('fnCasasdecimais')
            ->add('fbFormatoexponencial')
            ->add('fbFormatoutilizador')
            ->add('ftExpressaoutilizador')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('fnOrdem')
            ->add('ftDescricao','text', array('required' => false,'label' => 'Descrição'))
            ->add('fnLimiteinferior','text', array('label' => '>='))
            ->add('fnLimitesuperior','text', array('label' => '<'))
            ->add('fbFormatoexponencial','checkbox', array('required' => false,'label' => 'Exponencial','attr' => array('class' => "regra_exp")))
            ->add('fbFormatoutilizador','checkbox', array('required' => false,'label' => 'Normal','attr' => array('class' => "regra_normal")))
            ->add('fnCasasdecimais','number', array('required' => false,'label' => 'Casas Decimais','attr' => array('class' => "casasdecimais")))
            ->add('ftExpressaoutilizador','text', array('required' => false,'label' => 'Expressão Utilizador','attr' => array('class' => "expre_utilizador"),))
        ;



    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fnOrdem')
            ->add('ftDescricao')
            ->add('fnLimiteinferior')
            ->add('fnLimitesuperior')
            ->add('fnCasasdecimais')
            ->add('fbFormatoexponencial')
            ->add('fbFormatoutilizador')
            ->add('ftExpressaoutilizador')
        ;
    }
}
