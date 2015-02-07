<?php

namespace High5\Hospital\DataAccessLayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient", uniqueConstraints={@ORM\UniqueConstraint(name="fk_id_personne", columns={"fk_id_personne"})})
 * @ORM\Entity
 */
class Patient
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
     * @ORM\Column(name="id_couverture_sociale", type="integer", nullable=false)
     */
    private $idCouvertureSociale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entree", type="date", nullable=false)
     */
    private $dateEntree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sortie", type="date", nullable=false)
     */
    private $dateSortie;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne", cascade={"persist"})
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
     * Set idCouvertureSociale
     *
     * @param integer $idCouvertureSociale
     * @return Patient
     */
    public function setIdCouvertureSociale($idCouvertureSociale)
    {
        $this->idCouvertureSociale = $idCouvertureSociale;
    
        return $this;
    }

    /**
     * Get idCouvertureSociale
     *
     * @return integer 
     */
    public function getIdCouvertureSociale()
    {
        return $this->idCouvertureSociale;
    }

    /**
     * Set dateEntree
     *
     * @param \DateTime $dateEntree
     * @return Patient
     */
    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;
    
        return $this;
    }

    /**
     * Get dateEntree
     *
     * @return \DateTime 
     */
    public function getDateEntree()
    {
        return $this->dateEntree;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     * @return Patient
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;
    
        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime 
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set fkPersonne
     *
     * @param \High5\Hospital\DataAccessLayerBundle\Entity\Personne $fkPersonne
     * @return Patient
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
