<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TEspecificacoesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('ftCodigo')
            ->add('ftDescricao')
            ->add('ftAlias')
            ->add('ftMensagemUtilizador')
            ->add('ftTextoQdPassaP')
            ->add('ftTextoQdNaoPassaP')
            ->add('ftTextoQdCumpreA')
            ->add('ftTextoQdNaoCumpreA')
            ->add('fbEmissaoDeRelatorio')
            ->add('ftObservacao')
            ->add('ftSiglavl')
            ->add('ftLegendavl')
            ->add('fbActivo')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('ftCodigo')
            ->add('ftDescricao')
            ->add('ftAlias')
            ->add('ftMensagemUtilizador')
            ->add('ftTextoQdPassaP')
            ->add('ftTextoQdNaoPassaP')
            ->add('ftTextoQdCumpreA')
            ->add('ftTextoQdNaoCumpreA')
            ->add('fbEmissaoDeRelatorio')
            ->add('ftObservacao')
            ->add('ftSiglavl')
            ->add('ftLegendavl')
            ->add('fbActivo')
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
            ->add('ftCodigo')
            ->add('ftDescricao')
            ->add('ftAlias')
            ->add('ftMensagemUtilizador')
            ->add('ftTextoQdPassaP')
            ->add('ftTextoQdNaoPassaP')
            ->add('ftTextoQdCumpreA')
            ->add('ftTextoQdNaoCumpreA')
            ->add('fbEmissaoDeRelatorio')
            ->add('fnLegislacao', 'sonata_type_model', array('label' => 'Unidade de Medida', 'by_reference' => false))
            ->add('ftObservacao')
            ->add('ftSiglavl')
            ->add('ftLegendavl')
            ->add('fbActivo')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('ftCodigo')
            ->add('ftDescricao')
            ->add('ftAlias')
            ->add('ftMensagemUtilizador')
            ->add('ftTextoQdPassaP')
            ->add('ftTextoQdNaoPassaP')
            ->add('ftTextoQdCumpreA')
            ->add('ftTextoQdNaoCumpreA')
            ->add('fbEmissaoDeRelatorio')
            ->add('ftObservacao')
            ->add('ftSiglavl')
            ->add('ftLegendavl')
            ->add('fbActivo')
        ;
    }
}
