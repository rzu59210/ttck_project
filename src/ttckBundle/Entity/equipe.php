<?php

namespace ttckBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * equipe
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class equipe
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
     * @var integer
     *
     * @ORM\Column(name="numEquipe", type="integer")
     */
    private $numEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEquipe", type="string", length=255)
     */
    private $nomEquipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="idJoueur", type="integer")
     */
    private $idJoueur;

    /**
     * @var integer
     *
     * @ORM\Column(name="idJournee", type="integer")
     */
    private $idJournee;

    /**
     * @var integer
     *
     * @ORM\Column(name="etatEquipe", type="integer")
     */
    private $etatEquipe;


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
     * Set numEquipe
     *
     * @param integer $numEquipe
     * @return equipe
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

    /**
     * Set nomEquipe
     *
     * @param string $nomEquipe
     * @return equipe
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
     * Set idJoueur
     *
     * @param integer $idJoueur
     * @return equipe
     */
    public function setIdJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;

        return $this;
    }

    /**
     * Get idJoueur
     *
     * @return integer 
     */
    public function getIdJoueur()
    {
        return $this->idJoueur;
    }

    /**
     * Set idJournee
     *
     * @param integer $idJournee
     * @return equipe
     */
    public function setIdJournee($idJournee)
    {
        $this->idJournee = $idJournee;

        return $this;
    }

    /**
     * Get idJournee
     *
     * @return integer 
     */
    public function getIdJournee()
    {
        return $this->idJournee;
    }

    /**
     * Set etatEquipe
     *
     * @param integer $etatEquipe
     * @return equipe
     */
    public function setEtatEquipe($etatEquipe)
    {
        $this->etatEquipe = $etatEquipe;

        return $this;
    }

    /**
     * Get etatEquipe
     *
     * @return integer 
     */
    public function getEtatEquipe()
    {
        return $this->etatEquipe;
    }
}
