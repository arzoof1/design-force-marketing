<?php
namespace App\Form;

use App\Form\ContactInfoType;
use App\Form\AdditionalLocationType;
use App\Form\PrimaryContactInfoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ClientInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Business Info
            ->add('businessName', TextType::class, [
                'label' => 'Business Name',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('businessAddress', TextType::class, [
                'label' => 'Business Address',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('businessCity', TextType::class, [
                'label' => 'City',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('businessState', ChoiceType::class, [
                'label' => 'State',
                'placeholder' => 'Select',
                'choices' => AdditionalLocationType::states(),
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('businessZip', TextType::class, [
                'label' => 'ZIP',
                'attr' => ['inputmode' => 'numeric'],
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('businessPhone', TextType::class, [
                'label' => 'Business Phone',
                'attr' => ['inputmode' => 'tel'],
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('businessPhoneType', ChoiceType::class, [
                'label' => 'Phone Type',
                'choices' => ['Phone Type *' => '', 'Mobile' => 'mobile', 'Work' => 'work', 'Home' => 'home'],
                'placeholder' => 'Select',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('businessEmail', EmailType::class, [
                'label' => 'Business Email',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])
            ->add('additionalLocations', CollectionType::class, [
                'label' => false,
                'entry_type' => AdditionalLocationType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'prototype' => true,
                'attr' => [
                    'data-controller' => 'collection',
                    'data-collection-add-label-value' => 'Add an Additional Business Location',
                ],
            ])


            // Primary Contact Info
            ->add('primaryFirstName', TextType::class, [
                'label' => 'First Name',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('primaryLastName', TextType::class, [
                'label' => 'Last Name',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('primaryPersonalEmail', EmailType::class, [
                'label' => 'Personal Email',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])
            ->add('primaryPersonalPhone', TextType::class, [
                'label' => 'Phone',
                'attr' => ['inputmode' => 'tel'],
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('primaryPersonalPhoneType', ChoiceType::class, [
                'label' => 'Phone Type',
                'choices' => [
                    'Phone Type *' => '',
                    'Mobile' => 'mobile',
                    'Work'   => 'work',
                    'Home'   => 'home',
                ],
                'placeholder' => 'Select',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('primaryPersonalMailingAddress', TextType::class, [
                'label' => 'Mailing Address',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('primaryPersonalMailingCity', TextType::class, [
                'label' => 'City',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('primaryPersonalMailingState', ChoiceType::class, [
                'label' => 'State',
                'placeholder' => 'Select',
                'choices' => AdditionalLocationType::states(), // use same as business for consistency
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('primaryPersonalMailingZip', TextType::class, [
                'label' => 'ZIP',
                'attr' => ['inputmode' => 'numeric'],
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('primaryPersonalNotes', TextareaType::class, [
                'label' => 'Any notes?',
                'required' => false,
            ])


            // Secondary Contact Info
            ->add('secondaryFirstName', TextType::class, [
                'label' => 'First Name',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('secondaryLastName', TextType::class, [
                'label' => 'Last Name',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('secondaryPersonalEmail', EmailType::class, [
                'label' => 'Personal Email',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])
            ->add('secondaryPersonalPhone', TextType::class, [
                'label' => 'Phone',
                'attr' => ['inputmode' => 'tel'],
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('secondaryPersonalPhoneType', ChoiceType::class, [
                'label' => 'Phone Type',
                'choices' => [
                    'Phone Type *' => '',
                    'Mobile' => 'mobile',
                    'Work'   => 'work',
                    'Home'   => 'home',
                ],
                'placeholder' => 'Select',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('secondaryPersonalNotes', TextareaType::class, [
                'label' => 'Any notes?',
                'required' => false,
            ])
        ;
    }


    public static function states(): array
    {
        return [
            'State *' => '', 'Alabama' => 'AL', 'Alaska' => 'AK', 'Arizona' => 'AZ', 'Arkansas' => 'AR', 'California' => 'CA',
            'Colorado' => 'CO', 'Connecticut' => 'CT', 'Delaware' => 'DE', 'Florida' => 'FL', 'Georgia' => 'GA',
            'Hawaii' => 'HI', 'Idaho' => 'ID', 'Illinois' => 'IL', 'Indiana' => 'IN', 'Iowa' => 'IA',
            'Kansas' => 'KS', 'Kentucky' => 'KY', 'Louisiana' => 'LA', 'Maine' => 'ME', 'Maryland' => 'MD',
            'Massachusetts' => 'MA', 'Michigan' => 'MI', 'Minnesota' => 'MN', 'Mississippi' => 'MS', 'Missouri' => 'MO',
            'Montana' => 'MT', 'Nebraska' => 'NE', 'Nevada' => 'NV', 'New Hampshire' => 'NH', 'New Jersey' => 'NJ',
            'New Mexico' => 'NM', 'New York' => 'NY', 'North Carolina' => 'NC', 'North Dakota' => 'ND', 'Ohio' => 'OH',
            'Oklahoma' => 'OK', 'Oregon' => 'OR', 'Pennsylvania' => 'PA', 'Rhode Island' => 'RI', 'South Carolina' => 'SC',
            'South Dakota' => 'SD', 'Tennessee' => 'TN', 'Texas' => 'TX', 'Utah' => 'UT', 'Vermont' => 'VT',
            'Virginia' => 'VA', 'Washington' => 'WA', 'West Virginia' => 'WV', 'Wisconsin' => 'WI', 'Wyoming' => 'WY',
            'District of Columbia' => 'DC'
        ];
    }
}