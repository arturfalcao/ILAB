<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AgendaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // 'attr'   =>  array('class'   => 'c4')

        /*$builder->add($builder->create('1', 'form', array('virtual' => true, 'attr' => array('class'   => 'c4')))
            ->add('title','text', array('label' => 'Nome do Evento'))
            ->add('morada','text', array('label' => 'Onde'))
            ->add('startdatetime', 'datetime', array('label'=>'Data de inicio','date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('enddatetime', 'datetime', array('label'=>'Data de fim','date_widget' => "single_text", 'time_widget' => "single_text"))
            ->add('descricao','textarea', array('label' => 'Descrição'))
            ->add('allDay','checkbox', array('label' => 'Todo o dia?'))
            ->add('save', 'submit', array('label' => 'Gravar'))
        );*/

        $builder
            ->add('title','text', array('label' => 'Nome do Evento','label_attr' => array('class' => 'MYCLASSFOR_LABEL'),'attr' => array('class' => 'c4')))
            ->add('morada','text', array('label' => 'Onde','attr' => array('class' => 'c4')))
            ->add('descricao','textarea', array('label' => 'Descrição','attr' => array('class' => 'c4')))
            ->add('startdatetime', 'datetime', array('attr' => array('class' => 'c4'),'label'=>'Data de inicio','date_widget' => "single_text",'time_widget' => "single_text",
                ))
            ->add('enddatetime', 'datetime', array('attr' => array('class' => 'c4'),'label'=>'Data de fim','date_widget' => "single_text", 'time_widget' => "single_text"))


            ->add('allDay','checkbox', array('attr' => array('class' => 'c4'),'label' => 'Todo o dia?'))
//            ->add('save', 'submit', array('attr' => array('class' => 'c4'),'label' => 'Gravar'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Agenda'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Agenda';
    }
}
