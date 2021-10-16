<?php

namespace App\Form;

use App\Entity\Employees;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class EmployeesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            /*->add('employeeNumber', NumberType::class, [
                'label' => 'Numero',
                'attr' => [
                    'placeholder' => 'Numero',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])*/
            ->add('lastname', TextType::class, [
                'label' => 'Apellido',
                'attr' => [
                    'placeholder' => 'Apellido',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Nombre',
                'attr' => [
                    'placeholder' => 'Nombre',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('extension', TextType::class, [
                'label' => 'Extension',
                'attr' => [
                    'placeholder' => 'Extension',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Correo Electronico',
                'attr' => [
                    'placeholder' => 'Correo Electronico',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('officecode', TextType::class, [
                'label' => 'Codigo de Oficina',
                'attr' => [
                    'placeholder' => 'Codigo de Oficina',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('reportsto', NumberType::class, [
                'label' => 'Reporte',
                'attr' => [
                    'placeholder' => 'Reporte',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('jobtitle', TextType::class, [
                'label' => 'Trabajo',
                'attr' => [
                    'placeholder' => 'Trabajo',
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
            'data_class' => Employees::class,
        ]);
    }
}
