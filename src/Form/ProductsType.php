<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('productname', TextType::class, [
                'label' => 'Producto',
                'attr' => [
                    'placeholder' => 'Producto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productline', TextType::class, [
                'label' => 'Producto Linea',
                'attr' => [
                    'placeholder' => 'Producto Linea',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productscale', TextType::class, [
                'label' => 'Escala Productos',
                'attr' => [
                    'placeholder' => 'Escala Productos',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productvendor', TextType::class, [
                'label' => 'Vendedor',
                'attr' => [
                    'placeholder' => 'Vendedor',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productdescription', TextType::class, [
                'label' => 'Descripcion',
                'attr' => [
                    'placeholder' => 'Descripcion',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('quantityinstock', NumberType::class, [
                'label' => 'Cantidad',
                'attr' => [
                    'placeholder' => 'Cantidad',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('buyprice', NumberType::class, [
                'label' => 'Precio',
                'attr' => [
                    'placeholder' => 'Precio',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('msrp', NumberType::class, [
                'label' => 'MSRP',
                'attr' => [
                    'placeholder' => 'MSRP',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productcode', TextType::class, [
                'label' => 'Codigo',
                'attr' => [
                    'placeholder' => 'Codigo',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            /*
            ->add('ordernumber', NumberType::class, [
                'label' => 'Numero Orden',
                'attr' => [
                    'placeholder' => 'Numero Orden',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
