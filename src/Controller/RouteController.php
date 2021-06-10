<?php 
namespace App\Controller;


use App\Services\PrintServices;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/print")
 */
Class RouteController extends AbstractController
{

    /**
     * @Route("/facture_hsm", name="facture_hsm")
     */
    public function factureHsm(PrintServices $service){

        $html = $this->renderView("print/facture_hsm/facture_index.html.twig", []);
        $service->print($html, 'Facture HSM');
        dd();
    }

    /**
     * @Route("/bulletin_hsm", name="bulletin_hsm")
     */
    public function bulletinsHsm(PrintServices $service){

        $html = $this->renderView("print/bulletins_hsm/bulletin_index.html.twig", []);
        $service->print($html, 'Bulletin SHM');
        dd();
    }

    /**
     * @Route("/A_bulletin_hsm", name="ancien_bulletin_hsm")
     */
    public function ancienBulletinsHsm(PrintServices $service){

        $html = $this->renderView("print/print_files/bulletins.html.twig", []);
        $service->print($html, 'Ancien Bulletin SHM');
        dd();
    }
}