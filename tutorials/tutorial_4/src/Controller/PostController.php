<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PostController extends AbstractController
{
    #[Route('/post/{page}', name: 'app_post', requirements: ['page' => '\d+'])]
    public function index(int $page = 1): JsonResponse
    {
        return $this->json([
            'pageNumber' => $page,
        ]);
    }
}
