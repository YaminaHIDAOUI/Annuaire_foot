<?php

namespace Annuaire\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity
 */
class Equipement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEqui", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idequi;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=254, nullable=true)
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Terrain", inversedBy="idequi")
     * @ORM\JoinTable(name="terrequipement",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idEqui", referencedColumnName="idEqui")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idTer", referencedColumnName="idTerr")
     *   }
     * )
     */
    private $idter;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idter = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idequi
     *
     * @return integer 
     */
    public function getIdequi()
    {
        return $this->idequi;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Equipement
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Add idter
     *
     * @param \Annuaire\FootBundle\Entity\Terrain $idter
     * @return Equipement
     */
    public function addIdter(\Annuaire\FootBundle\Entity\Terrain $idter)
    {
        $this->idter[] = $idter;

        return $this;
    }

    /**
     * Remove idter
     *
     * @param \Annuaire\FootBundle\Entity\Terrain $idter
     */
    public function removeIdter(\Annuaire\FootBundle\Entity\Terrain $idter)
    {
        $this->idter->removeElement($idter);
    }

    /**
     * Get idter
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdter()
    {
        return $this->idter;
    }
}
