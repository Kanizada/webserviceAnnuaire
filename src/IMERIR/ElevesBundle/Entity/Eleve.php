<?php

namespace IMERIR\ElevesBundle\Entity;

use Doctrine\Common\Annotations\Annotation\Required;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;

/**
 * @ExclusionPolicy("ALL")
 * @ORM\Table(name="eleve")
 * @ORM\Entity(repositoryClass="IMERIR\ElevesBundle\Repository\EleveRepository")
 */
class Eleve
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @Expose()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Expose()
     *
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     * @Expose()
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     * @Expose()
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var \DateTime
     * @Expose()
     *
     * @ORM\Column(name="date_inscription", type="datetime")
     */
    private $dateInscription;

    /**
     * @var string
     * @Expose()
     *
     * @ORM\Column(name="telephone_mobile", type="string", length=255)
     */
    private $telephoneMobile;

    /**
     * @var string
     * @Expose()
     *
     * @ORM\Column(name="telephone_fixe", type="string", length=255)
     */
    private $telephoneFixe;

    /**
     * @var string
     * @Expose()
     *
     * @ORM\Column(name="site_web", type="string", length=255)
     */
    private $siteWeb;

    /**
     * @var string
     * @Expose()
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     * @Expose()
     *
     * @ORM\Column(name="codePostal", type="string", length=255)
     */
    private $codePostal;


    /**
     * @var string
     * @Expose()
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     * @Expose()
     * @Groups("Hidden")
     *
     * @ORM\Column(name="apikey", type="string", length=255)
     */
    private $apikey;

    /**
     * @Expose()
     * @ORM\ManyToOne(targetEntity="IMERIR\ElevesBundle\Entity\Promotion")
     * @ORM\JoinColumn(nullable=true)
     */
    private $promotion;

    /**
     * @Expose()
     * @ORM\ManyToMany(targetEntity="IMERIR\ElevesBundle\Entity\Entreprise", cascade={"persist"})
     */
    private $entreprises;


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
     * @return Eleve
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Eleve
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return Eleve
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set telephoneMobile
     *
     * @param string $telephoneMobile
     *
     * @return Eleve
     */
    public function setTelephoneMobile($telephoneMobile)
    {
        $this->telephoneMobile = $telephoneMobile;

        return $this;
    }

    /**
     * Get telephoneMobile
     *
     * @return string
     */
    public function getTelephoneMobile()
    {
        return $this->telephoneMobile;
    }

    /**
     * Set siteWeb
     *
     * @param string $siteWeb
     *
     * @return Eleve
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Eleve
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $codePostal
     *
     * @return Eleve
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set promotion
     *
     * @param \IMERIR\ElevesBundle\Entity\Promotion $promotion
     *
     * @return Eleve
     */
    public function setPromotion(\IMERIR\ElevesBundle\Entity\Promotion $promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

    /**
     * Get promotion
     *
     * @return \IMERIR\ElevesBundle\Entity\Promotion
     */
    public function getPromotion()
    {
        return $this->promotion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entreprises = new \Doctrine\Common\Collections\ArrayCollection();
        $this->apikey = $this->generateKey(150);
    }

    /**
     * Add entreprise
     *
     * @param \IMERIR\ElevesBundle\Entity\Entreprise $entreprise
     *
     * @return Eleve
     */
    public function addEntreprise(\IMERIR\ElevesBundle\Entity\Entreprise $entreprise)
    {
        $this->entreprises[] = $entreprise;

        return $this;
    }

    /**
     * Remove entreprise
     *
     * @param \IMERIR\ElevesBundle\Entity\Entreprise $entreprise
     */
    public function removeEntreprise(\IMERIR\ElevesBundle\Entity\Entreprise $entreprise)
    {
        $this->entreprises->removeElement($entreprise);
    }

    /**
     * Get entreprises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntreprises()
    {
        return $this->entreprises;
    }

    function generateKey($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Set apikey
     *
     * @param string $apikey
     *
     * @return Eleve
     */
    public function setApikey($apikey)
    {
        $this->apikey = $apikey;

        return $this;
    }

    /**
     * Get apikey
     *
     * @return string
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Eleve
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Eleve
     */
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set telephoneFixe
     *
     * @param string $telephoneFixe
     *
     * @return Eleve
     */
    public function setTelephoneFixe($telephoneFixe)
    {
        $this->telephoneFixe = $telephoneFixe;

        return $this;
    }

    /**
     * Get telephoneFixe
     *
     * @return string
     */
    public function getTelephoneFixe()
    {
        return $this->telephoneFixe;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Eleve
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }
}
