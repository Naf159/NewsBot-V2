<?php
/**
 * Created by PhpStorm.
 * User: naf159
 * Date: 16/03/18
 * Time: 03:26 م
 */

namespace App\Admin;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ConfigAdmin extends AbstractAdmin{

    protected function configureFormFields(FormMapper $form)
    {
        $form->add('periode', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('periode');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('periode');
    }


}