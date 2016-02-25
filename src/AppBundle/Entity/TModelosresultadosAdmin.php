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
            ->add('fbIncluirnorelatorio',null, array('label' => 'Incluir Relatorio'))
            ->add('fbGamavalores',null, array('label' => 'Gama de Valores'))
            ->add('fnMaximo',null, array('label' => 'Maximo'))
            ->add('fnMinimo',null, array('label' => 'Minimo'))
            ->add('ftMensagemutilizador',null, array('label' => 'MSG Utilizador'))
            ->add('ftDescricao',null, array('label' => 'Descri��o'))
            ->add('fnLimitequantificacao',null, array('label' => 'Limite'))
            ->add('ftObservacao',null, array('label' => 'Observa��o'))
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
            ->add('fnLimitequantificacao','text', array('label' => 'Quantifica��o'))
            ->add('fbGamavalores',null, array('label' => 'Gama'))
            ->add('fnMaximo','number', array('label' => 'M�ximo'))
            ->add('fnMinimo','number', array('label' => 'M�nimo'))
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
            ->with('Novo Modelo',array('class'=> 'col_esq',))
                ->add('fbActivo',null, array('label' => 'Activo'))
                ->add('ftDescricao','text', array('label' => 'Descri��o'))
                ->add('fnUnidade', 'sonata_type_model', array('label' => 'Unidade de Medida', 'by_reference' => false))
                ->add('fnTipoarredondamento', 'sonata_type_model', array('label' => 'Tipo de Arredondamento','by_reference' => false))
                ->add('ftObservacao','text', array('label' => 'Observa��o'))
            ->end()
            ->with('',array('class'=> 'col_esq',))
                ->add('fbGamavalores')
                ->add('fbIncluirnorelatorio','checkbox', array('label' => 'Incluir no Relatorio'))
                ->add('fnMaximo','number', array('label' => 'Maximo'))
                ->add('fnMinimo','number', array('label' => 'Minimo'))
                ->add('ftMensagemutilizador','text', array('label' => 'Mensagem Utilizador'))
                ->add('fnLimitequantificacao','integer', array('label' => 'Limite Quantifica��o'))

            ->end()
            ->with('Gallery')
            ->add('RegasFormatacao', 'sonata_type_collection', array(
                'cascade_validation' => true,
                'label' => 'Regras de Formata��o',
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
