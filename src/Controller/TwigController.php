<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/twig")
 */
class TwigController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render(
        	'twig/index.html.twig',
			[
            'demain' => new \DateTime('+1day')
			]
		);
    }
}
