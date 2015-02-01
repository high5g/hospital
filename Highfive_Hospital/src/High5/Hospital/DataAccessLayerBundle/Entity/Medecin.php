<?php

namespace High5\Hospital\DataAccessLayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medecin
 *
 * @ORM\Table(name="medecin", uniqueConstraints={@ORM\UniqueConstraint(name="fk_id_personne", columns={"fk_id_personne"})})
 * @ORM\Entity
 */
class Medecin
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
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=100, nullable=false)
     */
    private $specialite;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif_par_consultation", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarifParConsultation;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_personne", referencedColumnName="id")
     * })
     */
    private $fkPersonne;



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
     * Set specialite
     *
     * @param string $specialite
     * @return Medecin
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    
        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set tarifParConsultation
     *
     * @param float $tarifParConsultation
     * @return Medecin
     */
    public function setTarifParConsultation($tarifParConsultation)
    {
        $this->tarifParConsultation = $tarifParConsultation;
    
        return $this;
    }

    /**
     * Get tarifParConsultation
     *
     * @return float 
     */
    public function getTarifParConsultation()
    {
        return $this->tarifParConsultation;
    }

    /**
     * Set fkPersonne
     *
     * @param \High5\Hospital\DataAccessLayerBundle\Entity\Personne $fkPersonne
     * @return Medecin
     */
    public function setFkPersonne(\High5\Hospital\DataAccessLayerBundle\Entity\Personne $fkPersonne = null)
    {
        $this->fkPersonne = $fkPersonne;
    
        return $this;
    }

    /**
     * Get fkPersonne
     *
     * @return \High5\Hospital\DataAccessLayerBundle\Entity\Personne 
     */
    public function getFkPersonne()
    {
        return $this->fkPersonne;
    }
}
