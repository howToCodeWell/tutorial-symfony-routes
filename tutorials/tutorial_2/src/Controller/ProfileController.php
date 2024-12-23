<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{
    #[Route('/{userHandle}', name: 'app_profile')]
    public function index(string $userHandle): JsonResponse
    {
        return $this->json([
            'userHandle' => $userHandle,
        ]);
    }
}
