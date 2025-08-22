<?php
namespace App\Form;

use App\Form\PaymentInfoType;
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

class PaymentInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            // Primary Contact Info
            ->add('paymentInfoFirstName', TextType::class, [
                'label' => 'First Name',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('paymentInfoLasttName', TextType::class, [
                'label' => 'Last Name',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('paymentInfoPersonalEmail', EmailType::class, [
                'label' => 'Personal Email',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])
            ->add('paymentInfoPersonalPhone', TextType::class, [
                'label' => 'Phone',
                'attr' => ['inputmode' => 'tel'],
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('paymentInfoPersonalThoneType', ChoiceType::class, [
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


            // ACH
            ->add('achBankName', TextType::class, [
                'label' => 'Bank Name *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('achAccountNumber', TextType::class, [
                'label' => 'Account Number *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('achRoutingNumber', TextType::class, [
                'label' => 'Routing Number *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('achAccountType', TextType::class, [
                'label' => 'Account Type *',
                'constraints' => [new Assert\NotBlank()],
            ])


            // Credit Card Info
            ->add('creditCardName', TextType::class, [
                'label' => 'Name on Card',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('creditCardNumber', TextType::class, [
                'label' => 'Card Number',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('creditCardExpiry', TextType::class, [
                'label' => 'Expires *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('creditCardCvv', TextType::class, [
                'label' => 'CVV',
                'constraints' => [new Assert\NotBlank()],
            ])


            // Automatic Payments
            ->add('birthDate', TextType::class, [
                'label' => 'Date of Birth *',
                'constraints' => [new Assert\NotBlank()],
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