<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {

        
        $question = [
            [
                'id' => '1',
                'title' => 'How to become a web developer?',
                'content' => 'I want to become a web developer. What should I do first?',
                'rating' => 20,
                'author' => [
                    'name' => 'John Doe',
                    'avatar' => 'https://randomuser.me/api/portraits/men/36.jpg',
                ],
                'nbrOfReponses' => 15
                
            ],
            [
                'id' => '2',
                'title' => 'How to become a mobile developer?',
                'content' => 'I want to become a mobile developer. What should I do first?',
                'rating' => 0,
                'author' => [
                    'name' => 'Jane Doe',
                    'avatar' => 'https://randomuser.me/api/portraits/women/33.jpg',
                ],
                'nbrOfReponses' => 10
            ],
            [
                'id' => '3',
                'title' => 'How to become a data scientist?',
                'content' => 'I want to become a data scientist. What should I do first?',
                'rating' => -10,
                'author' => [
                    'name' => 'Alice Doe',
                    'avatar' => 'https://randomuser.me/api/portraits/women/23.jpg',
                ],
                'nbrOfReponses' => 5
            ],
        ];

        return $this->render('home/index.html.twig', [
            'questions' => $question,
        ]);
    }
}
