<?php

namespace ttckBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * journeeMatch
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class journeeMatch
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateMatch", type="date")
     */
    private $dateMatch;

    /**
     * @var integer
     *
     * @ORM\Column(name="numJournee", type="integer")
     */
    private $numJournee;


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
     * Set dateMatch
     *
     * @param \DateTime $dateMatch
     * @return journeeMatch
     */
    public function setDateMatch($dateMatch)
    {
        $this->dateMatch = $dateMatch;

        return $this;
    }

    /**
     * Get dateMatch
     *
     * @return \DateTime 
     */
    public function getDateMatch()
    {
        return $this->dateMatch;
    }

    /**
     * Set numJournee
     *
     * @param integer $numJournee
     * @return journeeMatch
     */
    public function setNumJournee($numJournee)
    {
        $this->numJournee = $numJournee;

        return $this;
    }

    /**
     * Get numJournee
     *
     * @return integer 
     */
    public function getNumJournee()
    {
        return $this->numJournee;
    }
}
