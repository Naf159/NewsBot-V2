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

class SourceAdmin extends AbstractAdmin{
    protected function configureFormFields(FormMapper $form)
    {
        $repository = $this->getDoctrine()->getRepository(Actualite::class);
        $listActualites= $repository->findAll();

        /*foreach ($listActualites as $actualite) {
            // $advert est une instance de Advert
            echo $actualite->getContent();
        }*/
        $form->add('nom_site', TextType::class);
        $form->add('url_site', TextType::class);
        $form->add('url_actualite', TextType::class);
        $form->add('description_site', TextareaType::class);
        $form->add('pattern_titre', TextType::class);
        $form->add('pattern_description', TextType::class);
        $form->add('pattern_page_suivante', DateType::class);
        $form->add('pattern_lien_actualite', DateType::class);
        $form->add('pattern_image', TextType::class);
        $form->add('pattern_description', TextType::class);
        $form->add('pattern_date_pub', TextType::class);
        $form->add('pattern_date_modif', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

        $datagridMapper->add('nom_site');
        $datagridMapper->add('url_site');
        $datagridMapper->add('url_actualite');
        $datagridMapper->add('description_site');
        $datagridMapper->add('pattern_titre');
        $datagridMapper->add('pattern_description');
        $datagridMapper->add('pattern_page_suivante');
        $datagridMapper->add('pattern_lien_actualite');
        $datagridMapper->add('pattern_image');
        $datagridMapper->add('pattern_description');
        $datagridMapper->add('pattern_date_pub');
        $datagridMapper->add('pattern_date_modif');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('nom_site');
        $listMapper->addIdentifier('url_site');
        $listMapper->addIdentifier('url_actualite');
        $listMapper->addIdentifier('description_site');
        $listMapper->addIdentifier('pattern_titre');
        $listMapper->addIdentifier('pattern_description');
        $listMapper->addIdentifier('pattern_page_suivante');
        $listMapper->addIdentifier('pattern_lien_actualite');
        $listMapper->addIdentifier('pattern_image');
        $listMapper->addIdentifier('pattern_date_pub');
        $listMapper->addIdentifier('pattern_date_modif');
    }


}