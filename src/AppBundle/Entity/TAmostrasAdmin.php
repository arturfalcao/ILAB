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

        $user->setUpdatedBy($user1->getUsername());
        $user->setUpdatedByTime(date('Y-m-d H:i:s'));
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
        $user->setUpdatedBy($user1->getUsername());
        $user->setUpdatedByTime(date('Y-m-d H:i:s'));
    }


    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fnId',null,array('label' => 'ID'))
            ->add('fnNumero',null,array('label' => 'Número'))
            ->add('ftSerie',null,array('label' => 'Série'))
            ->add('fdCriacao',null,array('label' => 'Criação'))
            ->add('fdColheita', 'doctrine_orm_datetime_range', array('label' => false), null, array('label' => 'Data Colheita','widget' => 'single_text','attr' => array('class' => 'datepicker')))
            ->add('fdRecepcao',null,array('label' => 'Criação'))
            ->add('fdConclusao',null,array('label' => 'Conclusão'))
            ->add('fdLimite',null,array('label' => 'Limite'))
            ->add('ftResponsavelcolheita',null,array('label' => 'Responsável da colheita'))
            ->add('fnLocalcolheita',null,array('label' => 'Local da colheita'))
            ->add('fnOperador',null,array('label' => 'Operador'))
            ->add('fnCliente',null,array('label' => 'Cliente'))
            ->add('fnModelo',null,array('label' => 'Modelo'))
            ->add('fnTipoaprovacao',null,array('label' => 'Tipo de aprovação'))
            ->add('fdAutorizacao',null,array('label' => 'Autorização'))
            ->add('fnProduto',null,array('label' => 'Produto'))
            ->add('fnTipocontrolo',null,array('label' => 'Tipo de controlo'))
            ->add('fnIdOrcamento',null,array('label' => 'ID do Orçamento'))
            ->add('ftEstado',null,array('label' => 'Estado'))
            ->add('fnEspecificacao',null,array('label' => 'Especificação'))
            ->add('ftCumpreespecificacao',null,array('label' => 'Cumpre especificação'))
            ->add('fdInicioanalise',null,array('label' => 'Inicio análise'))
            ->add('fbFacturada',null,array('label' => 'Faturada'))
            ->add('fnRequisicaocliente',null,array('label' => 'Requisição cliente'))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        /* QUAL CONCLUSÂO REMOVER*/
        $listMapper
            ->add('fnId','bigint',array('label' => 'ID'))
            ->add('ftEstado',null,array('label' => 'Estado'))
            ->add('fbRelatorioemitido','boolean', array('label' => 'Relatório') )
            ->add('ftSerie','string',array('label' => 'Série'))
            ->add('fnProduto',null,array('label' => 'Produto'))
            ->add('fdColheita','datetime',array('label' => 'Colheita'))
            //->add('fdConclusao','datetime',array('label' => 'Conclusão'))
            ->add('fnCliente',null,array('label' => 'Cliente'))
            ->add('fnLocalcolheita',null,array('label' => 'Local da Colheita'))
            ->add('ftConclusao','string',array('label' => 'Conclusão'))
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
        $x= 'col-md-6';
        if ($this->id($this->getSubject())) {
            $formMapper
                ->with('codigo',array('description' => 'Código','class' => 'Codigo_amostra col-md-2'))
                ->add('fnId', 'text', array('label' => 'ID','read_only' => true,'disabled'  => true))
                ->end();

                $x = 'col-md-4';
        }
        else {

        }

        $formMapper
            ->with('Cliente',array('description' => 'Cliente','class' => $x . ' Cliente_amostra'))
                ->add('fnCliente', 'sonata_type_model', array('label' => 'Cliente', 'by_reference' => false))
            ->end()
                ->add('fdColheita', 'datetime', array('label'=>'Data/hora Colheita','date_widget' => "single_text", 'time_widget' => "single_text"))
                ->add('fnOperador',null,array('label'=>'Operador'))
                ->add('ftResponsavelcolheita', 'choice',  array('label'=>'Responsável da Colheita','multiple' => false,'choices' => array('Cliente' => 'Cliente','Laboratorio' => 'Laboratorio','Outro' => 'Outro')))
            ->end()
            ->with('Lancamento',array('description' => 'Lançamento','class' => 'Lancamento_amostra'))
                ->add('fnModelo', 'sonata_type_model', array('label' => 'Modelo', 'by_reference' => false))
                ->add('ftGrupoparametros', 'sonata_type_model', array('label' => 'Grupo de parâmetros', 'by_reference' => false,'disabled'  => true))

                //->add('ftOrigem', 'text', array('label' => 'Ponto de Amostragem'))
            ->end()
            ->with('Caracterização',array('description' => 'Caracterização','class' => 'Caracterizacao_amostra'))
                ->add('fnProduto', 'sonata_type_model', array('label' => 'Produto', 'by_reference' => false))
                ->add('ftOrigem', 'text', array('label' => 'Origem', 'by_reference' => false))
                ->add('fnLegislacao', 'sonata_type_model', array('label' => 'Legislação', 'by_reference' => false))
                ->add('fnEspecificacao', 'sonata_type_model', array('label' => 'Especificação', 'by_reference' => false))
                ->add('fnRequisicaocliente', 'sonata_type_model', array('label' => 'Requisição do cliente', 'by_reference' => false))
                ->add('fnTipocontrolo', 'sonata_type_model', array('label' => 'Tipo de Controlo', 'by_reference' => false))
                ->add('fnTipo', 'sonata_type_model', array('label' => 'Tipo', 'by_reference' => false))
                ->add('fnTipoaprovacao', 'sonata_type_model', array('label' => 'Tipo de Aprovação', 'by_reference' => false))
                ->add('ftConclusao', 'text', array('label' => 'Conclusão'))
                ->add('ftObs', 'text', array('label' => 'Observações'))
            ->end()
            ->with('Lote',array('description' => 'Lote','class' => 'Lote_amostra'))
            ->add('fnAmostrasalimentos', 'sonata_type_admin',array(
                'btn_add' => false,'delete' => false,'label' => 'Amostras de alimentos'
            ))
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
