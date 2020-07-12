<?php


namespace App\Controller;


use App\Entity\AuctionItem;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\Cloner\Data;

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
     * @Route("/{id}", name="auction_details")
     * @param $id
     * @return Response
     */
    public function detailsAction($id)
    {
        $auctionID = $this->getDoctrine()->getManager()->getRepository(AuctionItem::class)->findBy(["id" => $id]);
        return $this->render("auction/details.html.twig", [
            'auctionOneById' => $auctionID
        ]);
    }

    /**
     * @Route("/auction/add", name="auction_add")
     */
    public function addAuctionAction(Request $request)
    {
        $auction = new AuctionItem();

        $form = $this->createFormBuilder($auction)
            ->add("name", TextType::class)
            ->add("description", TextareaType::class)
            ->add("price", NumberType::class)
            ->add("Submit", SubmitType::class)
            ->getForm();

        if ($request->isMethod("POST"))
        {
            $form->handleRequest($request);
            $auction->setCreateAt(new \DateTime());
            $auction = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($auction);
            $em->flush();

            return $this->redirectToRoute("auction_index");
        }
        return $this->render("auction/add.html.twig", ["form" => $form->createView()]);
    }
}