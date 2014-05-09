<?php

namespace Annuaire\FootBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="User_id", columns={"idUser"}), @ORM\Index(name="Ter_id", columns={"Ter_id"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCom", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcom;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=254, nullable=true)
     */
    private $contenu;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;



    /**
     * Get idcom
     *
     * @return integer 
     */
    public function getIdcom()
    {
        return $this->idcom;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set ter
     *
     * @param \Annuaire\FootBundle\Entity\Terrain $ter
     * @return Commentaire
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

    /**
     * Set iduser
     *
     * @param \Annuaire\FootBundle\Entity\User $iduser
     * @return Commentaire
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
}
