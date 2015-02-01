<?php

namespace High5\Hospital\DataAccessLayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament", indexes={@ORM\Index(name="fk_id_hopital", columns={"fk_id_hopital"})})
 * @ORM\Entity
 */
class Medicament
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
     * @ORM\Column(name="libelle", type="string", length=30, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=30, nullable=false)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

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
     * Set libelle
     *
     * @param string $libelle
     * @return Medicament
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
     * Set categorie
     *
     * @param string $categorie
     * @return Medicament
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Medicament
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set fkHopital
     *
     * @param \High5\Hospital\DataAccessLayerBundle\Entity\Hopital $fkHopital
     * @return Medicament
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
