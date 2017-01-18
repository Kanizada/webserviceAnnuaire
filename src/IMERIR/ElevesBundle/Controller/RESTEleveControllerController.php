<?php

namespace IMERIR\ElevesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\Delete;

class RESTEleveControllerController extends Controller
{
    public function getElevesListAction(Request $request)
    {
        $listEleves = array("toto","tutu");
        return new JsonResponse($listEleves);
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
