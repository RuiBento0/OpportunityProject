<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Categories;
use App\Entity\Status;
use App\Entity\Priorities;
use App\Entity\Accounts;
use App\Entity\Departments;
use App\Entity\Campaign;
use App\Entity\Area;
use App\Entity\Sources;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Contracts\Translation\TranslatorInterface;

class LeadsFormType extends AbstractType
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

        ->add('account', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Name'
            ],
            'label' => false,
        ])

         

        ->add('amount', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Amount'
            ],
            'label' => false,
        ])

        ->add('description', TextareaType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Description'
            ],
            'label' => false,
        ])

        ->add('id_campaign', EntityType::class, [
            'class' => Campaign::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.campaign'
            ],
            'label' => false,
           ])

        ->add('id_area', EntityType::class, [
            'class' => Area::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.area'
            ],
            'label' => false,
           ])

        ->add('id_department', EntityType::class, [
            'class' => Departments::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.departments'
            ],
            'label' => false,
           ])

        ->add('id_status', EntityType::class, [
            'class' => Status::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.status'
            ],
            'label' => false,
           ])

           ->add('id_source', EntityType::class, [
            'class' => Sources::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-select',
                'placeholder' => 'form.placeholder.source'
            ],
            'label' => false,
           ])

           ->add('id_user', EntityType::class, [
            'class' => Users::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'form.placeholder.user'
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
