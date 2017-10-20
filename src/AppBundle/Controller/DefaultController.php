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
        $nombre = "Mar";
        $apellido = "Martínez";

        return $this->render('default/holamundo-i18n.html.twig', array(
            'name' => $nombre, 'apellido' =>$apellido
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
    
    /**
     * @Route("/planestudios")
     */
    public function planestudiosAction()
    {
        $planestudios = 'A014';
        $asigManager = new \AppBundle\Service\Mock\AsignaturasManager();
        $asignaturas = $asigManager->get($planestudios);
        
        return $this->render('default/planestudios.html.twig', array(
            'asignaturas' => $asignaturas,
        ));
    }

}
