<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class ArticleController extends AbstractController
{
    #[Route('/articles/{page}',
        name: 'app_article_list',
        methods:['GET'],
        requirements: ['page' => Requirement::DIGITS]
    )]
    public function list(int $page): JsonResponse
    {
        return $this->json([
            'method' => 'list',
            'page' => $page
        ]);
    }

    #[Route('/article/{id}',
        name: 'app_article_index',
        methods:['GET'],
        requirements: ['id' => Requirement::UUID_V4]
    )]
    public function index(string $id): JsonResponse
    {
        return $this->json([
            'method' => 'index',
            'id' => $id
        ]);
    }
}
