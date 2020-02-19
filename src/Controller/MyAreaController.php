<?php
// src/Controller/MyAreaController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/my-area")
 */
class MyAreaController extends AbstractController
{
     /**
      * @Route("/profilo", name="profile")
      */
    public function profileAction()
    {
        return $this->render('my-area/about.html.twig', [

        ]);
    }
}