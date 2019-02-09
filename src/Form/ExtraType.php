<?php

namespace App\Form;

use App\Entity\Extra;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExtraType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numberPhone', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('address', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('email', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('textContact', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'rows' => '10'
                ]
            ])
            ->add('textSoftSkill', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'rows' => "10"
                ]
            ])
            ->add('titleContact', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('subTitleContact', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('titleSoftSkill', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('subTitleSoftSkill', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('titleSkill', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('subTitleAboutUs', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('github', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('linkedin', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('twitter', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Extra::class,
        ]);
    }
}
