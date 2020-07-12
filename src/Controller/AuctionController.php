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
                'title' => 'super car',
                "descriptions" => 'descriptions super car',
                "price" => "10000 pln",
            ],
            [
                'title' => 'super bike',
                "descriptions" => 'descriptions super bike',
                "price" => "100 pln",
            ],
            [
                'title' => 'super truck',
                "descriptions" => 'descriptions super truck',
                "price" => "1000000 pln",
            ]
        ];

        return $this->render('Auction/index.html.twig',[
            'auctions' => $auctionItem
        ]);
    }
}