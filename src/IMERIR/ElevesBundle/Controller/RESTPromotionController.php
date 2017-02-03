<?php

namespace IMERIR\ElevesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use IMERIR\ElevesBundle\Entity\Eleve;
use IMERIR\ElevesBundle\Entity\Entreprise;
/**
 * @RouteResource("Promotions")
 *
 */
class RESTPromotionController extends Controller
{
    /**
     * @QueryParam(name="key", requirements="\w+")
     *
     */
    public function getListAction($key)
    {
        $authServ = $this->get('eleve.authentification');

        if($key == null)
            return $authServ->formattedResponse(0, "Forbidden ! Need a key to use api.");

        if(!$authServ->checkKey($key) && !$authServ->checkAdminKey($key))
            return $authServ->formattedResponse(0, "Forbidden ! Key not valid.");


        $listPromotions = $this->getDoctrine()
            ->getRepository('IMERIRElevesBundle:Promotion')
            ->findAll();

        /* @var $listEntreprises Eleve[] */
        return $authServ->formattedResponse(1, $listPromotions);
    }

    /**
     *
     * @Rest\View(serializerGroups={"Default"})
     *
     * @QueryParam(name="key", requirements="\w+")
     *
     */
    public function getElevesAction($id, $key)
    {
        $authServ = $this->get('eleve.authentification');

        if($key == null)
            return $authServ->formattedResponse(0, "Forbidden ! Need a key to use api.");

        if(!$authServ->checkKey($key) && !$authServ->checkAdminKey($key))
            return $authServ->formattedResponse(0, "Forbidden ! Key not valid.");

        $promotion = $this->getDoctrine()
            ->getRepository('IMERIRElevesBundle:Promotion')
            ->find($id);

        if($promotion == null)
            return $authServ->formattedResponse(0, "Promotion don't exist.");

        $eleves = $this->getDoctrine()
            ->getRepository('IMERIRElevesBundle:Eleve')
            ->findBy(array('promotion' => $promotion));

        return $authServ->formattedResponse(1, $eleves);



    }
}