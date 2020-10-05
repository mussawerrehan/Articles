<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     * @Method({"GET"})
     */
    public function index()
    {
        $articles = ['Article 1', 'Article 2'];
        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
