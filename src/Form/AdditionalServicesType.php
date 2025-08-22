<?php
namespace App\Form;

use App\Form\AdditionalServicesType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class AdditionalServicesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('emailMarketing', CheckboxType::class, [
                'label' => 'Email Marketing',
            ])
            ->add('textMessageMarketing', CheckboxType::class, [
                'label' => 'Text Message Marketing',
            ])
            ->add('digitalPaidAds', CheckboxType::class, [
                'label' => 'Digital Paid Ads',
            ])
            ->add('photographyServices', CheckboxType::class, [
                'label' => 'Photography & Videography Services',
            ])
            ->add('customerRelationship', CheckboxType::class, [
                'label' => 'Customer Relationship Management Systems (CRM)',
            ])
            ->add('barterProgram', CheckboxType::class, [
                'label' => 'Barter & Trade Programs',
            ])
            ->add('automatedCallSystem', CheckboxType::class, [
                'label' => 'Automated Call System & Lead Follow Up',
            ])
            ->add('callRecording', CheckboxType::class, [
                'label' => 'Call Recording & Transcribing',
            ])
            ->add('socialChatBots', CheckboxType::class, [
                'label' => 'Social Chat Bots',
            ])
            ->add('advancedSeoPackages', CheckboxType::class, [
                'label' => 'Advanced SEO Packages',
            ])
            ->add('aiInegrations', CheckboxType::class, [
                'label' => 'AI Integrations',
            ])
            ->add('multilingualWebsite', CheckboxType::class, [
                'label' => 'Multilingual Website Functionality',
            ])
            ->add('hippaComplaint', CheckboxType::class, [
                'label' => 'HIPPA Compliant Forms',
            ])
            ->add('eCommerce', CheckboxType::class, [
                'label' => 'E-Commerce',
            ])
            ->add('digitalSignage', CheckboxType::class, [
                'label' => 'Digital Signage',
            ])
            ->add('other', CheckboxType::class, [
                'label' => 'Other',
            ])
            ->add('otherServiceInput', TextType::class, [
                'label' => 'Service Needed',
            ])
        ;
    }
}