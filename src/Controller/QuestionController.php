<?php

namespace App\Controller;

use App\Form\QuestionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class QuestionController extends AbstractController
{
    #[Route('/question/ask', name: 'question_form')]
    public function index(Request $request): Response
    {
        $formQuestion = $this->createForm(QuestionType::class);

        $formQuestion->handleRequest($request);

        if ($formQuestion->isSubmitted() && $formQuestion->isValid()) {
        }

        return $this->render('question/index.html.twig', [
            'form' => $formQuestion->createView(),
        ]);
    }
    #[Route('/question/{id}', name: 'question_show')]
    public function show(Request $request, string $id ): Response {

    $question =  [
        'title' => 'How to become a web developer?',
        'content' => 'I want to become a web developer. What should I do first?',
        'rating' => 20,
        'author' => [
            'name' => 'John Doe',
            'avatar' => 'https://randomuser.me/api/portraits/men/36.jpg',
        ],
        'nbrOfReponses' => 15
        
    ];

        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }
}
