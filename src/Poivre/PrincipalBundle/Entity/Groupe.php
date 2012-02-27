<?php

namespace Poivre\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poivre\PrincipalBundle\Entity\Groupe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Poivre\PrincipalBundle\Entity\GroupeRepository")
 */
class Groupe
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
     * @var string $projet
     *
     * @ORM\Column(name="projet", type="string", length=60)
     */
    private $projet;

    /**
     * @var string $chef
     *
     * @ORM\Column(name="chef", type="string", length=60)
     */
    private $chef;

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
     * Set projet
     *
     * @param string $projet
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;
    }

    /**
     * Get projet
     *
     * @return string 
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set chef
     *
     * @param string $chef
     */
    public function setChef($chef)
    {
        $this->chef = $chef;
    }

    /**
     * Get chef
     *
     * @return string 
     */
    public function getChef()
    {
        return $this->chef;
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