<?php

namespace IMERIR\ElevesBundle\ElevesServ;

use Doctrine\ORM\EntityManager;
use IMERIR\ElevesBundle\Entity\Eleve;

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
    public function checkAdminKey($key)
    {
        $admin = $this->em->getRepository('IMERIRElevesBundle:Admin')->findBy(array('apikey' => $key));
        if($admin)
            return true;
        else
            return false;
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

    /**
     * Hash password
     *
     * @param string $password
     * @return string
     */
    public function hashPassword($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * Verify password
     *
     * @param string $email
     * @param string $password
     *
     * @return object
     */
    public function verifyPassword($email, $password)
    {
        $eleve = $this->em->getRepository('IMERIRElevesBundle:Eleve')->findOneBy(array('email' => $email));
        if($eleve == null){
            echo "don't find student";
            return null;
        }

        $hashedPass = $eleve->getPassword();
        if(!password_verify($password, $hashedPass)){
            echo "bad password";
            return null;
        }

        return $eleve;
    }

    /**
     * Formatted response
     *
     * @param int $status
     * @param $data
     *
     * @return array
     */
    public function formattedResponse($status, $data)
    {
        return array("success" => $status, "body" => $data);
    }
}