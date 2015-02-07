<?php

namespace High5\Hospital\DataAccessLayerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Personne
 *
 * @ORM\Table(name="personne", indexes={@ORM\Index(name="fk_id_hopital", columns={"fk_id_hopital"})})
 * @ORM\Entity
 */
class Personne implements UserInterface, \Serializable
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
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=false)
     */
    private $prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=250, nullable=false)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var integer
     *
     * @ORM\Column(name="classe", type="integer", nullable=false)
     */
    private $classe;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=30, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=250, nullable=false)
     */
    private $mdp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '0';

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
     * Set nom
     *
     * @param string $nom
     * @return Personne
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
     * Set prenom
     *
     * @param string $prenom
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set cin
     *
     * @param integer $cin
     * @return Personne
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    
        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Personne
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Personne
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set classe
     *
     * @param integer $classe
     * @return Personne
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return integer 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Personne
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Personne
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    
        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Personne
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set fkHopital
     *
     * @param \High5\Hospital\DataAccessLayerBundle\Entity\Hopital $fkHopital
     * @return Personne
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

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        return $this->mdp;
    }

    public function getRoles() {
        return array('ROLE_USER', 'ROLE_ADMIN');
    }

    public function getSalt() {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->mdp,
            $this->fkHopital,
            // see section on salt below
            // $this->salt,
        ));
    }

    public function unserialize($serialized) {
        list (
            $this->id,
            $this->username,
            $this->mdp,
            $this->fkHopital,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

}
