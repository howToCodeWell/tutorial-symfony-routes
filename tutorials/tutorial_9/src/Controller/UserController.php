<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{


    #[Route('/user/{id}',
        name: 'app_user_index',
        methods: ['GET'],
    )]
    public function index(int $id): JsonResponse
    {
        return $this->json([
            'method' => 'index',
            'user_id' => $id
        ]);
    }

    #[Route('/user/list', 
        name: 'app_user_list',
        priority: 2
    )]
    public function list(): JsonResponse
    {
        return $this->json([
            'method' => 'list'
        ]);
    }

}
