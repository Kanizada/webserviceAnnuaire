<?php

namespace IMERIR\ElevesBundle\ElevesServ;

use Doctrine\ORM\EntityManager;
use IMERIR\ElevesBundle\Entity\Eleve;
use Symfony\Component\HttpFoundation\Request;

class DataGestion
{
    private $em = null;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Function to bind an Eleve.
     *
     * @param $eleve Eleve
     * @param $request Request
     *
     * @return Eleve
     */
    public function bindEleve(Eleve $eleve, Request $request)
    {
        if(!empty($request->get('nom')))
            $eleve->setNom($request->get('nom'));
        if(!empty($request->get('prenom')))
            $eleve->setPrenom($request->get('prenom'));
        if(!empty($request->get('email')))
            $eleve->setEmail($request->get('email'));
        if(!empty($request->get('password')))
            $eleve->setPassword($request->get('password'));
        if(!empty($request->get('dateInscription')))
            $eleve->setDateInscription($request->get('dateInscription'));
        if(!empty($request->get('telephoneMobile')))
            $eleve->setTelephoneMobile($request->get('nom'));
        if(!empty($request->get('telephonePerso')))
            $eleve->setTelephonePerso($request->get('telephonePerso'));
        if(!empty($request->get('siteWeb')))
            $eleve->setSiteWeb($request->get('siteWeb'));
        if(!empty($request->get('adresse')))
            $eleve->setAdresse($request->get('adresse'));
        if(!empty($request->get('ville')))
            $eleve->setVille($request->get('ville'));
        if(!empty($request->get('photo')))
            $eleve->setPhoto($request->get('photo'));
        if(!empty($request->get('apikey')))
            $eleve->setApikey($request->get('apikey'));
        if(!empty($request->get('promotion'))){
            $promotion = $this->em->getRepository('IMERIRElevesBundle:Promotion')->find($request->get('promotion'));
            if(null !== $promotion)
                $eleve->setPromotion($promotion);
        }
        return $eleve;
    }
}