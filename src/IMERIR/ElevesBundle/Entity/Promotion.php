<?php

namespace IMERIR\ElevesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass="IMERIR\ElevesBundle\Repository\PromotionRepository")
 */
class Promotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;

    /**
     * @var bool
     *
     * @ORM\Column(name="promo_actuelle", type="boolean")
     */
    private $promoActuelle;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Promotion
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return Promotion
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set promoActuelle
     *
     * @param boolean $promoActuelle
     *
     * @return Promotion
     */
    public function setPromoActuelle($promoActuelle)
    {
        $this->promoActuelle = $promoActuelle;

        return $this;
    }

    /**
     * Get promoActuelle
     *
     * @return bool
     */
    public function getPromoActuelle()
    {
        return $this->promoActuelle;
    }
}
