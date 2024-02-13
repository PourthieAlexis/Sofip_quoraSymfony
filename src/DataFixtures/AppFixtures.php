<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\Comment;
use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création de l'auteur
        $author = new Author();
        $author->setName("John Doe");
        $author->setEmail("alexispourthie@gmail.com");
        $author->setPassword("123");
        $author->setProfileImage("https://randomuser.me/api/portraits/men/62.jpg");

        $manager->persist($author);

        // Création de questions avec des commentaires
        for ($i = 0; $i < 5; $i++) {
            $question = new Question();
            $question->setTitle("Titre de la question $i");
            $question->setContent("Contenu de la question $i");
            $question->setVote(rand(0, 20));
            $question->setAuthor($author);

            // Création de commentaires pour chaque question
            for ($j = 0; $j < rand(0, 5); $j++) {
                $comment = new Comment();
                $comment->setContent("Commentaire $j pour la question $i");
                $comment->setQuestion($question);
                $manager->persist($comment);
            }

            $manager->persist($question);
        }

        $manager->flush();
    }
}
