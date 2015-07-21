<?php

namespace Diplonautic\LandingBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Diplonautic\LandingBundle\Util\Util;


class OportunitatAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('translations', 'a2lix_translations_gedmo', array(
                'by_reference' => false,
                'fields'=> array(
                'title' => array(),
                'description' => array(), 
                'price' => array())))
            ->add('imgFile', 'file', array('data_class' => null, 'required' => false))
        ;
    }
    

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')   
        ;
    }
    
    protected function configureShowFields(ShowMapper $showMapper) {
        
        $showMapper
           ->add('title')
           ->add('description')     
           ->add('price')
        ;
                
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('description')     
            ->add('price')
            ->add('_action', 'actions', array(
            'actions' => array(
               'edit' => array(),
               'show' => array())))  
        ;
    }
    
    public function prePersist($object) {
        Util::setEntityTranslatableFields($object, $this->getConfigurationPool()->getContainer()->getParameter('locale'));
        $this->saveFile($object);
    }
    public function preUpdate($object) {
        Util::setEntityTranslatableFields($object, $this->getConfigurationPool()->getContainer()->getParameter('locale'));
        $this->saveFile($object);
    }
    
    public function saveFile($object) {
        Util::upload($object, 'Img', $this->getConfigurationPool()->getContainer()->getParameter('diplonautic.folder.upload.images'), 'opportunities/', array(), array(), array());
    }
}
 