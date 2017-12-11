<?php 

namespace ttckBundle\Repository;

use Doctrine\ORM\EntityRepository;

class EquipeRepository extends EntityRepository{
	
	public function getJoueurInEquipe(){
		$qb =  $this->createQueryBuilder('e')
				->leftjoin('e.idJoueur' , 'j')
				->leftjoin('e.numEquipe' , 'l');

		return $qb->getQuery()->getResult();
	}
}


/*
	select * from equipe 
	LEFT JOIN list_equipe ON equipe.numEquipe = list_equipe.numEquipe
	LEFT JOIN user ON equipe.idJoueur = user.id
*/