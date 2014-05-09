<?php

namespace Annuaire\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo", indexes={@ORM\Index(name="Ter_id", columns={"Ter_id"})})
 * @ORM\Entity
 */
class Photo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPhoto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idphoto;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=254, nullable=true)
     */
    private $libelle;

    /**
     * @var \Terrain
     *
     * @ORM\ManyToOne(targetEntity="Terrain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Ter_id", referencedColumnName="idTerr")
     * })
     */
    private $ter;



    /**
     * Get idphoto
     *
     * @return integer 
     */
    public function getIdphoto()
    {
        return $this->idphoto;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Photo
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
     * Set ter
     *
     * @param \Annuaire\FootBundle\Entity\Terrain $ter
     * @return Photo
     */
    public function setTer(\Annuaire\FootBundle\Entity\Terrain $ter = null)
    {
        $this->ter = $ter;

        return $this;
    }

    /**
     * Get ter
     *
     * @return \Annuaire\FootBundle\Entity\Terrain 
     */
    public function getTer()
    {
        return $this->ter;
    }
}
