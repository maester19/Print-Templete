<?php 
namespace App\Controller;


use App\Services\PrintServices;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

Class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */

    public function index(){
        $document = [];

        $document[] = [
            'nom' => 'facture hsm',
            'desc' => 'Facture de paiement des frais de scolariter',
            'route' => 'facture_hsm'
        ];

        $document[] = [
            'nom' => 'billetin hsm',
            'desc' => 'Bulletin sequentiel des eleves',
            'route' => 'bulletin_hsm'
        ];
        $document[] = [
            'nom' => 'Ancien bulletin hsm',
            'desc' => 'Bulletin sequentiel des eleves',
            'route' => 'ancien_bulletin_hsm'
        ];

        return $this->render("pages/home.html.twig", [
            'documents' => $document
        ]);
    }

}