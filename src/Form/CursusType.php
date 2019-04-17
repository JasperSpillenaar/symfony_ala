<?php

namespace App\Form;

use App\Entity\Cursus;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CursusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cursus_name')
            ->add('description', TextareaType::class)
            ->add('cursus_giver')
            ->add('cursus_type')
            ->add('location')
            ->add('cursus_date')
            ->add('start_time')
            ->add('end_time')
            ->add('min_part')
            ->add('max_part')
            ->add('cursus_id')
            ->add('room_id')
            ->add('user_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cursus::class,
        ]);
    }
}
