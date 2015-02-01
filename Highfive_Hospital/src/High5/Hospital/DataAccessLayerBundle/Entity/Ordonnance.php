<?php

namespace High5\Hospital\DataAccessLayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordonnance
 *
 * @ORM\Table(name="ordonnance", indexes={@ORM\Index(name="fk_id_consultation", columns={"fk_id_consultation"})})
 * @ORM\Entity
 */
class Ordonnance
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
     * @ORM\Column(name="notes", type="string", length=500, nullable=false)
     */
    private $notes;

    /**
     * @var \Consultation
     *
     * @ORM\ManyToOne(targetEntity="Consultation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_consultation", referencedColumnName="id")
     * })
     */
    private $fkConsultation;



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
     * Set notes
     *
     * @param string $notes
     * @return Ordonnance
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    
        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set fkConsultation
     *
     * @param \High5\Hospital\DataAccessLayerBundle\Entity\Consultation $fkConsultation
     * @return Ordonnance
     */
    public function setFkConsultation(\High5\Hospital\DataAccessLayerBundle\Entity\Consultation $fkConsultation = null)
    {
        $this->fkConsultation = $fkConsultation;
    
        return $this;
    }

    /**
     * Get fkConsultation
     *
     * @return \High5\Hospital\DataAccessLayerBundle\Entity\Consultation 
     */
    public function getFkConsultation()
    {
        return $this->fkConsultation;
    }
}
