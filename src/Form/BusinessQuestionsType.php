<?php
namespace App\Form;

use App\Form\BusinessQuestionsType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BusinessQuestionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            // Business Identity & Positioning
            ->add('targetAudience', TextareaType::class, [
                'label' => 'Who is your target audience?',
            ])
            ->add('businessCompetitors', TextareaType::class, [
                'label' => 'Which businesses would you consider your main competitors? And what makes you different from them?',
            ])
            ->add('busniessSlogan', TextareaType::class, [
                'label' => 'Does your business have a slogan or tagline?',
            ])


            // Marketing goals
            ->add('marketingGoals', TextareaType::class, [
                'label' => 'Is there anything you’re struggling with getting the word out about, and/or anything you really want to push/areas you want to grow? (Particular offerings, specials, events, services, etc.)',
            ])
            ->add('marketingChallenges', TextareaType::class, [
                'label' => 'What is your vision for your business in a year? 3 years? 5 years?',
            ])
            ->add('marketingPlans', TextareaType::class, [
                'label' => 'What are your biggest “pain points” surrounding marketing your business currently?',
            ])
            ->add('marketingSeo', TextareaType::class, [
                'label' => 'What keywords are you hoping to rank for on search engines?',
            ])


            // Website Purpose
            ->add('websitePurpose', TextareaType::class, [
                'label' => 'What is the main purpose of your website? (Sales leads, ordering products, informational, etc.) Basically, what is the main action you want people to take when they come to your site?',
            ])
            ->add('websiteStrategy', TextareaType::class, [
                'label' => 'What do you like or dislike about your current site?',
            ])
            ->add('websiteFeatures', TextareaType::class, [
                'label' => 'Are there any features of your current site that you want to keep? (Newsletter sign up, any contact forms, etc.)',
            ])
            ->add('websiteYouLike', TextareaType::class, [
                'label' => 'Are there any websites you’ve seen that you like? What do you like about them? Any comparable sites that you really dislike? Paste any links below and note Like/Dislike next to them.',
            ])


            // POS System
            ->add('posSystem', TextareaType::class, [
                'label' => 'What is your current POS (Point of Sale) system (if applicable)? Please leave the login info for it here. Also, if you have any current menus or a list of your services/specialties, please email them to support@designforcemarketing.com.',
            ])

        ;
    }
}