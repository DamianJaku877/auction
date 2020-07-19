<?php


namespace App\Controller;


use App\Entity\AuctionItem;
use App\Form\AuctionItemType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function addAuctionAction(Request $request)
    {
        $auction = new AuctionItem();

        $form = $this->createForm(AuctionItemType::class, $auction);

        if ($request->isMethod("POST"))
        {
            $form->handleRequest($request);
            $auction->setCreateAt(new DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($auction);
            $em->flush();

            return $this->redirectToRoute("auction_index");
        }


        return $this->render("auction/add.html.twig", ["form" => $form->createView()]);
    }
}