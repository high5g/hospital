<?php

namespace High5\Hospital\DataAccessLayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="fk_id_consultation", columns={"fk_id_consultation"})})
 * @ORM\Entity
 */
class Facture
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
     * Set fkConsultation
     *
     * @param \High5\Hospital\DataAccessLayerBundle\Entity\Consultation $fkConsultation
     * @return Facture
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
