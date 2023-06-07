<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Categories;
use App\Entity\Status;
use App\Entity\Stages;
use App\Entity\Priorities;
use App\Entity\Accounts;
use App\Entity\Departments;
use App\Entity\Campaign;
use App\Entity\Sources;
use App\Entity\Contacts;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Contracts\Translation\TranslatorInterface;

class OpportunitiesFormType extends AbstractType
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

        ->add('product', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Product'
            ],
            'label' => false,
        ])

        ->add('id_account', EntityType::class, [
            'class' => Accounts::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.id_account'
            ],
            'label' => false,
            'required' => false,
            'empty_data' => null,
           ])

        ->add('amount', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Amount'
            ],
            'label' => false,
        ])

        ->add('probability', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'probability'
            ],
            'label' => false,
        ])

        ->add('closedate', DateType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'CloseDate'
            ],
            'label' => false,
        ])

        ->add('description', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Description'
            ],
            'label' => false,
        ])

        ->add('id_contact', EntityType::class, [
            'class' => Contacts::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.id_contact'
            ],
            'label' => false,
           ])

        ->add('id_department', EntityType::class, [
            'class' => Departments::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.id_department'
            ],
            'label' => false,
           ])

           ->add('id_source', EntityType::class, [
            'class' => Sources::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.id_source'
            ],
            'label' => false,
           ])

           ->add('id_user', EntityType::class, [
            'class' => Users::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.id_user'
            ],
            'label' => false,
           ])

           ->add('id_stage', EntityType::class, [
            'class' => Stages::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.id_stage'
            ],
            'label' => false,
           ])
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
