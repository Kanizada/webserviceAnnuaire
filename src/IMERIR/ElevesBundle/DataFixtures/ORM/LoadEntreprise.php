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
            ["Google", "Silicon Valley", "00000000", "contact@google.com"],
            ["Facebook", "Silicon Valley", "00000001", "contact@facebook.com"],
            ["Twitter", "Silicon Valley", "00000002", "contact@twitter.com"],
            ["Apple", "The Earth", "99999999", "givemeyourmoney@apple.com"]
        );

        foreach($entreprises as $entreprise)
        {
            $enterprise = new Entreprise();
            $enterprise->setNom($entreprise[0]);
            $enterprise->setAdresse($entreprise[1]);
            $enterprise->setTelephone($entreprise[2]);
            $enterprise->setMail($entreprise[3]);

            $manager->persist($enterprise);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}