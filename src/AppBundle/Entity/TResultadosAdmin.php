<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TResultadosAdmin extends Admin
{

    public function preUpdate($user)
    {
        $em = $this->getModelManager()->getEntityManager($this->getClass());

        $originalObject = $em->getUnitOfWork()->getOriginalEntityData($user);

        if ($user->getSomeField() !== $originalObject['fieldName']) {
            // Field has been changed
        }
    }

    public function postUpdate($user)
    {
       var_dump($user);
        die;
    }
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnId',null,array('label' => 'ID'))
            ->add('ftDescricao',null,array('label' => 'Descrição'))
            ->add('fnParametro',null,array('label' => 'Parâmetro'))
            ->add('ftFormatado',null,array('label' => 'Formatado'))
            ->add('ftOriginal',null,array('label' => 'Original'))
            ->add('ftPrefixo',null,array('label' => 'Prefixo'))
            ->add('fnValor',null,array('label' => 'Valor'))
            ->add('fnCalculado',null,array('label' => 'Calculado'))
            ->add('ftObservacao',null,array('label' => 'Observação'))
            ->add('fdCriacao',null,array('label' => 'Data de criação'))
            ->add('fdConclusao',null,array('label' => 'Data de conclusão'))
            ->add('fdAutorizacao',null,array('label' => 'Autorização'))
            ->add('fbIncluirnorelatorio',null,array('label' => 'Incluir no relatório'))
            ->add('fnMaximo',null,array('label' => 'Máximo'))
            ->add('fnMinimo',null,array('label' => 'Mínimo'))
            ->add('fnLimitequantificacao',null,array('label' => 'Limite de Quantificação'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId',null,array('label' => 'ID'))
            ->add('fnParametro',null,array('label' => 'Parâmetro'))
            ->add('ftDescricao',null,array('label' => 'Descrição'))
            ->add('ftFormatado',null,array('label' => 'Formatado'))
            ->add('ftOriginal',null, array(
                'editable' => true,'label' => 'Original'
            ))
            ->add('ftPrefixo',null,array('label' => 'Prefixo'))
            ->add('fnValor',null,array('label' => 'Valor'))
            ->add('fnCalculado',null,array('label' => 'Calculado'))
            ->add('ftObservacao',null,array('label' => 'Observação'))
            ->add('fdCriacao',null,array('label' => 'Data de criação'))
            ->add('fdConclusao',null,array('label' => 'Data de conclusão'))
            ->add('fdAutorizacao',null,array('label' => 'Autorização'))
            ->add('fbIncluirnorelatorio',null,array('label' => 'Incluir no relatório'))
            ->add('fnMaximo',null,array('label' => 'Máximo'))
            ->add('fnMinimo',null,array('label' => 'Mínimo'))
            ->add('fnLimitequantificacao',null,array('label' => 'Limite de Quantificação'))
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
            ->with('grupo_1',array('description' => 'x','class' => 'col-md-6'))
            ->add('fnId',null,array('label' => 'ID'))
            ->add('ftDescricao',null,array('label' => 'Descrição'))
            ->add('ftFormatado',null,array('label' => 'Formatado'))
            ->add('ftOriginal',null,array('label' => 'Original'))
            ->add('ftPrefixo',null,array('label' => 'Prefixo'))
            ->add('fnValor',null,array('label' => 'Valor'))
            ->add('fnCalculado',null,array('label' => 'Calculado'))
            ->add('ftObservacao',null,array('label' => 'Observação'))
            ->end()
            ->with('grupo_2',array('description' => 'x','class' => 'col-md-6'))
            ->add('fdCriacao','sonata_type_datetime_picker', array('label' => 'Data de criação'))
            ->add('fdConclusao','sonata_type_datetime_picker', array('label' => 'Data de conclusão'))
            ->add('fdAutorizacao','sonata_type_datetime_picker', array('label' => 'Autorização'))
            ->add('fbIncluirnorelatorio',null,array('label' => 'Incluir no relatório'))
            ->add('fnMaximo',null,array('label' => 'Máximo'))
            ->add('fnMinimo',null,array('label' => 'Mínimo'))
            ->add('fnLimitequantificacao',null,array('label' => 'Limite de quantificação'))
            ->end()
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
            ->add('ftFormatado')
            ->add('ftOriginal')
            ->add('ftPrefixo')
            ->add('fnValor')
            ->add('fnCalculado')
            ->add('ftObservacao')
            ->add('fdCriacao')
            ->add('fdConclusao')
            ->add('fdAutorizacao')
            ->add('fbIncluirnorelatorio')
            ->add('fnMaximo')
            ->add('fnMinimo')
            ->add('fnLimitequantificacao')
        ;
    }
}
