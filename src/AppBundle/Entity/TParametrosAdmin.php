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
            ->add('fnMetodo',null, array('label' => 'Método'))
            ->add('fnTecnica',null, array('label' => 'Técnica'))
            ->add('fnAreaensaio',null, array('label' => 'Área ensaio'))
            ->add('fdLimiterealizacao', 'doctrine_orm_datetime_range', array('label' => false), null, array('label' => 'Limite de realização','widget' => 'single_text','attr' => array('class' => 'datepicker')))
            ->add('ftCumpreespecificacao',null, array('label' => 'Cumpre especif.'))
            ->add('ftConclusao',null, array('label' => 'Conclusão'))
            ->add('fnModeloparametro',null, array('label' => 'Modelo de parâmetro'))
            ->add('ftObservacao',null, array('label' => 'Observação'))
            ->add('fdCriacao', 'doctrine_orm_datetime_range', array('label' => false), null, array('label' => 'Data de criação','widget' => 'single_text','attr' => array('class' => 'datepicker')))
            ->add('fdConclusao', 'doctrine_orm_datetime_range', array('label' => false), null, array('label' => 'Data de conclusão','widget' => 'single_text','attr' => array('class' => 'datepicker')))
            ->add('fdAutorizacao', 'doctrine_orm_datetime_range', array('label' => false), null, array('label' => 'Autorização','widget' => 'single_text','attr' => array('class' => 'datepicker')))
            ->add('fnLaboratorio',null, array('label' => 'Laboratório'))
            ->add('fbAcreditado',null, array('label' => 'Acreditado'))
            ->add('fnFamiliaparametro',null, array('label' => 'Família parâmetro'))
            ->add('fnFrasco',null, array('label' => 'Frasco'))
            ->add('fbConfirmacao',null, array('label' => 'Confirmação'))
            ->add('ftEstado',null, array('label' => 'Estado'))
            ->add('fbContraanalise',null, array('label' => 'Contra análise'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId',null, array('label' => 'ID'))
            ->add('ftDescricao',null, array('label' => 'Descrição'))
            ->add('fnMetodo',null, array('label' => 'Método'))
            ->add('fnTecnica',null, array('label' => 'Técnica'))
            ->add('fnModeloparametro',null, array('label' => 'Modelo de parâmetro'))
            ->add('fnLaboratorio',null, array('label' => 'Laboratório'))
            ->add('fbAcreditado',null, array('label' => 'Acreditado'))

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
            ->with('grupo_1',array('description' => 'X','class' => 'col-md-4'))
            ->add('ftDescricao',null, array('label' => 'Descrição'))
            ->add('fnMetodo',null, array('label' => 'Método'))
            ->add('fnTecnica',null, array('label' => 'Técnica'))
            ->add('fnAreaensaio',null, array('label' => 'Área de ensaio'))
            ->add('fdLimiterealizacao','sonata_type_datetime_picker', array('label' => 'Limite de realização'))
            ->add('ftCumpreespecificacao',null, array('label' => 'Cumpre especificação'))
            ->add('ftConclusao',null, array('label' => 'Conclusão'))
            ->add('fnModeloparametro',null, array('label' => 'Modelo parâmetro'))
            ->add('ftObservacao',null, array('label' => 'Observação'))

            ->end()
            ->with('grupo_2',array('description' => 'Y','class' => 'col-md-4'))
            ->add('fdCriacao','sonata_type_datetime_picker', array('label' => 'Data de criação'))
            ->add('fdRealizacao','sonata_type_datetime_picker', array('label' => 'Data de realização'))
            ->add('fdConclusao','sonata_type_datetime_picker', array('label' => 'Data de conclusão'))
            ->add('fdAutorizacao','sonata_type_datetime_picker', array('label' => 'Autorização'))
            ->add('fnLaboratorio',null, array('label' => 'Laboratório'))
            ->add('fnPrecocompra',null, array('label' => 'Preço de compra'))
            ->add('fnPrecovenda',null, array('label' => 'Preço de venda'))
            ->add('fnFactorcorreccao',null, array('label' => 'Factor de correcção'))
            ->add('fbAcreditado',null, array('label' => 'Acreditado'))

            ->end()
            ->with('grupo_3',array('description' => 'X','class' => 'col-md-4'))
                ->add('fnLimitelegal',null, array('label' => 'Limite legal'))
                ->add('fnFamiliaparametro',null, array('label' => 'Família parâmetro'))
                ->add('ftFormulaquimica',null, array('label' => 'Fórmula química'))
                ->add('fnFrasco',null, array('label' => 'Frasco'))
                ->add('fnVolumeminimo',null, array('label' => 'Volume mínimo'))
                ->add('fbConfirmacao',null, array('label' => 'Confirmação'))
                ->add('fbContraanalise',null, array('label' => 'Contra análise'))
                ->add('fbAmostrainterno',null, array('label' => 'Amostra interna'))
                ->add('fbAmostraexterno',null, array('label' => 'Amostra externa'))
                ->add('fbDeterminacaoexterno',null, array('label' => 'Determinação externa'))
                ->add('fbDeterminacaointerno',null, array('label' => 'Determinação interna'))
            ->end()
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
