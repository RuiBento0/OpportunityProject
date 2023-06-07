<?php

namespace App\Form;

use App\Entity\Locations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class LocationsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'role'
            ],
            'label' => false,
        ])

        ->add('active', ChoiceType::class, [
            'attr' => [
                'class' => 'form-control',
            ],
            'choices' => [
                'Active' => '1',
                'Disable' => '0',
            ],
            'label' => false,
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Locations::class,
        ]);
    }
}
