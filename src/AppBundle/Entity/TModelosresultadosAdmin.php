<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TModelosresultadosAdmin extends Admin
{

    public function prePersist($project)
    {
        $this->preUpdate($project);
    }

    public function preUpdate($project)
    {
        $project->setRegasFormatacao($project->getRegasFormatacao());
    }


    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fbActivo',null, array('label' => 'Activo'))
            ->add('fbIncluirnorelatorio',null, array('label' => 'Incluir Relatório'))
            ->add('fbGamavalores',null, array('label' => 'Gama de Valores'))
            ->add('fnMaximo',null, array('label' => 'Máximo'))
            ->add('fnMinimo',null, array('label' => 'Mínimo'))
            ->add('ftMensagemutilizador',null, array('label' => 'MSG Utilizador'))
            ->add('ftDescricao',null, array('label' => 'Descrição'))
            ->add('fnLimitequantificacao',null, array('label' => 'Limite'))
            ->add('ftObservacao',null, array('label' => 'Observação'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId','number', array('label' => 'ID'))
            ->add('fbActivo',null, array('label' => 'Activo'))
            ->add('fbIncluirnorelatorio',null, array('label' => 'Boletim'))
            ->add('ftDescricao','text', array('label' => 'Nome'))
            ->add('fnUnidade','text', array('label' => 'Unidades'))
            ->add('fnLimitequantificacao','text', array('label' => 'Quantificação'))
            ->add('fbGamavalores',null, array('label' => 'Gama de Valores'))
            ->add('fnMaximo','number', array('label' => 'Máximo'))
            ->add('fnMinimo','number', array('label' => 'Mínimo'))
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
            ->with('Novo Modelo',array('class'=> 'col-md-6'))
                ->add('fbActivo',null, array('label' => 'Activo'))
                ->add('ftDescricao','text', array('label' => 'Descrição'))
                ->add('fnUnidade', 'sonata_type_model', array('label' => 'Unidade de Medida', 'by_reference' => false))
                ->add('fnTipoarredondamento', 'sonata_type_model', array('label' => 'Tipo de Arredondamento','by_reference' => false))
                ->add('ftObservacao','text', array('label' => 'Observação'))
                ->add('fbGamavalores',null,array('label' => 'Gama de Valores'))
                ->add('fbIncluirnorelatorio','checkbox', array('label' => 'Incluir no Relatório'))
                ->add('fnMaximo','number', array('label' => 'Máximo'))
                ->add('fnMinimo','number', array('label' => 'Mínimo'))
                ->add('ftMensagemutilizador','text', array('label' => 'Mensagem Utilizador'))
                ->add('fnLimitequantificacao','integer', array('label' => 'Limite Quantificação'))
            ->end()

            ->with('Gallery',array('class'=> 'col-md-6'))
            ->add('RegasFormatacao', 'sonata_type_collection', array(
                'cascade_validation' => true,
                'label' => 'Regras de Formatação',
            ), array(
                    'edit'              => 'inline',
                    'inline'            => 'table',
                    'sortable'          => 'position',
                )
            )
            ->end()
        ;

    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fbActivo')
            ->add('fbIncluirnorelatorio')
            ->add('fbGamavalores')
            ->add('fnMaximo')
            ->add('fnMinimo')
            ->add('ftMensagemutilizador')
            ->add('ftDescricao')
            ->add('fnLimitequantificacao')
            ->add('ftObservacao')
        ;
    }
}
