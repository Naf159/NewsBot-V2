<?php
namespace App\Admin;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Created by PhpStorm.
 * User: naf159
 * Date: 16/03/18
 * Time: 03:27 م
 */


class ActualiteAdmin extends AbstractAdmin{
    protected function configureFormFields(FormMapper $form)
    {
        $repository = $this->getDoctrine()->getRepository(Actualite::class);
        $listActualites= $repository->findAll();

        /*foreach ($listActualites as $actualite) {
            // $advert est une instance de Advert
            echo $actualite->getContent();
        }*/
        $form->add('source',ChoiceType::class, array(
                'choices'  => $listActualites)
        );
        $form->add('titre', TextType::class);
        $form->add('description', TextareaType::class);
        $form->add('image', ImageType::class);
        $form->add('page', TextType::class);
        $form->add('url_actualite', TextType::class);
        $form->add('date_publication', DateType::class);
        $form->add('date_modification', DateType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('source');
        $datagridMapper->add('titre');
        $datagridMapper->add('description');
        $datagridMapper->add('image');
        $datagridMapper->add('page');
        $datagridMapper->add('url_actualite');
        $datagridMapper->add('date_publication');
        $datagridMapper->add('date_modification');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('source');
        $listMapper->addIdentifier('titre');
        $listMapper->addIdentifier('description');
        $listMapper->addIdentifier('image');
        $listMapper->addIdentifier('page');
        $listMapper->addIdentifier('url_actualite');
        $listMapper->addIdentifier('date_publication');
        $listMapper->addIdentifier('date_modification');
    }


}