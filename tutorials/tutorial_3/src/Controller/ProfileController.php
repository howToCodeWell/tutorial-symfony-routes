<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{
    #[Route(
        '/{userHandle}', 
        name: 'app_profile', 
        requirements: ['userHandle' => '^@[a-z]+']
    )]
    public function index(string $userHandle): JsonResponse
    {
        return $this->json([
            'userHandle' => $userHandle,
        ]);
    }

    #[Route('/edit', name: 'app_edit_profile')]
    public function edit(): JsonResponse
    {
        return $this->json([
            'message' => 'Edit action',
        ]);
    }
}
