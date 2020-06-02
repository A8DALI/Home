<?php

	namespace App\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\Routing\Annotation\Route;

	class IndexController extends AbstractController
	{
		/**
		 * @Route("/index", name="index")
		 */
		public function index()
		{
			return $this->render('index/index.html.twig', [
				'controller_name' => 'IndexController',
			]);
		}

		/**
		 *
		 * @Route("/hello")
		 */
		public function hello()
		{
			return $this->render('index/hello.html.twig');
		}

		/**
		 * @Route("/bonjour/{qui}")
		 */
		public function bonjour($qui)
		{
			return $this->render(
				'index/bonjour.html.twig',
				['nom' => $qui
				]
			);
		}

		/**
		 * @Route("/salut/{qui}", defaults={"qui": "à toi"})
		 */
		public function salut($qui)
		{
			return $this->render(
				'index/salut.html.twig',
				[
					'qui' => $qui
				]
			);

		}

		/**
		 * @Route("coucou/{prenom}-{nom}", defaults={"nom": ""})
		 */
		public function coucou($prenom, $nom)
		{
			$nomComplet = rtrim($prenom . ' ' . $nom);

			return $this->render(
				'index/coucou.html.twig',
				[
					'nom' => $nomComplet
				]
			);
		}

		/**
		 * @Route("utilisateur/modification/{id}", requirements={"id": "\d+"})
		 */
		public function userEdit($id)
		{
			return $this->render(
				'index/user_edit.html.twig',
				[
					'id' => $id
					]
			);

		}
	}
