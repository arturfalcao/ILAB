<?php

namespace AppBundle\Entity;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TAmostrasAdmin extends Admin
{

    public function postPersist($user)
    {

    }

    public function prePersist($user)
    {
        $user1 = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();

        $user->setCreatedBy($user1->getUsername());
        $user->setCreatedByTime(date('Y-m-d H:i:s'));
    }
    public function preUpdate($user)
    {
        $user1 = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $user->setUpdatedBy($user1->getUsername());
        $user->setUpdatedByTime(date('Y-m-d H:i:s'));
    }
    public function preRemove($user)
    {
        $user1 = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $user->setCreatedBy($user1->getUsername());
        $user->setCreatedByTime(date('Y-m-d H:i:s'));
    }


    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnId')
            ->add('fnNumero')
            ->add('ftSerie')
            ->add('fdCriacao')
            ->add('fdColheita', 'doctrine_orm_date_range', array('label'=>'Data Colheita','date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('fdRecepcao')
            ->add('fdConclusao')
            ->add('fdLimite')
            ->add('ftResponsavelcolheita')
            ->add('fnLocalcolheita')
            ->add('fnOperador')
            ->add('fnCliente')
            ->add('fnModelo')
            ->add('fnTipoaprovacao')
            ->add('fdAutorizacao')
            ->add('fnProduto')
            ->add('fnTipocontrolo')
            ->add('fnIdOrcamento')
            ->add('ftEstado')
            ->add('fnEspecificacao')
            ->add('ftCumpreespecificacao')
            ->add('fdInicioanalise')
            ->add('fbFacturada')
            ->add('fnRequisicaocliente')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fnId')
            ->add('ftEstado', 'sonata_type_model', array('label' => 'Modelo', 'by_reference' => false))
            ->add('fbRelatorioemitido')
            ->add('serie')
            ->add('fnProduto')
            ->add('fdColheita')
            ->add('fdConclusao')
            ->add('fnCliente')
            ->add('fnLocalcolheita')
            ->add('ftConclusao')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;


        /*
            ->add('fnNumero')
            ->add('ftSerie')
            ->add('fdCriacao')
            ->add('fdRecepcao')

            ->add('fdLimite')
            ->add('ftResponsavelcolheita')
            ->add('fnIdOperador')
            ->add('fnModelo')
            ->add('fnTipoaprovacao')
            ->add('fdAutorizacao')
            ->add('ftOrigem')
            ->add('ftGrupoparametros')
            ->add('fnLegislacao')
            ->add('ftTipoemissaorelatorio')
            ->add('fdEmissaorelatorio')
            ->add('fnTipo')
            ->add('ftRefexterna')
            ->add('ftObs')
            ->add('fnTipocontrolo')
            ->add('fnIdOrcamento')

            ->add('fnEspecificacao')
            ->add('ftCumpreespecificacao')
            ->add('fdInicioanalise')
            ->add('fbFacturada')
            ->add('fnRequisicaocliente')*/
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        if ($this->id($this->getSubject())) {


        }
        else {
            $em = $this->modelManager->getEntityManager('AppBundle:TEstados');
            $query = $em->createQueryBuilder('c')
                ->select('c')
                ->from('AppBundle:TEstados', 'c')
                ->where("c.ftId = 'I'");
        }

        $formMapper
            ->with('codigo',array('description' => 'Codigo','class' => 'Codigo_amostra'))
                ->add('fnId', 'text', array('label' => 'ID','read_only' => false,'disabled'  => false))
            ->end();

        if ($this->id($this->getSubject())) {
            $formMapper
                ->with('Estado',array('description' => 'Estado','class' => 'Estado_amostra'))
                ->add('ftEstado', 'text', array('label' => 'Estado', 'by_reference' => false))
                ->end();
        }



        $formMapper
            ->with('Cliente',array('description' => 'Cliente','class' => 'Cliente_amostra'))
                ->add('fnCliente', 'sonata_type_model', array('label' => 'Cliente', 'by_reference' => false))
            ->end()
            ->with('Lancamento',array('description' => 'Lançamento','class' => 'Lancamento_amostra'))
                ->add('fnModelo', 'sonata_type_model', array('label' => 'Modelo', 'by_reference' => false))
                ->add('ftGrupoparametros', 'sonata_type_model', array('label' => 'Grupo de parâmetros', 'by_reference' => false,'disabled'  => true))
            ->end()
            ->with('Lote',array('description' => 'Lote','class' => 'Lote_amostra'))
            ->add('fnAmostrasalimentos', 'sonata_type_admin',array(
                'btn_add' => false,'delete' => false,
            ))
            ->end()
                ->add('fdColheita', 'datetime', array('label'=>'Data/hora Colheita','date_widget' => "single_text", 'time_widget' => "single_text"))
                ->add('fnOperador')
                ->add('ftResponsavelcolheita', 'choice',  array('multiple' => false,'choices' => array('Cliente' => 'Cliente','Laboratorio' => 'Laboratorio','Outro' => 'Outro')))
                ->add('ftOrigem', 'text', array('label' => 'Ponto de Amostragem'))
            ->end()
            ->with('Caracterização',array('description' => 'Caracterização','class' => 'Caracterizacao_amostra'))
                ->add('fnProduto', 'sonata_type_model', array('label' => 'Produto', 'by_reference' => false))
                ->add('ftOrigem', 'text', array('label' => 'Origem', 'by_reference' => false))
                ->add('fnLegislacao', 'sonata_type_model', array('label' => 'Legislação', 'by_reference' => false))
                ->add('fnEspecificacao', 'sonata_type_model', array('label' => 'Especificação', 'by_reference' => false))
                ->add('fnRequisicaocliente', 'sonata_type_model', array('label' => 'Especificação', 'by_reference' => false))
                ->add('fnTipocontrolo', 'sonata_type_model', array('label' => 'Tipo Controlo', 'by_reference' => false))
                ->add('fnTipo', 'sonata_type_model', array('label' => 'Tipo', 'by_reference' => false))
                ->add('fnTipoaprovacao', 'sonata_type_model', array('label' => 'Tipo Aprovação', 'by_reference' => false))
                ->add('ftConclusao', 'text', array('label' => 'Conclusão'))
                ->add('ftObs', 'text', array('label' => 'Observações'))
            ->end();
             if ($this->id($this->getSubject())) {
             }
             else {
                 $em = $this->modelManager->getEntityManager('AppBundle:TEstados');
                 $query = $em->createQueryBuilder('c')
                     ->select('c')
                     ->from('AppBundle:TEstados', 'c')
                     ->where("c.ftId = 'I'");
                 $formMapper ->with('Addresses', array('class' => 'display_none'))
                     ->add('ftEstado','sonata_type_model', array('attr' => array('class' => 'display_none'),'query' => $query))
                     ->end();
             }
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fnId')
            ->add('fnNumero')
            ->add('ftSerie')
            ->add('fdCriacao')
            ->add('fdColheita')
            ->add('fdRecepcao')
            ->add('fdConclusao')
            ->add('fdLimite')
            ->add('ftResponsavelcolheita')
            ->add('fnLocalcolheita')
            ->add('fnOperador')
            ->add('fnCliente')
            ->add('fnModelo')
            ->add('fnTipoaprovacao')
            ->add('fdAutorizacao')
            ->add('fnProduto')
            ->add('ftOrigem')
            ->add('ftGrupoparametros')
            ->add('fnLegislacao')
            ->add('ftTipoemissaorelatorio')
            ->add('fbRelatorioemitido')
            ->add('fdEmissaorelatorio')
            ->add('fnTipo')
            ->add('ftRefexterna')
            ->add('ftConclusao')
            ->add('ftObs')
            ->add('fnTipocontrolo')
            ->add('fnIdOrcamento')
            ->add('ftEstado')
            ->add('fnEspecificacao')
            ->add('ftCumpreespecificacao')
            ->add('fdInicioanalise')
            ->add('fbFacturada')
            ->add('fnRequisicaocliente')
        ;
    }
}
