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
            ->add('fnMetodo')
            ->add('fnTecnica')
            ->add('fnAreaensaio')
            ->add('fdLimiterealizacao')
            ->add('ftCumpreespecificacao')
            ->add('ftConclusao')
            ->add('fnModeloparametro')
            ->add('ftObservacao')
            ->add('fdCriacao')
            ->add('fdConclusao')
            ->add('fdAutorizacao')
            ->add('fnLaboratorio')
            ->add('fnPrecocompra')
            ->add('fnPrecovenda')
            ->add('fnFactorcorreccao')
            ->add('fbAcreditado')
            ->add('fnLimitelegal')
            ->add('fnFamiliaparametro')
            ->add('ftFormulaquimica')
            ->add('fnFrasco')
            ->add('fnVolumeminimo')
            ->add('fbConfirmacao')
            ->add('ftEstado')
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
            ->add('fnMetodo')
            ->add('fnTecnica')
            ->add('fnAreaensaio')
            ->add('fdLimiterealizacao')
            ->add('ftCumpreespecificacao')
            ->add('ftConclusao')
            ->add('fnModeloparametro')
            ->add('ftObservacao')
            ->add('fdCriacao')
            ->add('fdConclusao')
            ->add('fdAutorizacao')
            ->add('fnLaboratorio')
            ->add('fnPrecocompra')
            ->add('fnPrecovenda')
            ->add('fnFactorcorreccao')
            ->add('fbAcreditado')
            ->add('fnLimitelegal')
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
            ->add('fnMetodo')
            ->add('fnTecnica')
            ->add('fnAreaensaio')
            ->add('fdLimiterealizacao')
            ->add('ftCumpreespecificacao')
            ->add('ftConclusao')
            ->add('fnModeloparametro')
            ->add('ftObservacao')
            ->add('fdCriacao')
            ->add('fdConclusao')
            ->add('fdAutorizacao')
            ->add('fnLaboratorio')
            ->add('fnPrecocompra')
            ->add('fnPrecovenda')
            ->add('fnFactorcorreccao')
            ->add('fbAcreditado')
            ->add('fnLimitelegal')
            ->add('fnFamiliaparametro')
            ->add('ftFormulaquimica')
            ->add('fnFrasco')
            ->add('fnVolumeminimo')
            ->add('fbConfirmacao')
            ->add('ftEstado')
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
            ->add('fnMetodo')
            ->add('fnTecnica')
            ->add('fnAreaensaio')
            ->add('fdLimiterealizacao')
            ->add('ftCumpreespecificacao')
            ->add('ftConclusao')
            ->add('fnModeloparametro')
            ->add('ftObservacao')
            ->add('fdCriacao')
            ->add('fdConclusao')
            ->add('fdAutorizacao')
            ->add('fnLaboratorio')
            ->add('fnPrecocompra')
            ->add('fnPrecovenda')
            ->add('fnFactorcorreccao')
            ->add('fbAcreditado')
            ->add('fnLimitelegal')
            ->add('fnFamiliaparametro')
            ->add('ftFormulaquimica')
            ->add('fnFrasco')
            ->add('fnVolumeminimo')
            ->add('fbConfirmacao')
            ->add('ftEstado')
            ->add('fbContraanalise')
            ->add('fdRealizacao')
        ;
    }
}
