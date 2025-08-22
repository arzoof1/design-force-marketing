<?php
namespace App\Form;

use App\Form\DomainInfoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class DomainInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            // Domain Registration
            ->add('noDomainsYet', CheckboxType::class, [
                'label' => 'I don’t have any domains yet',
                'constraints' => [new Assert\NotNull()],
            ])
            ->add('accountType', ChoiceType::class, [
                'label' => 'Select Account Type',
                'choices'  => [
                    'Client Account' => 'clientAccount',
                    'DFM Account' => 'dfmAccount',
                    'Delegated Access' => 'delegatedAccess',
                ],
                'expanded' => true,   // radios instead of select
                'multiple' => false,  // only one can be selected
                'constraints' => [
                    new Assert\NotNull([
                        'message' => 'Please select an account type',
                    ]),
                ],
            ])
            ->add('domainUrl', TextType::class, [
                'label' => 'Domain Url',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('domainType', TextType::class, [
                'label' => 'Domain Type',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('domainRegistrar', TextType::class, [
                'label' => 'Link to Domain Registrar',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])
            ->add('userName', TextType::class, [
                'label' => 'Username *',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Password *',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])
            ->add('confirmPassword', PasswordType::class, [
                'label' => 'Confirm Password *',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])


            // On-Domain Emails
            ->add('emailsOnDomains', ChoiceType::class, [
                'label' => 'Do you have emails set up on any of these domains?',
                'choices'  => [
                    'Yes' => 'Yes',
                    'No' => 'No',
                ],
                'expanded' => true,   // radios instead of select
                'multiple' => false,  // only one can be selected
                'constraints' => [
                    new Assert\NotNull([
                        'message' => 'Please select Yes or No',
                    ]),
                ],
            ])
            ->add('emailProvider', ChoiceType::class, [
                'label' => 'Phone Type',
                'choices' => [
                    'Select your email provider' => '',
                    'Google' => 'google',
                    'Outlook'   => 'outlook',
                ],
                'placeholder' => 'Select your email provider',
                'constraints' => [new Assert\NotBlank()],
            ])

        ;
    }
}