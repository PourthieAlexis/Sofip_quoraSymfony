<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $questionsData = [
            [
                'title' => 'Première question',
                'content' => 'Contenu de la première question...',
            ],
            [
                'title' => 'Deuxième question',
                'content' => 'Contenu de la deuxième question...',
            ],
            [
                'title' => 'Troisième question',
                'content' => 'Contenu de la troisième question...',
            ],
        ];

        foreach ($questionsData as $data) {
            $question = new Question();
            $question->setTitle($data['title']);
            $question->setContent($data['content']);

            $manager->persist($question);
        }

        $manager->flush();
    }
}
