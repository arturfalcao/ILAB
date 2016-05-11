<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TRegrasformatacaoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnOrdem',null,array('label' => 'Ordem'))
            ->add('ftDescricao',null,array('label' => 'Descrição'))
            ->add('fnLimiteinferior',null,array('label' => 'Limite inferior'))
            ->add('fnLimitesuperior',null,array('label' => 'Limite superior'))
            ->add('fnCasasdecimais',null,array('label' => 'Casas decimais'))
            ->add('fbFormatoexponencial',null,array('label' => 'Formato Exp.'))
            ->add('fbFormatoutilizador',null,array('label' => 'Formato Util.'))
            ->add('ftExpressaoutilizador',null,array('label' => 'Expressão Util.'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnOrdem',null,array('label' => 'Ordem'))
            ->add('ftDescricao',null,array('label' => 'Descrição'))
            ->add('fnLimiteinferior',null,array('label' => 'Limite inferior'))
            ->add('fnLimitesuperior',null,array('label' => 'Limite Superior'))
            ->add('fnCasasdecimais',null,array('label' => 'Casas decimais'))
            ->add('fbFormatoexponencial',null,array('label' => 'Formato Exponencial'))
            ->add('fbFormatoutilizador',null,array('label' => 'Formato Utilizador'))
            ->add('ftExpressaoutilizador',null,array('label' => 'Expressão Utilizador'))
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
            ->with('grupo_1',array('description' => 'Cliente','class' => 'col-md-6'))
            ->add('fnOrdem',null,array('label' => 'Ordem'))
            ->add('ftDescricao','text', array('required' => false,'label' => 'Descrição'))
            ->add('fnLimiteinferior','text', array('label' => '>='))
            ->add('fnLimitesuperior','text', array('label' => '<'))
            ->end()
            ->with('grupo_2',array('description' => 'Cliente','class' => 'col-md-6'))
            ->add('fbFormatoexponencial','checkbox', array('required' => false,'label' => 'Exponencial','attr' => array('class' => "regra_exp")))
            ->add('fbFormatoutilizador','checkbox', array('required' => false,'label' => 'Normal','attr' => array('class' => "regra_normal")))
            ->add('fnCasasdecimais','number', array('required' => false,'label' => 'Casas Decimais','attr' => array('class' => "casasdecimais")))
            ->add('ftExpressaoutilizador','text', array('required' => false,'label' => 'Expressão Utilizador','attr' => array('class' => "expre_utilizador"),))
            ->end()
        ;



    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fnOrdem')
            ->add('ftDescricao')
            ->add('fnLimiteinferior')
            ->add('fnLimitesuperior')
            ->add('fnCasasdecimais')
            ->add('fbFormatoexponencial')
            ->add('fbFormatoutilizador')
            ->add('ftExpressaoutilizador')
        ;
    }
}
