<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TAmostrasAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnId')
            ->add('fnNumero')
            ->add('ftSerie')
            ->add('fdCriacao')
            ->add('fdColheita', 'doctrine_orm_date_range', array('label'=>'Data Colheita','date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('fdRecepcao')
            ->add('fdConclusao')
            ->add('fdLimite')
            ->add('ftResponsavelcolheita')
            ->add('fnLocalcolheita')
            ->add('fnOperador')
            ->add('fnCliente')
            ->add('fnModelo')
            ->add('fnTipoaprovacao')
            ->add('fdAutorizacao')
            ->add('fnProduto')
            ->add('fnTipocontrolo')
            ->add('fnIdOrcamento')
            ->add('ftEstado')
            ->add('fnEspecificacao')
            ->add('ftCumpreespecificacao')
            ->add('fdInicioanalise')
            ->add('fbFacturada')
            ->add('fnRequisicaocliente')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId')
            ->add('ftEstado')
            ->add('fbRelatorioemitido')
            ->add('serie')
            ->add('fnProduto')
            ->add('fdColheita')
            ->add('fdConclusao')
            ->add('fnCliente')
            ->add('fnLocalcolheita')
            ->add('ftConclusao')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;


        /*
            ->add('fnNumero')
            ->add('ftSerie')
            ->add('fdCriacao')
            ->add('fdRecepcao')

            ->add('fdLimite')
            ->add('ftResponsavelcolheita')
            ->add('fnIdOperador')
            ->add('fnModelo')
            ->add('fnTipoaprovacao')
            ->add('fdAutorizacao')
            ->add('ftOrigem')
            ->add('ftGrupoparametros')
            ->add('fnLegislacao')
            ->add('ftTipoemissaorelatorio')
            ->add('fdEmissaorelatorio')
            ->add('fnTipo')
            ->add('ftRefexterna')
            ->add('ftObs')
            ->add('fnTipocontrolo')
            ->add('fnIdOrcamento')

            ->add('fnEspecificacao')
            ->add('ftCumpreespecificacao')
            ->add('fdInicioanalise')
            ->add('fbFacturada')
            ->add('fnRequisicaocliente')*/
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('fnModelo', 'sonata_type_model', array('label' => 'Modelo', 'by_reference' => false))
            ->add('fnCliente', 'sonata_type_model', array('label' => 'Cliente', 'by_reference' => false))
            ->add('fnProduto', 'sonata_type_model', array('label' => 'Produto', 'by_reference' => false))
            ->add('fnTipo', 'sonata_type_model', array('label' => 'Tipo', 'by_reference' => false))
            ->add('fnTipocontrolo', 'sonata_type_model', array('label' => 'Tipo Controlo', 'by_reference' => false))
            ->add('ftObs', 'text', array('label' => 'Observações'))
            ->add('fdColheita', 'datetime', array('label'=>'Data/hora Colheita','date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('fnOperador')
            ->add('ftResponsavelcolheita', 'choice',  array('multiple' => false,'choices' => array('Cliente' => 'Cliente','Laboratorio' => 'Laboratorio','Outro' => 'Outro')))
            ->add('ftOrigem', 'text', array('label' => 'Ponto de Amostragem'))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fnId')
            ->add('fnNumero')
            ->add('ftSerie')
            ->add('fdCriacao')
            ->add('fdColheita')
            ->add('fdRecepcao')
            ->add('fdConclusao')
            ->add('fdLimite')
            ->add('ftResponsavelcolheita')
            ->add('fnLocalcolheita')
            ->add('fnOperador')
            ->add('fnCliente')
            ->add('fnModelo')
            ->add('fnTipoaprovacao')
            ->add('fdAutorizacao')
            ->add('fnProduto')
            ->add('ftOrigem')
            ->add('ftGrupoparametros')
            ->add('fnLegislacao')
            ->add('ftTipoemissaorelatorio')
            ->add('fbRelatorioemitido')
            ->add('fdEmissaorelatorio')
            ->add('fnTipo')
            ->add('ftRefexterna')
            ->add('ftConclusao')
            ->add('ftObs')
            ->add('fnTipocontrolo')
            ->add('fnIdOrcamento')
            ->add('ftEstado')
            ->add('fnEspecificacao')
            ->add('ftCumpreespecificacao')
            ->add('fdInicioanalise')
            ->add('fbFacturada')
            ->add('fnRequisicaocliente')
        ;
    }
}
