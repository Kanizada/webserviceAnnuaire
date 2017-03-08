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
            ["Dupont", "Jean", new \DateTime(), "0600000000", "0468000000", "www.dupontjean.fr", "1 rue du développeur", "66000", "jean.dupont0@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663297", "468000001", "www.dupontjean.fr", "2 rue du développeur", "66001", "jean.dupont1@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663298", "468000002", "www.dupontjean.fr", "3 rue du développeur", "66002", "jean.dupont2@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663299", "468000003", "www.dupontjean.fr", "4 rue du développeur", "66003", "jean.dupont3@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663300", "468000004", "www.dupontjean.fr", "5 rue du développeur", "66004", "jean.dupont4@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663301", "468000005", "www.dupontjean.fr", "6 rue du développeur", "66005", "jean.dupont5@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663302", "468000006", "www.dupontjean.fr", "7 rue du développeur", "66006", "jean.dupont6@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663303", "468000007", "www.dupontjean.fr", "8 rue du développeur", "66007", "jean.dupont7@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663304", "468000008", "www.dupontjean.fr", "9 rue du développeur", "66008", "jean.dupont8@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663305", "468000009", "www.dupontjean.fr", "10 rue du développeur", "66009", "jean.dupont9@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663306", "468000010", "www.dupontjean.fr", "11 rue du développeur", "66010", "jean.dupont10@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663307", "468000011", "www.dupontjean.fr", "12 rue du développeur", "66011", "jean.dupont11@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663308", "468000012", "www.dupontjean.fr", "13 rue du développeur", "66012", "jean.dupont12@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663309", "468000013", "www.dupontjean.fr", "14 rue du développeur", "66013", "jean.dupont13@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663310", "468000014", "www.dupontjean.fr", "15 rue du développeur", "66014", "jean.dupont14@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663311", "468000015", "www.dupontjean.fr", "16 rue du développeur", "66015", "jean.dupont15@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663312", "468000016", "www.dupontjean.fr", "17 rue du développeur", "66016", "jean.dupont16@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663313", "468000017", "www.dupontjean.fr", "18 rue du développeur", "66017", "jean.dupont17@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663314", "468000018", "www.dupontjean.fr", "19 rue du développeur", "66018", "jean.dupont18@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663315", "468000019", "www.dupontjean.fr", "20 rue du développeur", "66019", "jean.dupont19@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663316", "468000020", "www.dupontjean.fr", "21 rue du développeur", "66020", "jean.dupont20@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663317", "468000021", "www.dupontjean.fr", "22 rue du développeur", "66021", "jean.dupont21@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663318", "468000022", "www.dupontjean.fr", "23 rue du développeur", "66022", "jean.dupont22@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663319", "468000023", "www.dupontjean.fr", "24 rue du développeur", "66023", "jean.dupont23@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663320", "468000024", "www.dupontjean.fr", "25 rue du développeur", "66024", "jean.dupont24@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663321", "468000025", "www.dupontjean.fr", "26 rue du développeur", "66025", "jean.dupont25@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663322", "468000026", "www.dupontjean.fr", "27 rue du développeur", "66026", "jean.dupont26@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663323", "468000027", "www.dupontjean.fr", "28 rue du développeur", "66027", "jean.dupont27@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663324", "468000028", "www.dupontjean.fr", "29 rue du développeur", "66028", "jean.dupont28@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663325", "468000029", "www.dupontjean.fr", "30 rue du développeur", "66029", "jean.dupont29@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663326", "468000030", "www.dupontjean.fr", "31 rue du développeur", "66030", "jean.dupont30@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663327", "468000031", "www.dupontjean.fr", "32 rue du développeur", "66031", "jean.dupont31@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663328", "468000032", "www.dupontjean.fr", "33 rue du développeur", "66032", "jean.dupont32@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663329", "468000033", "www.dupontjean.fr", "34 rue du développeur", "66033", "jean.dupont33@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663330", "468000034", "www.dupontjean.fr", "35 rue du développeur", "66034", "jean.dupont34@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663331", "468000035", "www.dupontjean.fr", "36 rue du développeur", "66035", "jean.dupont35@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663332", "468000036", "www.dupontjean.fr", "37 rue du développeur", "66036", "jean.dupont36@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663333", "468000037", "www.dupontjean.fr", "38 rue du développeur", "66037", "jean.dupont37@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663334", "468000038", "www.dupontjean.fr", "39 rue du développeur", "66038", "jean.dupont38@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663335", "468000039", "www.dupontjean.fr", "40 rue du développeur", "66039", "jean.dupont39@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663336", "468000040", "www.dupontjean.fr", "41 rue du développeur", "66040", "jean.dupont40@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663337", "468000041", "www.dupontjean.fr", "42 rue du développeur", "66041", "jean.dupont41@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663338", "468000042", "www.dupontjean.fr", "43 rue du développeur", "66042", "jean.dupont42@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663339", "468000043", "www.dupontjean.fr", "44 rue du développeur", "66043", "jean.dupont43@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663340", "468000044", "www.dupontjean.fr", "45 rue du développeur", "66044", "jean.dupont44@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663341", "468000045", "www.dupontjean.fr", "46 rue du développeur", "66045", "jean.dupont45@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663342", "468000046", "www.dupontjean.fr", "47 rue du développeur", "66046", "jean.dupont46@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663343", "468000047", "www.dupontjean.fr", "48 rue du développeur", "66047", "jean.dupont47@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663344", "468000048", "www.dupontjean.fr", "49 rue du développeur", "66048", "jean.dupont48@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663345", "468000049", "www.dupontjean.fr", "50 rue du développeur", "66049", "jean.dupont49@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663346", "468000050", "www.dupontjean.fr", "51 rue du développeur", "66050", "jean.dupont50@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663347", "468000051", "www.dupontjean.fr", "52 rue du développeur", "66051", "jean.dupont51@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663348", "468000052", "www.dupontjean.fr", "53 rue du développeur", "66052", "jean.dupont52@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663349", "468000053", "www.dupontjean.fr", "54 rue du développeur", "66053", "jean.dupont53@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663350", "468000054", "www.dupontjean.fr", "55 rue du développeur", "66054", "jean.dupont54@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663351", "468000055", "www.dupontjean.fr", "56 rue du développeur", "66055", "jean.dupont55@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663352", "468000056", "www.dupontjean.fr", "57 rue du développeur", "66056", "jean.dupont56@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663353", "468000057", "www.dupontjean.fr", "58 rue du développeur", "66057", "jean.dupont57@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663354", "468000058", "www.dupontjean.fr", "59 rue du développeur", "66058", "jean.dupont58@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663355", "468000059", "www.dupontjean.fr", "60 rue du développeur", "66059", "jean.dupont59@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663356", "468000060", "www.dupontjean.fr", "61 rue du développeur", "66060", "jean.dupont60@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663357", "468000061", "www.dupontjean.fr", "62 rue du développeur", "66061", "jean.dupont61@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663358", "468000062", "www.dupontjean.fr", "63 rue du développeur", "66062", "jean.dupont62@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663359", "468000063", "www.dupontjean.fr", "64 rue du développeur", "66063", "jean.dupont63@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663360", "468000064", "www.dupontjean.fr", "65 rue du développeur", "66064", "jean.dupont64@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663361", "468000065", "www.dupontjean.fr", "66 rue du développeur", "66065", "jean.dupont65@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663362", "468000066", "www.dupontjean.fr", "67 rue du développeur", "66066", "jean.dupont66@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663363", "468000067", "www.dupontjean.fr", "68 rue du développeur", "66067", "jean.dupont67@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663364", "468000068", "www.dupontjean.fr", "69 rue du développeur", "66068", "jean.dupont68@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663365", "468000069", "www.dupontjean.fr", "70 rue du développeur", "66069", "jean.dupont69@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663366", "468000070", "www.dupontjean.fr", "71 rue du développeur", "66070", "jean.dupont70@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663367", "468000071", "www.dupontjean.fr", "72 rue du développeur", "66071", "jean.dupont71@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663368", "468000072", "www.dupontjean.fr", "73 rue du développeur", "66072", "jean.dupont72@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663369", "468000073", "www.dupontjean.fr", "74 rue du développeur", "66073", "jean.dupont73@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663370", "468000074", "www.dupontjean.fr", "75 rue du développeur", "66074", "jean.dupont74@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663371", "468000075", "www.dupontjean.fr", "76 rue du développeur", "66075", "jean.dupont75@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663372", "468000076", "www.dupontjean.fr", "77 rue du développeur", "66076", "jean.dupont76@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663373", "468000077", "www.dupontjean.fr", "78 rue du développeur", "66077", "jean.dupont77@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663374", "468000078", "www.dupontjean.fr", "79 rue du développeur", "66078", "jean.dupont78@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663375", "468000079", "www.dupontjean.fr", "80 rue du développeur", "66079", "jean.dupont79@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663376", "468000080", "www.dupontjean.fr", "81 rue du développeur", "66080", "jean.dupont80@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663377", "468000081", "www.dupontjean.fr", "82 rue du développeur", "66081", "jean.dupont81@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663378", "468000082", "www.dupontjean.fr", "83 rue du développeur", "66082", "jean.dupont82@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663379", "468000083", "www.dupontjean.fr", "84 rue du développeur", "66083", "jean.dupont83@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663380", "468000084", "www.dupontjean.fr", "85 rue du développeur", "66084", "jean.dupont84@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663381", "468000085", "www.dupontjean.fr", "86 rue du développeur", "66085", "jean.dupont85@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663382", "468000086", "www.dupontjean.fr", "87 rue du développeur", "66086", "jean.dupont86@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663383", "468000087", "www.dupontjean.fr", "88 rue du développeur", "66087", "jean.dupont87@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663384", "468000088", "www.dupontjean.fr", "89 rue du développeur", "66088", "jean.dupont88@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663385", "468000089", "www.dupontjean.fr", "90 rue du développeur", "66089", "jean.dupont89@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663386", "468000090", "www.dupontjean.fr", "91 rue du développeur", "66090", "jean.dupont90@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663387", "468000091", "www.dupontjean.fr", "92 rue du développeur", "66091", "jean.dupont91@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663388", "468000092", "www.dupontjean.fr", "93 rue du développeur", "66092", "jean.dupont92@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663389", "468000093", "www.dupontjean.fr", "94 rue du développeur", "66093", "jean.dupont93@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663390", "468000094", "www.dupontjean.fr", "95 rue du développeur", "66094", "jean.dupont94@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663391", "468000095", "www.dupontjean.fr", "96 rue du développeur", "66095", "jean.dupont95@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663392", "468000096", "www.dupontjean.fr", "97 rue du développeur", "66096", "jean.dupont96@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663393", "468000097", "www.dupontjean.fr", "98 rue du développeur", "66097", "jean.dupont97@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663394", "468000098", "www.dupontjean.fr", "99 rue du développeur", "66098", "jean.dupont98@imerir.com", "Imerir", "Perpignan"],
            ["Dupont", "Jean", new \DateTime(), "100663395", "468000099", "www.dupontjean.fr", "100 rue du développeur", "66099", "jean.dupont99@imerir.com", "Imerir", "Perpignan"],
        );


        $student = new Eleve();
        $student->setNom("Dev FirstName");
        $student->setPrenom("Dev LastName");
        $student->setDateInscription(new \DateTime());
        $student->setTelephoneMobile("0123456789");
        $student->setTelephoneFixe("0123456789");
        $student->setSiteWeb("www.imerir.com");
        $student->setAdresse("Avenue Paul Pascot, BP 90443");
        $student->setCodePostal("66000");
        $student->setVille("Perpignan");
        $student->setEmail("dev.annuaire@imerir.com");
        $student->setPassword("devPassword");
        $student->setApikey("devTmpKey");
        $student->setPromotion($this->getReference('goa-promo'));
        $student->addEntreprise($this->getReference('Google'));
        $student->addEntreprise($this->getReference('Facebook'));
        $student->addEntreprise($this->getReference('Apple'));

        $manager->persist($student);


        foreach($eleves as $eleve)
        {
            $student = new Eleve();
            $student->setNom($eleve[0]);
            $student->setPrenom($eleve[1]);
            $student->setDateInscription($eleve[2]);
            $student->setTelephoneMobile($eleve[3]);
            $student->setTelephoneFixe($eleve[4]);
            $student->setSiteWeb($eleve[5]);
            $student->setAdresse($eleve[6]);
            $student->setCodePostal($eleve[7]);
            $student->setEmail($eleve[8]);
            $student->setPassword($eleve[9]);
            $student->setVille($eleve[10]);
            $student->setPromotion($this->getReference('goa-promo'));
            $student->addEntreprise($this->getReference('Facebook'));
            $student->addEntreprise($this->getReference('Apple'));

            $manager->persist($student);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}