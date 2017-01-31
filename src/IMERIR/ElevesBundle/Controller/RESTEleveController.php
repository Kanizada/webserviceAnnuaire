<?php

namespace IMERIR\ElevesBundle\Controller;


use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Request\ParamFetcher;
use IMERIR\ElevesBundle\Entity\Eleve;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use IMERIR\ElevesBundle\Form\EleveType;


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

    /**
     * @Rest\View(serializerGroups={"Default", "Hidden"})
     * @Rest\Put("/eleves/edit/{id}")
     *
     * @QueryParam(name="key", requirements="\w+")
     *
     *
     */
    public function putAction($key, Request $request, $id)
    {
        $authServ = $this->get('eleve.authentification');
        $dataGestion = $this->get('eleve.gestion');
        $em = $this->getDoctrine()->getManager();

        $eleve = $em->getRepository('IMERIRElevesBundle:Eleve')->find($id);

        if(null === $eleve)
            return $authServ->formattedResponse(0, "Eleve not found.");

        if($key != $eleve->getApikey())
            return $authServ->formattedResponse(0, "Not allowed to edit an another eleve.");


        if(count($request->query->keys()) > 1)
            $eleve = $dataGestion->bindEleve($eleve, $request);

        if($request->isMethod('PUT')){
            $em->flush();
            return $authServ->formattedResponse(1, "Datas updated.");
        }
        return $authServ->formattedResponse(0, "Error during update.");
    }
}
