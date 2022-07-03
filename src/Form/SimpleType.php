<?php

namespace App\Form;

use App\Entity\Choix;
use App\Entity\Simple;
use App\Form\SimpleAutocompleteField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SimpleType extends AbstractType
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
            ])*/
            ->add('choix', SimpleAutocompleteField::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Simple::class,
        ]);
    }
}
