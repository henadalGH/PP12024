<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TurnoController extends AbstractController
{
    #[Route('/', name: 'turno')]
    public function turnos(): Response
    {
        return $this->render('turno/turno.html.twig', [
            'controller_name' => 'TurnoController',
        ]);
    }
}
