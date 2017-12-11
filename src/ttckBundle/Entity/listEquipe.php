<?php

namespace ttckBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * listEquipe
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class listEquipe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEquipe", type="string", length=255)
     */
    private $nomEquipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="numEquipe", type="integer")
     */
    private $numEquipe;


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
     * Set nomEquipe
     *
     * @param string $nomEquipe
     * @return listEquipe
     */
    public function setNomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }

    /**
     * Get nomEquipe
     *
     * @return string 
     */
    public function getNomEquipe()
    {
        return $this->nomEquipe;
    }

    /**
     * Set numEquipe
     *
     * @param integer $numEquipe
     * @return listEquipe
     */
    public function setNumEquipe($numEquipe)
    {
        $this->numEquipe = $numEquipe;

        return $this;
    }

    /**
     * Get numEquipe
     *
     * @return integer 
     */
    public function getNumEquipe()
    {
        return $this->numEquipe;
    }
}
