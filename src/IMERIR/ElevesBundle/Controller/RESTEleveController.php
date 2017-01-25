<?php

namespace IMERIR\ElevesBundle\Controller;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use IMERIR\ElevesBundle\Entity\Eleve;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * @RouteResource("Eleves")
 *
 */
class RESTEleveController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"Default"})
     *
     * @QueryParam(name="key", requirements="\w+", description="List of students.")
     *
     */
    public function getListAction($key)
    {
        $authServ = $this->get('eleve.authentification');

        if($key == null)
            return $authServ->formattedResponse(0, "Forbidden ! Need a key to use api.");

        if(!$authServ->checkKey($key))
            return $authServ->formattedResponse(0, "Forbidden ! Key not valid.");


        $listEleves = $this->getDoctrine()->getRepository('IMERIRElevesBundle:Eleve')->findAll();

        /* @var $listEleves Eleve[] */
        return $authServ->formattedResponse(1, $listEleves);
    }

    /**
     * @Rest\View(serializerGroups={"Default"})
     *
     * @QueryParam(name="key", requirements="\w+", description="List of students.")
     *
     */
    public function getAction($id, $key)
    {

        $authServ = $this->get('eleve.authentification');

        if($key == null)
            return $authServ->formattedResponse(0, "Forbidden ! Need a key to use api.");

        if(!$authServ->checkKey($key))
            return $authServ->formattedResponse(0, "Forbidden ! Key not valid.");

        $eleve = $this->getDoctrine()->getRepository('IMERIRElevesBundle:Eleve')->find($id);

        return $authServ->formattedResponse(1, $eleve);
    }
}
