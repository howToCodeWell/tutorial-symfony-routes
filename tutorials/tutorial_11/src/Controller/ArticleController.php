<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class ArticleController extends AbstractController
{
    public const DEFAULT_ORDER_BY = 'publishedDate';
    public const DEFAULT_SORT_BY = 'ASC';
    
    #[Route('/articles/{page}',
        name: 'app_article_list',
        methods:['GET'],
        requirements: ['page' => Requirement::DIGITS],
        defaults: [
            'page' => 1,
            'orderBy' => 'createdDate',
            'sortBy' => 'DESC'
        ]
    )]
    public function list(int $page, string $orderBy, string $sortBy): JsonResponse
    {
        return $this->json([
            'method' => 'list',
            'page' => $page,
            'orderBy' => $orderBy,
            'sortBy' => $sortBy
        ]);
    }

    #[Route('/articles/search/{page}',
    name: 'app_article_search',
    methods:['GET'],
    requirements: ['page' => Requirement::DIGITS],
    defaults: [
        'page' => 1,
        'orderBy' => self::DEFAULT_ORDER_BY,
        'sortBy' => self::DEFAULT_SORT_BY
        ]
    )]
    public function search(int $page, string $orderBy, string $sortBy): JsonResponse
    {
        return $this->json([
            'method' => 'search',
            'page' => $page,
            'orderBy' => $orderBy,
            'sortBy' => $sortBy
        ]);
    }
}
