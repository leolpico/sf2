<?php

namespace Nas\RequetesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DemandeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('mediaType')
                ->add('titre')
                ->add('description')
                ->add('etat')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Nas\RequetesBundle\Entity\Demande'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'nas_requetesbundle_demande';
    }

}
