<?php

namespace IMERIR\ElevesBundle\Controller;

use IMERIR\ElevesBundle\Entity\Eleve;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\FileParam;
use Acme\FooBundle\Validation\Constraints\MyComplexConstraint;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\Delete;

class RESTEleveControllerController extends Controller
{
    /**
     * @Rest\View()
     *
     * @QueryParam(name="key", requirements="\w+", description="List of students.")
     *
     */
    public function getElevesListAction($key)
    {
        $testAuth = $this->get('eleve.authentification');

        if($key == null)
            return array("success" => 0, "body" => "Forbidden ! Need a key to use api.");

        if(!$testAuth->checkKey($key))
            return array("success" => 0, "body" => "Forbidden ! Key not valid.");

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
    public function getElevesAction($id, $key)
    {

        $testAuth = $this->get('eleve.authentification');

        if($key == null)
            return array("success" => 0, "body" => "Forbidden ! Need a key to use api.");

        if(!$testAuth->checkKey($key))
            return array("success" => 0, "body" => "Forbidden ! Key not valid.");

        $eleve = $this->getDoctrine()->getRepository('IMERIRElevesBundle:Eleve')->find($id);

        return array("succes" => 1, "body" => $eleve);
    }
}
