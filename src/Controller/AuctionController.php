<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AuctionController extends Controller
{
    /**
     * @Route("/", name="auction_index")
     */
    public function indexAction()
    {
        $auctionsList = $this->getDoctrine()->getRepository('App:AuctionItem')->findAll();
        return $this->render('auction/index.html.twig',[
            'auctions' => $auctionsList
        ]);
    }

    /**
     * @Route("/{id}", name="auction_details")
     * @param $id
     */
    public function detailsAction($id)
    {
        return $this->render("auction/details.html.twig");
    }
}