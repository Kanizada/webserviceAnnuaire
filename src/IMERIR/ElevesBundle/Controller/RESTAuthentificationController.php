<?php

namespace IMERIR\ElevesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use IMERIR\ElevesBundle\Entity\Eleve;

class RESTAuthentificationController extends Controller
{
    /**
     *
     * @View(serializerGroups={"Default","Hidden"})
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

        return $authServ->formattedResponse(1, $eleve);

    }
}