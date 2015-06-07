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
    public function productsAction()
    {
        return $this->render('DiplonauticLandingBundle:Default:products.html.twig');
    }
}
