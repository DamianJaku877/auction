<?php


namespace App\Controller;


use App\Entity\AuctionItem;
use App\Form\AuctionItemType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuctionController extends AbstractController
{
    /**
     * @Route("/auction", name="auction_index")
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */
    public function indexAction(Request $request,  PaginatorInterface $paginator)
    {
        $auctionsList = $this->getDoctrine()->getRepository('App:AuctionItem')->findAll();

        $pagination = $paginator->paginate(
            $auctionsList, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );

        return $this->render("auction/index.html.twig",[
            'auctions' => $auctionsList,
            'pagination' => $pagination
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
            $auction->setUpdateAt(new DateTime());
            $auction->setStatusAuction(AuctionItem::STATUS_ACTIVE);

            $em = $this->getDoctrine()->getManager();
            $em->persist($auction);
            $em->flush();

            return $this->redirectToRoute("auction_index");
        }

        return $this->render("auction/add.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route("/auction/delete/{id}", name="auction_delete")
     */
    public function deleteAction(AuctionItem $auctionItem, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($auctionItem);
        $entityManager->flush();

        return $this->redirectToRoute('auction_index');
    }
}