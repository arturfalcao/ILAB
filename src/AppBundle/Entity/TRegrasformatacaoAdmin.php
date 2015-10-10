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
            ->add('fnId')
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
            ->add('fnId')
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
            ->add('fnId')
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
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fnId')
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
