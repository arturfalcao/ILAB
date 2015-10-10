<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TModelosamostraAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnId')
            ->add('fbActivo')
            ->add('ftDescricao')
            ->add('fnLimitedias')
            ->add('fnIdOrcamento')
            ->add('ftObservacao')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId')
            ->add('fbActivo')
            ->add('ftDescricao')
            ->add('fnLimitedias')
            ->add('fnIdOrcamento')
            ->add('ftObservacao')
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
            ->add('fbActivo')
            ->add('ftDescricao')
            ->add('fnLimitedias')
            ->add('fnIdOrcamento')
            ->add('ftObservacao')
            ->add('fnCliente', 'sonata_type_model', array('label' => 'Cliente','by_reference' => false))
            ->add('fnTipoaprovacao', 'sonata_type_model', array('label' => 'Tipo Aprova��o','by_reference' => false))
            ->add('fnProduto', 'sonata_type_model', array('label' => 'Produto','by_reference' => false))
            ->add('fnLegislacao', 'sonata_type_model', array('label' => 'Legisla��o','by_reference' => false))
            ->add('fnTipoamostra', 'sonata_type_model', array('label' => 'Tipo Amostra','by_reference' => false))
            ->add('fnTipocontrolo', 'sonata_type_model', array('label' => 'Tipo Controlo','by_reference' => false))
            ->add('fnGrupoparametros', 'sonata_type_model', array('label' => 'Grupo Parametros','by_reference' => false))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fnId')
            ->add('fbActivo')
            ->add('ftDescricao')
            ->add('fnLimitedias')
            ->add('fnIdOrcamento')
            ->add('ftObservacao')
        ;
    }
}
