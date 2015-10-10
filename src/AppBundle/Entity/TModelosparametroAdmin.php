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

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
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
