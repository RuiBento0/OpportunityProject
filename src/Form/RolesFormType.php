<?php

namespace App\Form;

use App\Entity\Roles;
use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RolesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('role', TextType::class, [
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
            'data_class' => Roles::class,
        ]);
    }
}
