<?php

namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{

    /**
     * @Route("/")
     */
    public function indexAction() {
        return new Response('Index action here');

    }
    /**
     * @Route("/genus")
     */
    public function showAction() {
        return new Response('Under the Sea');

    }

    /**
     * @Route("/genus/{genusName}")
     */
    public function nameAction($genusName) {

        $notes[] =
            '0 This is some note to display in twig
            and her is more of that note';
        $notes[] =
            '1 This is some note to display in twig
            and her is more of that note';
        $notes[] =
            '2 This is some note to display in twig
            and her is more of that note';



        //return new Response('Genus name is: '.$name);
        return $this->render('genus/show.html.twig', array(
            'name' => $genusName,
            'notes' => $notes
        ));

    }
    // returns note for specific name
    /**
     * @Route("/genus/{genusName}/notes")
     * @Method("GET")
     */

    public function getNotesAction() {

    }

}