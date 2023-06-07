<?php

namespace App\Form;

use App\Entity\Departments;
use App\Entity\Locations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DepartmentsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Name'
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

        ->add('idlocation', EntityType::class, [
            'class' => Locations::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-control',
            ],
            'label' => false,
        ])
        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Departments::class,
        ]);
    }
}
