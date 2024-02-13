<?php

namespace App\Controller;

use App\Entity\Author;
use App\Entity\Question;
use App\Form\QuestionType;
use App\Repository\AuthorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    #[Route('/question/ask', name: 'question_name')]
    public function index(Request $request, EntityManagerInterface $entityManager, AuthorRepository $authorRepo): Response
    {
        $question = new Question();
        $user = $authorRepo->findBy(["name" => "John Doe"]);
        if (!$user) {
            throw new AccessDeniedException('Vous devez être connecté pour poser une question.');
        }

        $question->setAuthor($user[0]);
        $question->setVote(0);

        $formQuestion = $this->createForm(QuestionType::class, $question);
        $formQuestion->handleRequest($request);

        if ($formQuestion->isSubmitted() && $formQuestion->isValid()) {
            dump($formQuestion->getData());

            $entityManager->persist($question);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('question/index.html.twig', [
            'form' => $formQuestion->createView(),
        ]);
    }
}
