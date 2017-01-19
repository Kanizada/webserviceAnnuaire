<?php

namespace IMERIR\ElevesBundle\Authentification;

use Doctrine\ORM\EntityManager;

class KeyAuth
{
    private $em = null;
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Check if the key is correct
     *
     * @param string $key
     * @return bool
     */
    public function checkKey($key)
    {
        $eleve = $this->em->getRepository('IMERIRElevesBundle:Eleve')->findBy(array('apikey' => $key));
        if($eleve)
            return true;
        else
            return false;
    }
}