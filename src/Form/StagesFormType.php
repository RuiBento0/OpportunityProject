<?php

namespace App\Form;

use App\Entity\Stages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StagesFormType extends AbstractType
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stages::class,
        ]);
    }
}
