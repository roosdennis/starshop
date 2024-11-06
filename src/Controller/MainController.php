<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        $starshipCount = 457;

        $myShip = [
            'name' => 'Jedi Starfighter',
            'class' => 'Garden',
            'captain' => 'Obi-Wan Kenobi',
            'status' => 'under construction',
        ];
        
        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount,
            'myShip' => $myShip,
        ]);
    }
}
