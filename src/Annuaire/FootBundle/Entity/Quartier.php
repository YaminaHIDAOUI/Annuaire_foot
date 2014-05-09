<?php

namespace Annuaire\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quartier
 *
 * @ORM\Table(name="quartier", indexes={@ORM\Index(name="Vil_id", columns={"Vil_id"})})
 * @ORM\Entity
 */
class Quartier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idQuar", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquar;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=254, nullable=true)
     */
    private $nom;

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Vil_id", referencedColumnName="idVille")
     * })
     */
    private $vil;



    /**
     * Get idquar
     *
     * @return integer 
     */
    public function getIdquar()
    {
        return $this->idquar;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Quartier
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
     * Set vil
     *
     * @param \Annuaire\FootBundle\Entity\Ville $vil
     * @return Quartier
     */
    public function setVil(\Annuaire\FootBundle\Entity\Ville $vil = null)
    {
        $this->vil = $vil;

        return $this;
    }

    /**
     * Get vil
     *
     * @return \Annuaire\FootBundle\Entity\Ville 
     */
    public function getVil()
    {
        return $this->vil;
    }
}
