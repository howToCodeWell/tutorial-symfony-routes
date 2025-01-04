<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user', name: 'app_user_')]
class UserController extends AbstractController
{
    #[Route('/{id}',
        name: 'index',
        requirements: ['id' => '\d+'],
        methods: ['GET'],
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
        requirements: ['id' => '\d+'],
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
        requirements: ['id' => '\d+']
    )]
    public function delete(int $id): JsonResponse
    {
        return $this->json([
            'method' => 'delete',
            'user_id' => $id
        ]);
    }
}
