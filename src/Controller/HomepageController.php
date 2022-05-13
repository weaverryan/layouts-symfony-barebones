<?php

namespace App\Controller;

use Netgen\Bundle\LayoutsBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function __invoke()
    {
        return $this->render('homepage.html.twig');
    }
}
