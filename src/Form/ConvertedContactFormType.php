<?php

namespace App\Form;

use App\Entity\Users;
use App\Entity\Accounts;
use App\Entity\Adreesses;
use App\Entity\Phones;
use App\Entity\Emails;
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

class ConvertedContactFormType extends AbstractType
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
            'required' => false,
            'empty_data' => null,
        ])

        ->add('surname', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Surname'
            ],
            'label' => false,
            'required' => false,
            'empty_data' => null,
        ])

        ->add('description', TextType::class, [
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Description'
            ],
            'label' => false,
            'required' => false,
            'empty_data' => null,
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
