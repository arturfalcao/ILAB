<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TParametrosAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnId')
            ->add('ftDescricao')
            ->add('fnIdMetodo')
            ->add('fnIdTecnica')
            ->add('fnIdAmostra')
            ->add('fnIdAreaensaio')
            ->add('fdLimiterealizacao')
            ->add('ftCumpreespecificacao')
            ->add('ftConclusao')
            ->add('fnIdModeloparametro')
            ->add('ftObservacao')
            ->add('fdCriacao')
            ->add('fdConclusao')
            ->add('fdAutorizacao')
            ->add('fnIdLaboratorio')
            ->add('fnPrecocompra')
            ->add('fnPrecovenda')
            ->add('fnFactorcorreccao')
            ->add('fbAcreditado')
            ->add('fnLimitelegal')
            ->add('fnIdFamiliaparametro')
            ->add('ftFormulaquimica')
            ->add('fnIdFrasco')
            ->add('fnVolumeminimo')
            ->add('fbConfirmacao')
            ->add('ftIdEstado')
            ->add('fbContraanalise')
            ->add('fdRealizacao')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId')
            ->add('ftDescricao')
            ->add('fnIdMetodo')
            ->add('fnIdTecnica')
            ->add('fnIdAmostra')
            ->add('fnIdAreaensaio')
            ->add('fdLimiterealizacao')
            ->add('ftCumpreespecificacao')
            ->add('ftConclusao')
            ->add('fnIdModeloparametro')
            ->add('ftObservacao')
            ->add('fdCriacao')
            ->add('fdConclusao')
            ->add('fdAutorizacao')
            ->add('fnIdLaboratorio')
            ->add('fnPrecocompra')
            ->add('fnPrecovenda')
            ->add('fnFactorcorreccao')
            ->add('fbAcreditado')
            ->add('fnLimitelegal')
            ->add('fnIdFamiliaparametro')
            ->add('ftFormulaquimica')
            ->add('fnIdFrasco')
            ->add('fnVolumeminimo')
            ->add('fbConfirmacao')
            ->add('ftIdEstado')
            ->add('fbContraanalise')
            ->add('fdRealizacao')
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
            ->add('ftDescricao')
            ->add('fnIdMetodo')
            ->add('fnIdTecnica')
            ->add('fnIdAmostra')
            ->add('fnIdAreaensaio')
            ->add('fdLimiterealizacao')
            ->add('ftCumpreespecificacao')
            ->add('ftConclusao')
            ->add('fnIdModeloparametro')
            ->add('ftObservacao')
            ->add('fdCriacao')
            ->add('fdConclusao')
            ->add('fdAutorizacao')
            ->add('fnIdLaboratorio')
            ->add('fnPrecocompra')
            ->add('fnPrecovenda')
            ->add('fnFactorcorreccao')
            ->add('fbAcreditado')
            ->add('fnLimitelegal')
            ->add('fnIdFamiliaparametro')
            ->add('ftFormulaquimica')
            ->add('fnIdFrasco')
            ->add('fnVolumeminimo')
            ->add('fbConfirmacao')
            ->add('ftIdEstado')
            ->add('fbContraanalise')
            ->add('fdRealizacao')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fnId')
            ->add('ftDescricao')
            ->add('fnIdMetodo')
            ->add('fnIdTecnica')
            ->add('fnIdAmostra')
            ->add('fnIdAreaensaio')
            ->add('fdLimiterealizacao')
            ->add('ftCumpreespecificacao')
            ->add('ftConclusao')
            ->add('fnIdModeloparametro')
            ->add('ftObservacao')
            ->add('fdCriacao')
            ->add('fdConclusao')
            ->add('fdAutorizacao')
            ->add('fnIdLaboratorio')
            ->add('fnPrecocompra')
            ->add('fnPrecovenda')
            ->add('fnFactorcorreccao')
            ->add('fbAcreditado')
            ->add('fnLimitelegal')
            ->add('fnIdFamiliaparametro')
            ->add('ftFormulaquimica')
            ->add('fnIdFrasco')
            ->add('fnVolumeminimo')
            ->add('fbConfirmacao')
            ->add('ftIdEstado')
            ->add('fbContraanalise')
            ->add('fdRealizacao')
        ;
    }
}
