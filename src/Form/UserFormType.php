<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Roles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email'
                ],
                'label' => false,
            ])

            ->add('userRole', EntityType::class, [
                'class' => Roles::class,
                'choice_label' => 'getRole',
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => false,
            ])

            ->add('password', PasswordType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Password'
                ],
                'label' => false,
            ])

            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Name'
                ],
                'label' => false,
            ])
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}