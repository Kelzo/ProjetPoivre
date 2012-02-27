<?php

namespace Poivre\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poivre\PrincipalBundle\Entity\Cours
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Poivre\PrincipalBundle\Entity\CoursRepository")
 */
class Cours
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
     * @ORM\Column(name="intitule", type="string", length=80)
     */
    private $intitule;

    /**
     * @var date $date_debut
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $date_debut;

    /**
     * @var date $date_fin
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $date_fin;


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
     * Set date_debut
     *
     * @param date $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->date_debut = $dateDebut;
    }

    /**
     * Get date_debut
     *
     * @return date 
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set date_fin
     *
     * @param date $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->date_fin = $dateFin;
    }

    /**
     * Get date_fin
     *
     * @return date 
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }
}