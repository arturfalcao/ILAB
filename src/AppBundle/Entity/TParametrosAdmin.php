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
            ->add('fnAreaensaio',null, array('label' => 'Área Ensaio'))
            ->add('fdLimiterealizacao', 'doctrine_orm_datetime_range', array('label' => false), null, array('label' => 'Limite de Realização','widget' => 'single_text','attr' => array('class' => 'datepicker')))
            ->add('ftCumpreespecificacao',null, array('label' => 'Cumpre Especificação'))
            ->add('ftConclusao',null, array('label' => 'Conclusão'))
            ->add('fnModeloparametro',null, array('label' => 'Modelo de Parâmetro'))
            ->add('ftObservacao',null, array('label' => 'Observação'))
            ->add('fdCriacao', 'doctrine_orm_datetime_range', array('label' => false), null, array('label' => 'Data de Criação','widget' => 'single_text','attr' => array('class' => 'datepicker')))
            ->add('fdConclusao', 'doctrine_orm_datetime_range', array('label' => false), null, array('label' => 'Data de Conclusão','widget' => 'single_text','attr' => array('class' => 'datepicker')))
            ->add('fdAutorizacao', 'doctrine_orm_datetime_range', array('label' => false), null, array('label' => 'Autorização','widget' => 'single_text','attr' => array('class' => 'datepicker')))
            ->add('fnLaboratorio',null, array('label' => 'Laboratório'))
            ->add('fbAcreditado',null, array('label' => 'Acreditado'))
            ->add('fnFamiliaparametro',null, array('label' => 'Família Parâmetro'))
            ->add('fnFrasco',null, array('label' => 'Frasco'))
            ->add('fbConfirmacao',null, array('label' => 'Confirmação'))
            ->add('ftEstado',null, array('label' => 'Estado'))
            ->add('fbContraanalise',null, array('label' => 'Contra Análise'))
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
            ->add('fnModeloparametro',null, array('label' => 'Modelo de Parâmetro'))
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
            ->with('grupo_1',array('description' => 'X','class' => 'col-md-6'))
                ->add('ftDescricao',null, array('label' => 'Descrição'))
                //->add('fnMetodo',null, array('label' => 'Método'))
                ->add('fnMetodo', 'sonata_type_collection', array(
                    'cascade_validation' => true,
                    'label' => 'Metodo',
                ), array(
                        'edit'              => 'inline',
                        'inline'            => 'table',
                        'sortable'          => 'position',
                    )
                )
                ->add('fnTecnica',null, array('label' => 'Técnica'))
                ->add('fnAreaensaio',null, array('label' => 'Área de Ensaio'))
                ->add('fdLimiterealizacao','sonata_type_datetime_picker', array('label' => 'Limite de Realização'))
                ->add('ftCumpreespecificacao',null, array('label' => 'Cumpre especificação'))
                ->add('ftConclusao',null, array('label' => 'Conclusão'))
                ->add('fnModeloparametro',null, array('label' => 'Modelo Parâmetro'))
                ->add('ftObservacao',null, array('label' => 'Observação'))
                ->add('fdCriacao','sonata_type_datetime_picker', array('label' => 'Data de Criação'))
                ->add('fdRealizacao','sonata_type_datetime_picker', array('label' => 'Data de realização'))
                ->add('fdConclusao','sonata_type_datetime_picker', array('label' => 'Data de conclusão'))
                ->add('fdAutorizacao','sonata_type_datetime_picker', array('label' => 'Autorização'))
            ->end()
            ->with('grupo_2',array('description' => 'Y','class' => 'col-md-6'))
                ->add('fnLaboratorio',null, array('label' => 'Laboratório'))
                ->add('fnPrecocompra',null, array('label' => 'Preço de Compra'))
                ->add('fnPrecovenda',null, array('label' => 'Preço de venda'))
                ->add('fnFactorcorreccao',null, array('label' => 'Factor de correcção'))
                ->add('fbAcreditado',null, array('label' => 'Acreditado'))
                ->add('fnLimitelegal',null, array('label' => 'Limite legal'))
                ->add('fnFamiliaparametro',null, array('label' => 'Família Parâmetro'))
                ->add('ftFormulaquimica',null, array('label' => 'Fórmula Química'))
                ->add('fnFrasco',null, array('label' => 'Frasco'))
                ->add('fnVolumeminimo',null, array('label' => 'Volume mínimo'))
                ->add('fbConfirmacao',null, array('label' => 'Confirmação'))
                ->add('fbContraanalise',null, array('label' => 'Contra Análise'))
                ->add('fbAmostrainterno',null, array('label' => 'Amostra Interna'))
                ->add('fbAmostraexterno',null, array('label' => 'Amostra externa'))
                ->add('fbDeterminacaoexterno',null, array('label' => 'Determinação Externa'))
                ->add('fbDeterminacaointerno',null, array('label' => 'Determinação Interna'))
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
