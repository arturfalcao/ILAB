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
            ->add('fdColheita')
            ->add('fdRecepcao')
            ->add('fdConclusao')
            ->add('fdLimite')
            ->add('ftResponsavelcolheita')
            ->add('fnIdLocalcolheita')
            ->add('fnIdOperador')
            ->add('fnIdCliente')
            ->add('fnIdModelo')
            ->add('fnIdTipoaprovacao')
            ->add('fdAutorizacao')
            ->add('fnIdProduto')
            ->add('ftOrigem')
            ->add('ftGrupoparametros')
            ->add('fnIdLegislacao')
            ->add('ftTipoemissaorelatorio')
            ->add('fbRelatorioemitido')
            ->add('fdEmissaorelatorio')
            ->add('fnIdTipo')
            ->add('ftRefexterna')
            ->add('ftConclusao')
            ->add('ftObs')
            ->add('fnIdTipocontrolo')
            ->add('fnIdOrcamento')
            ->add('ftIdEstado')
            ->add('fnIdEspecificacao')
            ->add('ftCumpreespecificacao')
            ->add('fdInicioanalise')
            ->add('fbFacturada')
            ->add('fnIdRequisicaocliente')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId')
            ->add('fnNumero')
            ->add('ftSerie')
            ->add('fdCriacao')
            ->add('fdColheita')
            ->add('fdRecepcao')
            ->add('fdConclusao')
            ->add('fdLimite')
            ->add('ftResponsavelcolheita')
            ->add('fnIdLocalcolheita')
            ->add('fnIdOperador')
            ->add('fnIdCliente')
            ->add('fnIdModelo')
            ->add('fnIdTipoaprovacao')
            ->add('fdAutorizacao')
            ->add('fnIdProduto')
            ->add('ftOrigem')
            ->add('ftGrupoparametros')
            ->add('fnIdLegislacao')
            ->add('ftTipoemissaorelatorio')
            ->add('fbRelatorioemitido')
            ->add('fdEmissaorelatorio')
            ->add('fnIdTipo')
            ->add('ftRefexterna')
            ->add('ftConclusao')
            ->add('ftObs')
            ->add('fnIdTipocontrolo')
            ->add('fnIdOrcamento')
            ->add('ftIdEstado')
            ->add('fnIdEspecificacao')
            ->add('ftCumpreespecificacao')
            ->add('fdInicioanalise')
            ->add('fbFacturada')
            ->add('fnIdRequisicaocliente')
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
            ->add('fnNumero')
            ->add('ftSerie')
            ->add('fdCriacao')
            ->add('fdColheita')
            ->add('fdRecepcao')
            ->add('fdConclusao')
            ->add('fdLimite')
            ->add('ftResponsavelcolheita')
            ->add('fnIdLocalcolheita')
            ->add('fnIdOperador')
            ->add('fnIdCliente')
            ->add('fnIdModelo')
            ->add('fnIdTipoaprovacao')
            ->add('fdAutorizacao')
            ->add('fnIdProduto')
            ->add('ftOrigem')
            ->add('ftGrupoparametros')
            ->add('fnIdLegislacao')
            ->add('ftTipoemissaorelatorio')
            ->add('fbRelatorioemitido')
            ->add('fdEmissaorelatorio')
            ->add('fnIdTipo')
            ->add('ftRefexterna')
            ->add('ftConclusao')
            ->add('ftObs')
            ->add('fnIdTipocontrolo')
            ->add('fnIdOrcamento')
            ->add('ftIdEstado')
            ->add('fnIdEspecificacao')
            ->add('ftCumpreespecificacao')
            ->add('fdInicioanalise')
            ->add('fbFacturada')
            ->add('fnIdRequisicaocliente')
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
            ->add('fnIdLocalcolheita')
            ->add('fnIdOperador')
            ->add('fnIdCliente')
            ->add('fnIdModelo')
            ->add('fnIdTipoaprovacao')
            ->add('fdAutorizacao')
            ->add('fnIdProduto')
            ->add('ftOrigem')
            ->add('ftGrupoparametros')
            ->add('fnIdLegislacao')
            ->add('ftTipoemissaorelatorio')
            ->add('fbRelatorioemitido')
            ->add('fdEmissaorelatorio')
            ->add('fnIdTipo')
            ->add('ftRefexterna')
            ->add('ftConclusao')
            ->add('ftObs')
            ->add('fnIdTipocontrolo')
            ->add('fnIdOrcamento')
            ->add('ftIdEstado')
            ->add('fnIdEspecificacao')
            ->add('ftCumpreespecificacao')
            ->add('fdInicioanalise')
            ->add('fbFacturada')
            ->add('fnIdRequisicaocliente')
        ;
    }
}
