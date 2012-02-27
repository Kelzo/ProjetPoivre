<?php

namespace Poivre\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poivre\PrincipalBundle\Entity\Coefficient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Poivre\PrincipalBundle\Entity\CoefficientRepository")
 */
class Coefficient
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
     * @var float $coefficient
     *
     * @ORM\Column(name="coefficient", type="float")
     */
    private $coefficient;


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
     * Set coefficient
     *
     * @param float $coefficient
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;
    }

    /**
     * Get coefficient
     *
     * @return float 
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }
}