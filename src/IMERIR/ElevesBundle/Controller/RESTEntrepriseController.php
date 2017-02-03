<?php

namespace IMERIR\ElevesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use IMERIR\ElevesBundle\Entity\Eleve;
use IMERIR\ElevesBundle\Entity\Entreprise;
/**
 * @RouteResource("Entreprises")
 *
 */
class RESTEntrepriseController extends Controller
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

        if(!$authServ->checkKey($key) && !$authServ->checkAdminKey($key))
            return $authServ->formattedResponse(0, "Forbidden ! Key not valid.");


        $listEntreprises = $this->getDoctrine()->getRepository('IMERIRElevesBundle:Entreprise')->findAll();

        /* @var $listEntreprises Eleve[] */
            return $authServ->formattedResponse(1, $listEntreprises);
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

        if(!$authServ->checkKey($key) && !$authServ->checkAdminKey($key))
            return $authServ->formattedResponse(0, "Forbidden ! Key not valid.");

        $entreprise = $this->getDoctrine()->getRepository('IMERIRElevesBundle:Entreprise')->find($id);

        return $authServ->formattedResponse(1, $entreprise);
    }


    /**
     * @Rest\View()
     *
     * @Rest\Get("entreprises/departement/{id}")
     * @QueryParam(name="key", requirements="\w+", description="List of students.")
     *
     */
    public function getDepartementAction($id, $key)
    {

        $authServ = $this->get('eleve.authentification');

        if($key == null)
            return $authServ->formattedResponse(0, "Forbidden ! Need a key to use api.");

        if(!$authServ->checkKey($key) && !$authServ->checkAdminKey($key))
            return $authServ->formattedResponse(0, "Forbidden ! Key not valid.");

        $entreprises = $this->getDoctrine()->getRepository('IMERIRElevesBundle:Entreprise')->createQueryBuilder("a")
            ->where('a.codePostal LIKE :numeroDep')
            ->setParameter('numeroDep', $id."%")
            ->getQuery();

        return $authServ->formattedResponse(1, $entreprises->getResult());
    }

}
