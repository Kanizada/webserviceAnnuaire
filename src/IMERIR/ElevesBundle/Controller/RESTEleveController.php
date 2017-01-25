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
class RESTEleveControllerController extends Controller
{
    /**
     * @Rest\View()
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
        return array("succes" => 1, "body" => $listEleves);
    }

    /**
     * @Rest\View()
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

        return array("succes" => 1, "body" => $eleve);
    }

    /**
     * @Rest\View()
     *
     * @QueryParam(name="email")
     *
     * @QueryParam(name="password", requirements="\w+")
     *
     */
    public function getConnectAction($email, $password)
    {
        $authServ = $this->get('eleve.authentification');

        if($email == null || $password == null)
            return $authServ->formattedResponse(0, "Email and password must be enter.");

        $eleve = $authServ->verifyPassword($email, $password);
        if($eleve == null)
            return $authServ->formattedResponse(0, "Email or password not correct.");

        return $eleve;



    }
}
