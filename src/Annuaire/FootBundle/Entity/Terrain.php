<?php

namespace Annuaire\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terrain
 *
 * @ORM\Table(name="terrain", indexes={@ORM\Index(name="idUser", columns={"idUser"}), @ORM\Index(name="Cat_id", columns={"Cat_id"}), @ORM\Index(name="Qua_id", columns={"Qua_id"})})
 * @ORM\Entity
 */
class Terrain
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTerr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idterr;

    /**
     * @var integer
     *
     * @ORM\Column(name="nom", type="integer", nullable=true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="bigint", nullable=true)
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer", nullable=true)
     */
    private $capacite;

    /**
     * @var \Quartier
     *
     * @ORM\ManyToOne(targetEntity="Quartier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Qua_id", referencedColumnName="idQuar")
     * })
     */
    private $qua;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Cat_id", referencedColumnName="idCat")
     * })
     */
    private $cat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Equipement", mappedBy="idter")
     */
    private $idequi;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idequi = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idterr
     *
     * @return integer 
     */
    public function getIdterr()
    {
        return $this->idterr;
    }

    /**
     * Set nom
     *
     * @param integer $nom
     * @return Terrain
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return integer 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     * @return Terrain
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     * @return Terrain
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set qua
     *
     * @param \Annuaire\FootBundle\Entity\Quartier $qua
     * @return Terrain
     */
    public function setQua(\Annuaire\FootBundle\Entity\Quartier $qua = null)
    {
        $this->qua = $qua;

        return $this;
    }

    /**
     * Get qua
     *
     * @return \Annuaire\FootBundle\Entity\Quartier 
     */
    public function getQua()
    {
        return $this->qua;
    }

    /**
     * Set iduser
     *
     * @param \Annuaire\FootBundle\Entity\User $iduser
     * @return Terrain
     */
    public function setIduser(\Annuaire\FootBundle\Entity\User $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \Annuaire\FootBundle\Entity\User 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set cat
     *
     * @param \Annuaire\FootBundle\Entity\Categorie $cat
     * @return Terrain
     */
    public function setCat(\Annuaire\FootBundle\Entity\Categorie $cat = null)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return \Annuaire\FootBundle\Entity\Categorie 
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Add idequi
     *
     * @param \Annuaire\FootBundle\Entity\Equipement $idequi
     * @return Terrain
     */
    public function addIdequi(\Annuaire\FootBundle\Entity\Equipement $idequi)
    {
        $this->idequi[] = $idequi;

        return $this;
    }

    /**
     * Remove idequi
     *
     * @param \Annuaire\FootBundle\Entity\Equipement $idequi
     */
    public function removeIdequi(\Annuaire\FootBundle\Entity\Equipement $idequi)
    {
        $this->idequi->removeElement($idequi);
    }

    /**
     * Get idequi
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdequi()
    {
        return $this->idequi;
    }
}
