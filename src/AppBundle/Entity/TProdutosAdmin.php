<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TProdutosAdmin extends Admin
{

    public function prePersist($project)
    {
        $project->setfnEspecificacoes($project->getfnEspecificacoes());
    }
    public function preUpdate($project)
    {
        $project->setfnEspecificacoes($project->getfnEspecificacoes());
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('ftCodigo')
            ->add('ftDescricao')
            ->add('ftAlias')
            ->add('fnEspecificacoes')
            ->add('fnFamiliaproduto')
            ->add('fnLegislacao')
            ->add('ftObservacao')

        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper

            ->add('ftCodigo')
            ->add('ftDescricao')
            ->add('ftAlias')
            ->add('fnFamiliaproduto')
            ->add('fnLegislacao')
            ->add('fnEspecificacoes')
            ->add('ftObservacao')
            ->add('fbActivo')
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

            ->add('ftCodigo')
            ->add('ftDescricao')
            ->add('ftAlias')
            ->add('fnFamiliaproduto', 'sonata_type_model', array('label' => 'Familia do Produto', 'by_reference' => false))
            ->add('fnEspecificacoes', 'sonata_type_model', array('btn_add' => false,'multiple' => true, 'by_reference' => false))
            ->add('fnLegislacao', 'sonata_type_model', array('label' => 'Legislação', 'by_reference' => false))
            ->add('ftObservacao', 'text', array('label' => 'Observações', 'by_reference' => false))
        ;

    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('ftCodigo')
            ->add('ftDescricao')
            ->add('ftAlias')
            ->add('fnEspecificacoes')
            ->add('fnFamiliaproduto')
            ->add('fnLegislacao')
            ->add('ftObservacao')

        ;
    }
}
