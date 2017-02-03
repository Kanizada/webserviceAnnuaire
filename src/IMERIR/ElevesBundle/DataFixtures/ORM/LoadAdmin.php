<?php

namespace IMERIR\ElevesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use IMERIR\ElevesBundle\Entity\Admin;
use IMERIR\ElevesBundle\Entity\Eleve;

class LoadAdmin extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $admins = array(
            ["Zapata", "Axel", "axel.zapata@imerir.com", "myAdminPassword", "myAdminKey"],
            ["Wagner", "Tristan", "tristan.wagner@imerir.com", "myAdminPassword", "myAdminKey"],
            ["Lauron", "Simon", "simon.lauron@imerir.com", "myAdminPassword", "myAdminKey"],
            ["Jeru", "Vincent", "vincent.jeru@imerir.com", "myAdminPassword", "myAdminKey"]
        );

        foreach($admins as $a)
        {
            $admin = new Admin();
            $admin->setNom($a[0]);
            $admin->setPrenom($a[1]);
            $admin->setEmail($a[2]);
            $admin->setPassword($a[3]);
            $admin->setApikey($a[4]);

            $manager->persist($admin);
        }

        $manager->flush();

    }

    public function getOrder()
    {
        return 3;
    }


}