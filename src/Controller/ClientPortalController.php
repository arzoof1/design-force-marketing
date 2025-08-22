<?php
namespace App\Controller;

use App\Form\ClientInfoType;
use App\Form\DomainInfoType;
use App\Form\SocialInfoType;
use App\Form\PaymentInfoType;
use App\Form\BrandingAssetsType;
use App\Form\BusinessQuestionsType;
use App\Form\AdditionalServicesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Form\ClientPortalTabs\ClientPortalType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientPortalController extends AbstractController
{
    #[Route('/portal/client-info', name: 'client_info')]
    public function client_info(Request $request): Response
    {
        $form = $this->createForm(ClientInfoType::class);
        $form->handleRequest($request);

        return $this->render('client-portal/client-info/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/portal/payment-info', name: 'payment_info')]
    public function payment_info(Request $request): Response
    {
        $form = $this->createForm(PaymentInfoType::class);
        $form->handleRequest($request);

        return $this->render('client-portal/payment-info/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/portal/social-info', name: 'social_info')]
    public function social_info(Request $request): Response
    {
        $form = $this->createForm(SocialInfoType::class);
        $form->handleRequest($request);

        return $this->render('client-portal/social-info/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/portal/domain-info', name: 'domain_info')]
    public function domain_info(Request $request): Response
    {
        $form = $this->createForm(DomainInfoType::class);
        $form->handleRequest($request);

        return $this->render('client-portal/domain-info/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/portal/branding-assets', name: 'branding_assets')]
    public function branding_assets(Request $request): Response
    {
        $form = $this->createForm(BrandingAssetsType::class);
        $form->handleRequest($request);

        return $this->render('client-portal/branding-assets/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/portal/business-questions', name: 'business_questions')]
    public function business_questions(Request $request): Response
    {
        $form = $this->createForm(BusinessQuestionsType::class);
        $form->handleRequest($request);

        return $this->render('client-portal/business-questions/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/portal/additional-services', name: 'additional_services')]
    public function additional_services(Request $request): Response
    {
        $form = $this->createForm(AdditionalServicesType::class);
        $form->handleRequest($request);

        return $this->render('client-portal/additional-services/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
