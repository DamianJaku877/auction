<?php


namespace App\Controller;


use App\Entity\AuctionItem;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuctionController extends Controller
{
    /**
     * @Route("/auction", name="auction_index")
     */
    public function indexAction()
    {
        $auctionsList = $this->getDoctrine()->getRepository('App:AuctionItem')->findAll();
        return $this->render("auction/index.html.twig",[
            'auctions' => $auctionsList
        ]);
    }

    /**
     * @Route("/auction/{id}", name="auction_details")
     * @param $id
     */
    public function detailsAction($id)
    {
        return $this->render("auction/details.html.twig");
    }

    /**
     * @Route("/auction/add", name="auction_add")
     */
    public function addAuctionAction()
    {
        $auction = new AuctionItem();

        $form = $this->createFormBuilder($auction)
            ->add("title", TextType::class)
            ->add("description", TextareaType::class)
            ->add("price", NumberType::class)
            ->add("Submit", SubmitType::class)
            ->getForm();

        return $this->render("auction/add.html.twig", ["form" => $form->createView()]);
    }
}