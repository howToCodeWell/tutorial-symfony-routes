<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user',
    name: 'app_user_',
    methods:['GET'],
    requirements: ['id' => '\d+']
)]
class UserController extends AbstractController
{
    #[Route('/{id}',
        name: 'index',
    )]
    public function index(int $id): JsonResponse
    {
        return $this->json([
            'method' => 'index',
            'user_id' => $id
        ]);
    }

    #[Route('/{id}/edit',
        name: 'edit',
        methods: ['POST'],
    )]
    public function edit(int $id): JsonResponse
    {
        return $this->json([
            'method' => 'edit',
            'user_id' => $id
        ]);
    }

    #[Route('/{id}/delete', 
        name: 'delete', 
        methods: ['DELETE'],
    )]
    public function delete(int $id): JsonResponse
    {
        return $this->json([
            'method' => 'delete',
            'user_id' => $id
        ]);
    }
}
