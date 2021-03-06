<?php

namespace UCBL\PidjiBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="Annonce")
 * @ORM\Entity(repositoryClass="UCBL\PidjiBundle\Repository\AnnonceRepository")
 */
class Annonce
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAnnonce", type="datetimetz")
     */
    private $dateAnnonce;

    /**
     * @ORM\ManyToOne(targetEntity="UCBL\PidjiBundle\Entity\Type", inversedBy="listeAnnonces")
     * @ORM\JoinColumn(nullable=false)
     *
     *
     */

    private $types;

    /**
     * @ORM\ManyToOne(targetEntity="UCBL\PidjiBundle\Entity\Categorie", inversedBy="listeAnnonces")
     * @ORM\JoinColumn(nullable=false)
     *
     *
     */

    private $categories;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="UCBL\PidjiBundle\Entity\Images", mappedBy="annonce" )
     * @ORM\JoinColumn(nullable=false)
     */
    private  $images;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="UCBL\PidjiBundle\Entity\User", inversedBy="listeAnnonce")
     */
    private  $user;


    /**
     * Constructor
     */
    public function __construct()
    {

        $this->dateAnnonce = new \Datetime();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateAnnonce
     *
     * @param \DateTime $dateAnnonce
     *
     * @return Annonce
     */
    public function setDateAnnonce($dateAnnonce)
    {
        $this->dateAnnonce = $dateAnnonce;

        return $this;
    }

    /**
     * Get dateAnnonce
     *
     * @return \DateTime
     */
    public function getDateAnnonce()
    {
        return $this->dateAnnonce;
    }

    /**
     * Set types
     *
     * @param \UCBL\PidjiBundle\Entity\Type $types
     *
     * @return Annonce
     */
    public function setTypes(\UCBL\PidjiBundle\Entity\Type $types)
    {
        $this->types = $types;

        return $this;
    }

    /**
     * Get types
     *
     * @return \UCBL\PidjiBundle\Entity\Type
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Set categories
     *
     * @param \UCBL\PidjiBundle\Entity\Categorie $categories
     *
     * @return Annonce
     */
    public function setCategories(\UCBL\PidjiBundle\Entity\Categorie $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \UCBL\PidjiBundle\Entity\Categorie
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add image
     *
     * @param \UCBL\PidjiBundle\Entity\Images $image
     *
     * @return Annonce
     */
    public function addImage(\UCBL\PidjiBundle\Entity\Images $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \UCBL\PidjiBundle\Entity\Images $image
     */
    public function removeImage(\UCBL\PidjiBundle\Entity\Images $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set user.
     *
     * @param \UCBL\PidjiBundle\Entity\User|null $user
     *
     * @return Annonce
     */
    public function setUser(\UCBL\PidjiBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \UCBL\PidjiBundle\Entity\User|null
     */
    public function getUser()
    {
        return $this->user;
    }
}
