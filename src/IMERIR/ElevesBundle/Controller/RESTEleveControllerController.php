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
     * @QueryParam(name="key", requirements="\w+", description="Page of the overview.")
     *
     */
    public function getElevesListAction($key)
    {

        if($key)
            return $key;

        $listEleves = $this->getDoctrine()->getRepository('IMERIRElevesBundle:Eleve')->findAll();

        /* @var $listEleves Eleve[] */
        return array("succes" => 1, "body" => $listEleves);
    }

    public function getElevesAction($id, Request $request)
    {
        $listEleves = array(
            1 => "toto",
            2 => "tutu"
        );

        return new JsonResponse($listEleves[$id]);
    }
}
