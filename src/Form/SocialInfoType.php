<?php
namespace App\Form;

use App\Form\SocialInfoType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class SocialInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            // Instagram Access
            ->add('instagramAccountNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('instagramUserName', TextType::class, [
                'label' => 'Username *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('instagramPassword', PasswordType::class, [
                'label' => 'Password *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('instagramConfirmPassword', PasswordType::class, [
                'label' => 'Confirm Password *',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])


            // Google Access
            ->add('googleAccountNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('googleUserName', TextType::class, [
                'label' => 'Username *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('googlePassword', PasswordType::class, [
                'label' => 'Password *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('googleConfirmPassword', PasswordType::class, [
                'label' => 'Confirm Password *',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])


            // Bing Access
            ->add('bingAccountNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('bingUserName', TextType::class, [
                'label' => 'Username *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('bingPassword', PasswordType::class, [
                'label' => 'Password *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('bingConfirmPassword', PasswordType::class, [
                'label' => 'Confirm Password *',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])


            // Apple Maps Access
            ->add('appleMapsAccountNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('appleMapsUserName', TextType::class, [
                'label' => 'Username *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('appleMapsPassword', PasswordType::class, [
                'label' => 'Password *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('appleMapsConfirmPassword', PasswordType::class, [
                'label' => 'Confirm Password *',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])


            // Linkedin Access
            ->add('linkedinAccountNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('linkedinUserName', TextType::class, [
                'label' => 'Username *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('linkedinPassword', PasswordType::class, [
                'label' => 'Password *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('linkedinConfirmPassword', PasswordType::class, [
                'label' => 'Confirm Password *',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])


            // BBB Access
            ->add('bbbAccountNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('bbbUserName', TextType::class, [
                'label' => 'Username *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('bbbPassword', PasswordType::class, [
                'label' => 'Password *',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('bbbConfirmPassword', PasswordType::class, [
                'label' => 'Confirm Password *',
                'constraints' => [new Assert\NotBlank(), new Assert\Email()],
            ])
        ;
    }
}