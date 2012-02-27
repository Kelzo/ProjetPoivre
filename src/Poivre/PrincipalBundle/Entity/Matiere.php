<?php

namespace Poivre\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poivre\PrincipalBundle\Entity\Matiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Poivre\PrincipalBundle\Entity\MatiereRepository")
 */
class Matiere
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
}