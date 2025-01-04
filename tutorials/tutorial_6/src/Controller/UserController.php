<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/user/{id}',
        name: 'app_user_index',
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

    #[Route('/user/{id}/edit', 
        name: 'app_user_edit', 
        methods: ['POST'],
        requirements: ['id' => '\d+']
    )]
    public function edit(int $id): JsonResponse
    {
        return $this->json([
            'method' => 'edit',
            'user_id' => $id
        ]);
    }

    #[Route('/user/{id}/delete', 
        name: 'app_user_delete', 
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
