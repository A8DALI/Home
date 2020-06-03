<?php

	namespace App\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\Routing\Annotation\Route;

	/**
	 * @Route("/http")
	 */
	class HttpController extends AbstractController
	{
		/**
		 * @Route("/")
		 */
		public function index()
		{
			return $this->render('http/index.html.twig', [
				'controller_name' => 'HttpController',
			]);
		}

		/**
		 * @Route("/request")
		 */
		public function requete()
		{
			return $this->render('http/requete.html.twig');
		}
	}