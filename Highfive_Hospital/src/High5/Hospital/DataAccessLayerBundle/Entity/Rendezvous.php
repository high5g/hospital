<?php

namespace High5\Hospital\DataAccessLayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rendezvous
 *
 * @ORM\Table(name="rendezvous", indexes={@ORM\Index(name="fk_id_patient", columns={"fk_id_patient"}), @ORM\Index(name="fk_id_medecin", columns={"fk_id_medecin"})})
 * @ORM\Entity
 */
class Rendezvous
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_visite", type="date", nullable=false)
     */
    private $dateVisite;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_patient", referencedColumnName="id")
     * })
     */
    private $fkPatient;

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_medecin", referencedColumnName="id")
     * })
     */
    private $fkMedecin;



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
     * Set dateVisite
     *
     * @param \DateTime $dateVisite
     * @return Rendezvous
     */
    public function setDateVisite($dateVisite)
    {
        $this->dateVisite = $dateVisite;
    
        return $this;
    }

    /**
     * Get dateVisite
     *
     * @return \DateTime 
     */
    public function getDateVisite()
    {
        return $this->dateVisite;
    }

    /**
     * Set fkPatient
     *
     * @param \High5\Hospital\DataAccessLayerBundle\Entity\Patient $fkPatient
     * @return Rendezvous
     */
    public function setFkPatient(\High5\Hospital\DataAccessLayerBundle\Entity\Patient $fkPatient = null)
    {
        $this->fkPatient = $fkPatient;
    
        return $this;
    }

    /**
     * Get fkPatient
     *
     * @return \High5\Hospital\DataAccessLayerBundle\Entity\Patient 
     */
    public function getFkPatient()
    {
        return $this->fkPatient;
    }

    /**
     * Set fkMedecin
     *
     * @param \High5\Hospital\DataAccessLayerBundle\Entity\Medecin $fkMedecin
     * @return Rendezvous
     */
    public function setFkMedecin(\High5\Hospital\DataAccessLayerBundle\Entity\Medecin $fkMedecin = null)
    {
        $this->fkMedecin = $fkMedecin;
    
        return $this;
    }

    /**
     * Get fkMedecin
     *
     * @return \High5\Hospital\DataAccessLayerBundle\Entity\Medecin 
     */
    public function getFkMedecin()
    {
        return $this->fkMedecin;
    }
}
