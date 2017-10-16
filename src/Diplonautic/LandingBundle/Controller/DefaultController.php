<?php

namespace Diplonautic\LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:index.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:about.html.twig');
    }
    public function privacyPolicyAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:privacy-policy.html.twig');
    }
    public function cookiesAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:cookies.html.twig');
    }
    public function contactAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:contact.html.twig');
    }
    public function productsAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:products.html.twig');
    }
    public function airConditionerAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:air-conditioner.html.twig');
    }
    public function refrigerationSystemsAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:refrigeration-systems.html.twig');
    }
    public function generatorsAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:generators.html.twig');
    }
    public function waterTreatmentAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:water-treatment.html.twig');
    }
    public function electricSystemsAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:electric-systems.html.twig');
    }
    public function maneuveringPropellerAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:maneuvering-propeller.html.twig');
    }
    public function opportunitiesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $opportunities = $em->getRepository('DiplonauticLandingBundle:Oportunitat')->findAll();
        return $this->render('DiplonauticLandingBundle:Default:opportunities.html.twig', array('opportunities' => $opportunities));
    }
    
}
