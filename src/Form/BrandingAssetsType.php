<?php
namespace App\Form;

use App\Form\BrandingAssetsType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class BrandingAssetsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            // Upload Logos
            ->add('brandLogoNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('uploadLogo', FileType::class, [
                'label' => 'Upload',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid file (JPEG, PNG, PDF)',
                    ])
                ],
            ])

            // Brand Fonts
            ->add('brandFontNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('brandFontName', TextType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('uploadFont', FileType::class, [
                'label' => 'Upload',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid file (JPEG, PNG, PDF)',
                    ])
                ],
            ])

            // Brand Colors
            ->add('brandColorNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])

            // Logo Colors
            ->add('logoColorNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('logoPrimaryColor', TextType::class, [
                'label' => 'Not Yet Created',
            ])
            ->add('logoSecondaryColor', TextType::class, [
                'label' => 'Not Yet Created',
            ])

            // Website Direction Prefrences
            ->add('websitePrefrencesNotCreated', CheckboxType::class, [
                'label' => 'Not Yet Created',
            ])
        ;
    }
}