<?php

namespace App\Form;

use App\Entity\Orders;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class OrdersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            /*->add('ordernumber', NumberType::class, [
                'label' => 'Num Orden',
                'attr' => [
                    'placeholder' => 'Num Orden',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])*/
            ->add('orderdate', DateType::class, [
                'label' => 'Fecha Orden',
                'attr' => [
                    'placeholder' => 'Fecha orden',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('requireddate', DateType::class, [
                'label' => 'Fecha Requisito',
                'attr' => [
                    'placeholder' => 'Fecha Requisito',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('shippeddate', DateType::class, [
                'label' => 'Fecha Envio',
                'attr' => [
                    'placeholder' => 'Fecha Envio',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('status', TextType::class, [
                'label' => 'Estado',
                'attr' => [
                    'placeholder' => 'Estado',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('comments', TextType::class, [
                'label' => 'Comentarios',
                'attr' => [
                    'placeholder' => 'Comentarios',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('customerNumber', NumberType::class, [
                'label' => 'Numero Cliente',
                'attr' => [
                    'placeholder' => 'Numero Cliente',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Orders::class,
        ]);
    }
}
