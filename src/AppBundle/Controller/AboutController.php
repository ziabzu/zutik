<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends Controller
{

	/**
	* @Route("/about")
	*/
	public function index() {

		return $this->render('static/about.html.twig', array(
            'number' => 123,
        ));

	}

}
