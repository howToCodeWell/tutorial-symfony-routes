<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class ArticleController extends AbstractController
{

    #[Route('/article', name: 'app_article')]
    public function index(Request $request): JsonResponse
    {
        return $this->json([
            'method' => 'list',
            'route' => $request->attributes->all()
        ]);
    }
}
