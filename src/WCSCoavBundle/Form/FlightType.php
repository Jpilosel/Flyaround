<?php

namespace WCSCoavBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class FlightType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('departure', EntityType::class, array('class'=>'WCSCoavBundle\Entity\Terrain',
                                                        'choice_label'=>'icao',) )
            ->add('arrival', EntityType::class, array('class'=>'WCSCoavBundle\Entity\Terrain',
                'choice_label'=>'icao',))
            ->add('pilot')
            ->add('freeSeats')
            ->add('takeofTime')
            ->add('plane', EntityType::class, array('class'=>'WCSCoavBundle\Entity\PlaneModel',
                'choice_label'=>'Manufacturer',))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WCSCoavBundle\Entity\Flight'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'wcscoavbundle_flight';
    }


}
