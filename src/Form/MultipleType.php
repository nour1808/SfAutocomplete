<?php

namespace App\Form;

use App\Entity\Choix;
use App\Entity\Multiple;
use App\Form\MultipleAutocompleteField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MultipleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            /*->add('choix', EntityType::class, [
                'class' => Choix::class,
                'choice_label' => 'name',
                'placeholder' => 'Choisissez un nom dans la liste',
                'autocomplete' => true,
                'multiple' => true,
            ])*/
            ->add('choix', MultipleAutocompleteField::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Multiple::class,
        ]);
    }
}
