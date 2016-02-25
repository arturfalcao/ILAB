<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TLegislacaoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnId',null, array('label' => 'ID'))
            ->add('ftCodigo',null, array('label' => 'Codigo'))
            ->add('ftDescricao',null, array('label' => 'Descrição'))
            ->add('ftAlias',null, array('label' => 'Alias'))
            ->add('ftObservacao',null, array('label' => 'Observação'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId',null, array('label' => 'ID'))
            ->add('ftCodigo',null, array('label' => 'Codigo'))
            ->add('ftDescricao',null, array('label' => 'Descrição'))
            ->add('ftAlias',null, array('label' => 'Alias'))
            ->add('ftObservacao',null, array('label' => 'Observação'))
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
            ->add('ftCodigo', 'text', array('required' => true,'label' => 'Codigo'))
            ->add('ftDescricao', 'text', array('required' => true,'label' => 'Descrição'))
            ->add('ftAlias', 'text', array('required' => false,'label' => 'Alias'))
            ->add('ftObservacao', 'text', array('required' => false,'label' => 'Observação'))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fnId')
            ->add('ftCodigo')
            ->add('ftDescricao')
            ->add('ftAlias')
            ->add('ftObservacao')
        ;
    }
}
