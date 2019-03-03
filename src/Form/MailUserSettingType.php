<?php

namespace App\Form;

use App\Entity\MailUserSetting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MailUserSettingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('mailSend', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('domaine', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MailUserSetting::class,
        ]);
    }
}
