<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TClientesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnId')
            ->add('ftCodigo')
            ->add('ftNome')
            ->add('ftAlias')
            ->add('ftMorada')
            ->add('ftCodpostal')
            ->add('ftLocalidade')
            ->add('ftPais')
            ->add('ftTelefone')
            ->add('ftFax')
            ->add('ftEmail')
            ->add('ftObservacao')
            ->add('ftNomecontacto')
            ->add('ftTelefonecontacto')
            ->add('ftEmailcontacto')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId')
            ->add('ftCodigo')
            ->add('ftNome')
            ->add('ftAlias')
            ->add('ftMorada')
            ->add('ftCodpostal')
            ->add('ftLocalidade')
            ->add('ftPais')
            ->add('ftTelefone')
            ->add('ftFax')
            ->add('ftEmail')
            ->add('ftObservacao')
            ->add('ftNomecontacto')
            ->add('ftTelefonecontacto')
            ->add('ftEmailcontacto')
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
            ->add('ftCodigo')
            ->add('ftNome', 'text', array('label' => 'Mçdelo', 'by_reference' => false))
            ->add('ftAlias')
            ->add('ftMorada')
            ->add('ftCodpostal')
            ->add('ftLocalidade')
            ->add('ftPais')
            ->add('ftTelefone')
            ->add('ftFax')
            ->add('ftEmail')
            ->add('ftObservacao')
            ->add('ftNomecontacto')
            ->add('ftTelefonecontacto')
            ->add('ftEmailcontacto')
            ->add('ftNomeUtilizador')
            ->add('ftpassword')
            ->add('fbuserativo', 'checkbox', array(
                'label'     => 'Utilizador Ativo',
                'required'  => false,
            ))

        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fnId')
            ->add('ftCodigo')
            ->add('ftNome')
            ->add('ftAlias')
            ->add('ftMorada')
            ->add('ftCodpostal')
            ->add('ftLocalidade')
            ->add('ftPais')
            ->add('ftTelefone')
            ->add('ftFax')
            ->add('ftEmail')
            ->add('ftObservacao')
            ->add('ftNomecontacto')
            ->add('ftTelefonecontacto')
            ->add('ftEmailcontacto')
        ;
    }
}
