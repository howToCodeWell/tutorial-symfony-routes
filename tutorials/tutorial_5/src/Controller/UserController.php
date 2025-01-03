<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/user/profile', name: 'app_user')]
    public function profile(): JsonResponse
    {
        return $this->json([
            'method' => 'profile',
        ]);
    }

    #[Route('/user/contact', name: 'app_user')]
    public function contact(): JsonResponse
    {
        return $this->json([
            'method' => 'user',
        ]);
    }
}
