<?php

namespace IMERIR\ElevesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use IMERIR\ElevesBundle\Entity\Promotion;

class LoadPromotion extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $promotions = array(
            ["LeMeur", "2014", false],
            ["Dessertine", "2015", false],
            ["Bourgine", "2016", true]
        );

        foreach($promotions as $promotion)
        {
            $promo = new Promotion();
            $promo->setNom($promotion[0]);
            $promo->setAnnee($promotion[1]);
            $promo->setPromoActuelle($promotion[2]);

            $manager->persist($promo);
        }

        $goa = new Promotion();
        $goa->setNom("Goa");
        $goa->setAnnee("2016");
        $goa->setPromoActuelle(true);
        $manager->persist($goa);

        $manager->flush();

        $this->addReference('goa-promo', $goa);
    }

    public function getOrder()
    {
        return 0;
    }
}