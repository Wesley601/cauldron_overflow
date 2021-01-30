<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    #[Route('/', name: 'homepage')]
    public function homepage()
    {
        return new Response('what a bewitching controller we have conjured!');
    }

    #[Route('/questions/{slug}', name: 'show')]
    public function show(string $slug)
    {
        return new Response(sprintf(
            'Future page to show the question "%s"!',
            $slug
        ));
    }
}
