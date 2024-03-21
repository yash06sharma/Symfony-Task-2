<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CompanyRepository;
use App\Entity\Company;

class HomeController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->em = $entityManager;
    }

    #[Route('/home', name: 'app_home')]
    public function index(CompanyRepository $comp_repo): Response
    {
        // return $this->render('home/index.html.twig', [
        //     'controller_name' => $comp_repo,
        // ]);
        dd($comp_repo->findAll());
    }

    #[Route('/home/{id}', name: 'app_user')]
    public function selectedUser(CompanyRepository $comp_repo, int $id): Response
    {
        dd($comp_repo->find($id));
    }


    public function showAllUser(CompanyRepository $comp_repo): Response
    {
        dd($comp_repo->findAll());
    }
}
