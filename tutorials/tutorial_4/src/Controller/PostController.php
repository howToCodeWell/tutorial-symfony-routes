<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PostController extends AbstractController
{
    #[Route(
        '/post/{pageNumber}', 
        name: 'app_post', 
        requirements: ['pageNumber' => '\d+']
    )]
    public function index(int $pageNumber = 1): JsonResponse
    {
        return $this->json([
            'pageNumber' => $pageNumber,
        ]);
    }
}
