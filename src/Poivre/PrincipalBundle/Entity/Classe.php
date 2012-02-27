<?php

namespace Poivre\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poivre\PrincipalBundle\Entity\Classe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Poivre\PrincipalBundle\Entity\ClasseRepository")
 */
class Classe
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $intitule
     *
     * @ORM\Column(name="intitule", type="string", length=60)
     */
    private $intitule;

    /**
     * @var integer $annee
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var integer $niveau
     *
     * @ORM\Column(name="niveau", type="integer")
     */
    private $niveau;

    /**
     * @var string $responsable
     *
     * @ORM\Column(name="responsable", type="string", length=60)
     */
    private $responsable;


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
     * Set intitule
     *
     * @param string $intitule
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    /**
     * Get niveau
     *
     * @return integer 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
}