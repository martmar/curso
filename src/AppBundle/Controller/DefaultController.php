<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use \AppBundle\Service\Mock\AsignaturasManager;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/holamundo")
     */
    public function helloAction()
    {
        return new Response(
            '<html><body>Hello world</body></html>'
        );
    }

    /**
     * @Route("/holamundo2")
     */
    public function hello2Action()
    {
        $nombre = "mar";

        return $this->render('default/holamundo.html.twig');
    }

    /**
     * @Route("/holamundo3")
     */
    public function hello3Action()
    {
        $nombre = "mar";
        $otrodato = "otro dato";

        return $this->render('default/holamundo-i18n.html.twig', array(
            'name' => $nombre, 'libro' => $otrodato
        ));
    }

    /**
     * @Route("/holamundo4")
     */
    public function hello4Action()
    {
        $nombre = "mar";

        return $this->render('default/mundo-upm.html.twig', array(
            'name' => $nombre,
        ));
    }

}
