<?php

namespace High5\Hospital\AdminHospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation", indexes={@ORM\Index(name="fk_id_rdv", columns={"fk_id_rdv"})})
 * @ORM\Entity
 */
class Consultation
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
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var \Rendezvous
     *
     * @ORM\ManyToOne(targetEntity="Rendezvous")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_id_rdv", referencedColumnName="id")
     * })
     */
    private $fkRdv;



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
     * Set description
     *
     * @param string $description
     * @return Consultation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set fkRdv
     *
     * @param \High5\Hospital\AdminHospitalBundle\Entity\Rendezvous $fkRdv
     * @return Consultation
     */
    public function setFkRdv(\High5\Hospital\AdminHospitalBundle\Entity\Rendezvous $fkRdv = null)
    {
        $this->fkRdv = $fkRdv;

        return $this;
    }

    /**
     * Get fkRdv
     *
     * @return \High5\Hospital\AdminHospitalBundle\Entity\Rendezvous 
     */
    public function getFkRdv()
    {
        return $this->fkRdv;
    }
}
