<?php

namespace Poivre\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poivre\PrincipalBundle\Entity\Absence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Poivre\PrincipalBundle\Entity\AbsenceRepository")
 */
class Absence
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
     * @var text $motif
     *
     * @ORM\Column(name="motif", type="text")
     */
    private $motif;

    /**
     * @var smallint $statut
     *
     * @ORM\Column(name="statut", type="smallint")
     */
    private $statut;


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

    /**
     * Set motif
     *
     * @param text $motif
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;
    }

    /**
     * Get motif
     *
     * @return text 
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set statut
     *
     * @param smallint $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * Get statut
     *
     * @return smallint 
     */
    public function getStatut()
    {
        return $this->statut;
    }
}