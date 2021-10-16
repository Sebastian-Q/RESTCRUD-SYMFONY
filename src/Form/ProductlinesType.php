<?php

namespace App\Form;

use App\Entity\Productlines;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProductlinesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            /*->add('productLine', TextType::class, [
                'label' => 'Producto Linea',
                'attr' => [
                    'placeholder' => 'Producto Linea',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])*/
            ->add('textdescription', TextType::class, [
                'label' => 'Descripcion',
                'attr' => [
                    'placeholder' => 'Descripcion',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('htmldescription', TextType::class, [
                'label' => 'Descripcion Html',
                'attr' => [
                    'placeholder' => 'Descripcion Html',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('image', TextType::class, [
                'label' => 'Imagen',
                'attr' => [
                    'placeholder' => 'Imagen',
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
            'data_class' => Productlines::class,
        ]);
    }
}
