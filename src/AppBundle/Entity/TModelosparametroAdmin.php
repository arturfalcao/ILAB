<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TModelosparametroAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fbActivo',null, array('label' => 'Activo'))
            ->add('ftDescricao',null, array('label' => 'Descri��o'))
            ->add('ftFormulaquimica',null, array('label' => 'Formula Quimica'))
            ->add('fnPrecocompra',null, array('label' => 'Pre�o Compra'))
            ->add('fnPrecovenda',null, array('label' => 'Pre�o Venda'))
            ->add('fnFactorcorreccao',null, array('label' => 'Factor correc��o'))
            ->add('fnNrdiasparaexecucao',null, array('label' => 'Numero de Dias para Execu��o'))
            ->add('fbAcreditado',null, array('label' => 'Acreditado'))
            ->add('fnVolumeminimo',null, array('label' => 'Volume minimo'))
            ->add('ftObservacao',null, array('label' => 'Observa��o'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fbActivo',null, array('label' => 'Activo'))
            ->add('ftDescricao',null, array('label' => 'Descri��o'))
            ->add('ftFormulaquimica',null, array('label' => 'Formula Quimica'))
            ->add('fnNrdiasparaexecucao',null, array('label' => 'Numero de Dias para Execu��o'))
            ->add('fbAcreditado',null, array('label' => 'Acreditado'))
            ->add('fnVolumeminimo',null, array('label' => 'Volume minimo'))
            ->add('ftObservacao',null, array('label' => 'Observa��o'))

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
            ->add('fbActivo', 'checkbox', array('required' => false,'label' => 'Activo'))
            ->add('ftDescricao', 'text', array('required' => true,'label' => 'Descri��o'))
            ->add('ftFormulaquimica', 'text', array('required' => false,'label' => 'Formula Quimica'))
            ->add('fnPrecocompra', 'text', array('required' => false,'label' => 'Pre�o Compra'))
            ->add('fnPrecovenda', 'text', array('required' => false,'label' => 'Pre�o Venda'))
            ->add('fnFactorcorreccao', 'text', array('required' => false,'label' => 'Factor correc��o'))
            ->add('fnNrdiasparaexecucao', 'text', array('required' => true,'label' => 'Numero de Dias para Execu��o'))
            ->add('fbAcreditado', 'checkbox', array('required' => false,'label' => 'Acreditado'))
            ->add('fnVolumeminimo', 'text', array('required' => false,'label' => 'Volume minimo'))
            ->add('ftObservacao', 'text', array('required' => false,'label' => 'Observa��o'))
            ->add('fnFamiliaparametro', 'sonata_type_model', array('label' => 'Familia Parametro','by_reference' => false))
            ->add('fnLaboratorio', 'sonata_type_model', array('label' => 'Laboratorio','by_reference' => false))
            ->add('fnMetodo', 'sonata_type_model', array('label' => 'Metodo','by_reference' => false))
            ->add('fnTecnica', 'sonata_type_model', array('label' => 'Tecnica','by_reference' => false))
            ->add('fnAreaensaio', 'sonata_type_model', array('label' => 'Area de Ensaio','by_reference' => false))
            ->add('fnModeloresultado', 'sonata_type_model', array('label' => 'Modelo de resultado','by_reference' => false))
            ->add('fnFrasco', 'sonata_type_model', array('label' => 'Frasco','by_reference' => false))

        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fbActivo')
            ->add('ftDescricao')
            ->add('ftFormulaquimica')
            ->add('fnPrecocompra')
            ->add('fnPrecovenda')
            ->add('fnFactorcorreccao')
            ->add('fnNrdiasparaexecucao')
            ->add('fbAcreditado')
            ->add('fnVolumeminimo')
            ->add('ftObservacao')
        ;
    }
}
