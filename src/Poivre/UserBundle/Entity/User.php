<?php
// src/Poivre/UserBundle/Entity/User.php

namespace Poivre\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class User extends BaseUser
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
		 /**
     * @var string $nom
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    protected $nom;
	
		 /**
     * @var string $prenom
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    protected $prenom;
	
	 /**
     * @var string $genre
     * @ORM\Column(name="genre", type="string", length=2, nullable=true)
     */
    protected $genre;
	
	 /**
     * @var integer $age
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    protected $age;
	
	 /**
     * @var string $adresse
     * @ORM\Column(name="adresse", type="string", length=200, nullable=true)
     */
    protected $adresse;
	
	 /**
     * @var integer $cp
     * @ORM\Column(name="cp", type="integer", nullable=true)
     */
    protected $cp;
	
	 /**
     * @var string $ville
     * @ORM\Column(name="ville", type="string", length=60, nullable=true)
     */
    protected $ville;
	
	 /**
     * @var integer $numero_fixe
     * @ORM\Column(name="numero_fixe", type="integer", nullable=true)
     */
    protected $numero_fixe;
	
	 /**
     * @var integer $numero_portable
     * @ORM\Column(name="numero_portable", type="integer", nullable=true)
     */
    protected $numero_portable;

	 /**
     * @var string $statut
     * @ORM\Column(name="statut", type="string", length=50, nullable=true )
     */
    protected $statut;
	

	/**
	* Set nom
	*
	* @param  string nom
	*/
	public function setNom($nom)
	{
	    $this->nom = $nom;
	    return $this;
	}
	 
	/**
	*Get nom 
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
	* @param  string prenom
	*/
	public function setPrenom($prenom)
	{
	    $this->prenom = $prenom;
	    return $this;
	}
	 
	/**
	*Get prenom 
	*
	* @return string
	*/
	public function getPrenom()
	{
	    return $this->prenom;
	}
	
	/**
	* Set genre
	*
	* @param  string genre
	*/
	public function setGenre($genre)
	{
	    $this->genre = $genre;
	    return $this;
	}
	 
	/**
	*Get genre 
	*
	* @return string
	*/
	public function getGenre()
	{
	    return $this->genre;
	}
	
	/**
	* Set age
	*
	* @param  integer age
	*/
	public function setAge($age)
	{
	    $this->age = $age;
	    return $this;
	}
	 
	/**
	*Get age 
	*
	* @return integer
	*/
	public function getAge()
	{
	    return $this->age;
	}
	
	/**
	* Set adresse
	*
	* @param  string adresse
	*/
	public function setAdresse($adresse)
	{
	    $this->adresse = $adresse;
	    return $this;
	}
	 
	/**
	*Get adresse 
	*
	* @return string
	*/
	public function getAdresse()
	{
	    return $this->adresse;
	}
	
	/**
	* Set cp
	*
	* @param  integer cp
	*/
	public function setCp($cp)
	{
	    $this->cp = $cp;
	    return $this;
	}
	 
	/**
	*Get cp 
	*
	* @return integer
	*/
	public function getCp()
	{
	    return $this->cp;
	}
	
	/**
	* Set ville
	*
	* @param  string ville
	*/
	public function setVille($ville)
	{
	    $this->ville = $ville;
	    return $this;
	}
	 
	/**
	*Get ville 
	*
	* @return string
	*/
	public function getVille()
	{
	    return $this->ville;
	}
	
	/**
	* Set numero_fixe
	*
	* @param  integer numero_fixe
	*/
	public function setNumeroFixe($numero_fixe)
	{
	    $this->numero_fixe = $numero_fixe;
	    return $this;
	}
	 
	/**
	*Get numero_fixe 
	*
	* @return integer
	*/
	public function getNumeroFixe()
	{
	    return $this->numero_fixe;
	}
	
	/**
	* Set numero_portable
	*
	* @param  integer numero_portable
	*/
	public function setNumeroPortable($numero_portable)
	{
	    $this->numero_portable = $numero_portable;
	    return $this;
	}
	 
	/**
	*Get numero_portable 
	*
	* @return integer
	*/
	public function getNumeroPortable()
	{
	    return $this->numero_portable;
	}
	
	/**
	* Set statut
	*
	* @param  string statut
	*/
	public function setStatut($statut)
	{
	    $this->statut = $statut;
	    return $this;
	}
	 
	/**
	*Get statut 
	*
	* @return string
	*/
	public function getStatut()
	{
	    return $this->statut;
	}
	
        
    public function __construct()
    {
        parent::__construct();
    }
}