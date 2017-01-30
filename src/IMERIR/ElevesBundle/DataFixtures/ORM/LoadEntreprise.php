<?php

namespace IMERIR\ElevesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use IMERIR\ElevesBundle\Entity\Entreprise;

class LoadEntreprise extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $entreprises = array(
            ["Google", "Silicon Valley", "00000000", "contact@google.com", "66000"],
            ["Facebook", "Silicon Valley", "00000001", "contact@facebook.com", "77080"],
            ["Twitter", "Silicon Valley", "00000002", "contact@twitter.com", "66310"],
            ["Apple", "The Earth", "99999999", "givemeyourmoney@apple.com", "66450"]
        );

        foreach($entreprises as $entreprise)
        {
            $enterprise = new Entreprise();
            $enterprise->setNom($entreprise[0]);
            $enterprise->setAdresse($entreprise[1]);
            $enterprise->setTelephone($entreprise[2]);
            $enterprise->setMail($entreprise[3]);
            $enterprise->setCodePostal($entreprise[4]);

            $manager->persist($enterprise);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}