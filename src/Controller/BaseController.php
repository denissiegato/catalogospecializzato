<?php
// src/Controller/BaseController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
     /**
      * @Route("/", name="home")
      */
    public function homeAction()
    {
        return $this->render('index.html.twig', [

        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('about.html.twig', [

        ]);
    }

    /**
     * @Route("/ringraziamenti", name="feedback")
     */
    public function feedbackAction()
    {
        return $this->render('testimonials.html.twig', [

        ]);
    }

    /**
     * @Route("/quotazioni", name="quote")
     */
    public function quoteAction()
    {
        return $this->render('pricingbox.html.twig', [

        ]);
    }

    /**
     * @Route("/note-legali", name="note")
     */
    public function noteAction()
    {
        return $this->render('components.html.twig', [

        ]);
    }

    /**
     * @Route("/contattaci", name="contact")
     */
    public function contactAction()
    {
        return $this->render('contact.html.twig', [

        ]);
    }

    /**
     * @Route("/notiziario", name="blog")
     */
    public function blogAction()
    {
        return $this->render('blog-right-sidebar.html.twig', [

        ]);
    }

    /**
     * @Route("/catalogo", name="catalogo")
     */
    public function productAction()
    {
        return $this->render('portfolio-4cols.html.twig', [

        ]);
    }
}