<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NhanVienController extends AbstractController
{
    #[Route('/nhan/vien', name: 'app_nhan_vien')]
    public function index(): Response
    {
        return $this->render('nhan_vien/index.html.twig', [
            'controller_name' => 'NhanVienController',
        ]);
    }
}
