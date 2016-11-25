<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{

	/**
	* @Route("/")
	*/
	public function index() {

		return $this->render('home.html.twig', array(
            'number' => 'Products here',
        ));

	}

}
