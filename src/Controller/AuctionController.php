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
        $auctionItem = [
            [
                "id" => 1,
                'title' => 'super car',
                "descriptions" => 'descriptions super car',
                "price" => "10000 pln",
            ],
            [
                "id" => 2,
                'title' => 'super bike',
                "descriptions" => 'descriptions super bike',
                "price" => "100 pln",
            ],
            [
                "id" => 3,
                'title' => 'super truck',
                "descriptions" => 'descriptions super truck',
                "price" => "1000000 pln",
            ]
        ];

        return $this->render('auction/index.html.twig',[
            'auctions' => $auctionItem
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