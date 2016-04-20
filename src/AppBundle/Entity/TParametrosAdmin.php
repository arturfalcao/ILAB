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
            ->add('fnId',null, array('label' => 'ID'))
            ->add('ftDescricao',null, array('label' => 'Descrição'))
            ->add('fnMetodo',null, array('label' => 'Metodo'))
            ->add('fnTecnica',null, array('label' => 'Tecnica'))
            ->add('fnAreaensaio',null, array('label' => 'Area Ensaio'))
            ->add('fdLimiterealizacao',null, array('label' => 'Limite Realização'))
            ->add('ftCumpreespecificacao',null, array('label' => 'Cumpre Especificação'))
            ->add('ftConclusao',null, array('label' => 'Conclusão'))
            ->add('fnModeloparametro',null, array('label' => 'Modelo de Parametro'))
            ->add('ftObservacao',null, array('label' => 'Observação'))
            ->add('fdCriacao','doctrine_orm_date', array('label' => 'Data de Criação'))
            ->add('fdConclusao','doctrine_orm_date', array('label' => 'Conclusão'))
            ->add('fdAutorizacao','doctrine_orm_date', array('label' => 'Autorização'))
            ->add('fnLaboratorio',null, array('label' => 'Laboratorio'))
            ->add('fbAcreditado',null, array('label' => 'Acreditado'))
            ->add('fnFamiliaparametro',null, array('label' => 'Familia Parametro'))
            ->add('fnFrasco',null, array('label' => 'Frasco'))
            ->add('fbConfirmacao',null, array('label' => 'Confirmação'))
            ->add('ftEstado',null, array('label' => 'Estado'))
            ->add('fbContraanalise',null, array('label' => 'Contra Analise'))
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
            ->add('fnModeloparametro')
            ->add('fnLaboratorio')
            ->add('fbAcreditado')

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
            ->add('fbContraanalise')
            ->add('fdRealizacao')
            ->add('fbAmostrainterno')
            ->add('fbAmostraexterno')
            ->add('fbDeterminacaoexterno')
            ->add('fbDeterminacaointerno')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
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
