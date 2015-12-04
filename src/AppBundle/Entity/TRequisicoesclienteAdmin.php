<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TRequisicoesclienteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnId')
            ->add('fnIdCliente')
            ->add('ftCodigo')
            ->add('ftObservacao')
            ->add('fdDatarequisicao')
            ->add('fbActiva')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId')
            ->add('fnIdCliente')
            ->add('ftCodigo')
            ->add('ftObservacao')
            ->add('fdDatarequisicao')
            ->add('fbActiva')
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
            ->add('fnIdCliente')
            ->add('ftCodigo')
            ->add('ftObservacao')
            ->add('fdDatarequisicao')
            ->add('fbActiva')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fnId')
            ->add('fnIdCliente')
            ->add('ftCodigo')
            ->add('ftObservacao')
            ->add('fdDatarequisicao')
            ->add('fbActiva')
        ;
    }
}
