<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Addresses;
use App\Entity\Phones;
use App\Entity\Emails;
use App\Entity\Area;
use App\Entity\Accountstype;
use App\Entity\Accounts;
use App\Entity\Departments;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Contracts\Translation\TranslatorInterface;

class AccountsFormType extends AbstractType
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

        ->add('description', TextAreaType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Description'
            ],
            'label' => false,
        ])

        ->add('idarea', EntityType::class, [
            'class' => Area::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'form.placeholder.area'
            ],
            'label' => false,
           ])

           ->add('iduser', EntityType::class, [
            'class' => Users::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'form.placeholder.user'
            ],
            'label' => false,
           ])

           ->add('idtype', EntityType::class, [
            'class' => AccountsType::class,
            'choice_label' => 'getName',
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'form.placeholder.type'
            ],
            'label' => false,
           ])
           
           ->add('departments', EntityType::class, [
            'class' => Departments::class,
            'choice_label' => 'getName',
            'multiple' => true,
            'expanded' => true,
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
