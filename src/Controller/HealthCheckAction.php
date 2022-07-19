<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
//определяем маршрут
#[Route('/health-check',name:'health_check', methods: ['GET'])]
class HealthCheckAction
{
    public function __invoke(): Response
    {
        return new JsonResponse(['status'=>'ok']);
    }
}