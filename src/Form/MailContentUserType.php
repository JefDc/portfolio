<?php

namespace App\Form;

use App\Entity\MailContentUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MailContentUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('content', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('img', FileType::class, [
                'data_class' => true,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('link', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MailContentUser::class,
        ]);
    }
}
