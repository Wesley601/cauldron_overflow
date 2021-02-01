<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('question/{id}/vote/{value<up|down>}', name: 'vote-comment', methods: ['POST'])]
    public function voteComment(string $id, string $value)
    {
        $vote = 0;
        if ($value === 'up') {
            $vote = rand(7, 100);
        } else {
            $vote = rand(0, 5);
        }

        return $this->json(['vote' => $vote]);
    }
}
