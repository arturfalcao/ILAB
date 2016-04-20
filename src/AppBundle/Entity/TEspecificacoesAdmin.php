<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TEspecificacoesAdmin extends Admin
{

    public function prePersist($project)
    {
        $this->preUpdate($project);
    }

    public function preUpdate($project)
    {
        $project->setfnParametros($project->getfnParametros());
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('ftCodigo',null, array('label' => 'Codigo'))
            ->add('ftDescricao',null, array('label' => 'Descrição'))
            ->add('ftAlias',null, array('label' => 'Alias'))
            ->add('ftMensagemUtilizador',null, array('label' => 'MSG Utilizador'))
            ->add('ftObservacao',null, array('label' => 'Observação'))
            ->add('ftSiglavl',null, array('label' => 'SiglaVL'))
            ->add('ftLegendavl',null, array('label' => 'LegendaVL'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('ftCodigo',null, array('label' => 'Codigo'))
            ->add('ftDescricao',null, array('label' => 'Descrição'))
            ->add('ftObservacao',null, array('label' => 'Observações'))
            ->add('ftSiglavl',null, array('label' => 'SiglaVL'))
            ->add('ftLegendavl',null, array('label' => 'LegendaVL'))
            ->add('fbActivo',null, array('label' => 'Activo'))
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
            ->add('ftCodigo', 'text', array('required' => true,'label' => 'Codigo'))
            ->add('fnParametros', 'sonata_type_collection', array(
                'cascade_validation' => true,
                'label' => 'Parametros',
            ), array(
                    'edit'              => 'inline',
                    'inline'            => 'table',
                    'sortable'          => 'position',
                )
            )

            ->add('ftDescricao', 'text', array('required' => true,'label' => 'Descrição'))
            ->add('ftAlias', 'text', array('required' => false,'label' => 'Alias'))
            ->add('ftMensagemUtilizador', 'text', array('required' => false,'label' => 'MSG Utilizador'))
            ->add('ftTextoQdPassaP', 'text', array('required' => false,'label' => 'Texto quando passa Parametro'))
            ->add('ftTextoQdNaoPassaP', 'text', array('required' => false,'label' => 'Texto quando não passa Parametro'))
            ->add('ftTextoQdCumpreA', 'text', array('required' => false,'label' => 'Texto quando Cumpre Amostra'))
            ->add('ftTextoQdNaoCumpreA', 'text', array('required' => false,'label' => 'Texto quando não cumpre Amostra'))
            ->add('fbEmissaoDeRelatorio', 'checkbox', array('required' => true,'label' => 'Emissão de relatorio'))
            ->add('fnLegislacao', 'sonata_type_model', array('label' => 'Legislação', 'by_reference' => false))
            ->add('ftObservacao', 'text', array('required' => false,'label' => 'Observações'))
            ->add('ftSiglavl', 'text', array('required' => false,'label' => 'SiglaVL'))
            ->add('ftLegendavl', 'text', array('required' => false,'label' => 'LegendaVL'))
            ->add('fbActivo', 'checkbox', array('required' => false,'label' => 'Activo'))



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
