<?php

namespace IMERIR\ElevesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use IMERIR\ElevesBundle\Entity\Eleve;

class LoadEleve extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $eleves = array(
            ["Dupont", "Jean", new \DateTime(), "0000000", "0000000", "www.dupontjean.fr", "1 rue du développeur", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "0000000", "0000000", "www.dupontjean.fr", "1 rue du développeur", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "0000000", "0000000", "www.dupontjean.fr", "1 rue du développeur", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "0000000", "0000000", "www.dupontjean.fr", "1 rue du développeur", "Perpignan"]
        );



        foreach($eleves as $eleve)
        {
            $student = new Eleve();
            $student->setNom($eleve[0]);
            $student->setPrenom($eleve[1]);
            $student->setDateInscription($eleve[2]);
            $student->setTelephoneMobile($eleve[3]);
            $student->setTelephonePerso($eleve[4]);
            $student->setSiteWeb($eleve[5]);
            $student->setAdresse($eleve[6]);
            $student->setVille($eleve[7]);
            $student->setPromotion($this->getReference('goa-promo'));

            $manager->persist($student);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}