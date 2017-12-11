<?php


namespace ttckBundle\Repository;

use Doctrine\ORM\EntityRepository;

class JoueursRepository extends EntityRepository{
	public function getAllJoueurs(){
		return $this->getEntityManager()
				->createQuery('SELECT nom,prenom,classement FROM Joueurs ORDER BY nom ASC')
				->getResult();
	}

}