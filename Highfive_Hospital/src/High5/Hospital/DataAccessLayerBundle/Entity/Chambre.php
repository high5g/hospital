<?php

namespace High5\Hospital\DataAccessLayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre", indexes={@ORM\Index(name="fk_id_hopital", columns={"fk_id_hopital"})})
 * @ORM\Entity
 */
class Chambre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="frais_chambre", type="integer", nullable=false)
     */
    private $fraisChambre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     * @var \Hopital
     *
     * @ORM\ManyToOne(targetEntity="Hopital")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_hopital", referencedColumnName="id")
     * })
     */
    private $fkHopital;



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
     * Set fraisChambre
     *
     * @param integer $fraisChambre
     * @return Chambre
     */
    public function setFraisChambre($fraisChambre)
    {
        $this->fraisChambre = $fraisChambre;
    
        return $this;
    }

    /**
     * Get fraisChambre
     *
     * @return integer 
     */
    public function getFraisChambre()
    {
        return $this->fraisChambre;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Chambre
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set fkHopital
     *
     * @param \High5\Hospital\DataAccessLayerBundle\Entity\Hopital $fkHopital
     * @return Chambre
     */
    public function setFkHopital(\High5\Hospital\DataAccessLayerBundle\Entity\Hopital $fkHopital = null)
    {
        $this->fkHopital = $fkHopital;
    
        return $this;
    }

    /**
     * Get fkHopital
     *
     * @return \High5\Hospital\DataAccessLayerBundle\Entity\Hopital 
     */
    public function getFkHopital()
    {
        return $this->fkHopital;
    }
}
