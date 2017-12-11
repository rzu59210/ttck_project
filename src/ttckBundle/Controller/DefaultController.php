<?php

namespace ttckBundle\Controller;

use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use ttckBundle\Entity\User;
use ttckBundle\Form\UserType;
use ttckBundle\Entity\Joueurs;
use ttckBundle\Entity\listEquipe;
use ttckBundle\Entity\equipe;

class DefaultController extends Controller
{
    /**
     * @Route("/ttck", name="index")
     */
    public function indexAction()
    {
       return $this->render('ttck/index.html.twig');
    }

    /**
     * @Route("/gestion_equipe" , name="gestion_equipe")
     */
    public function gestionEquipeAction(){
         /* 
            1. Récupérer les enregistrements (jointure)
            2. Si on a des resultats
                2-1. Les envoyer dans la vues
            3. Sinon envoyer tableau vide
        */        
    	return $this->render('ttck/gestionEquipe.html.twig');
    }

    /**
     * @Route("/mon_club" , name="mon_club")
     */
    public function monClub(){
        return $this->render('ttck/monClub.html.twig');
    }

    /**
     * @Route("/admin" , name="admin")
     */
    public function administration(){
        return $this->render('ttck/adminPage.html.twig');
    }

    /**
     * @Route("/gestion_tournoi" , name="gestion_tournoi")
     */
    public function gestionTournoi(){       
        return $this->render('ttck/gestionTournoi.html.twig');
    }

    /**
     * @Route("/getAllPlayers" , name="get_all_joueurs")
    */
    public function getAllJoueurs(){
        $repository = $this->getDoctrine()->getRepository(Joueurs::class);
        $joueurs = $repository->findAll();
        $arrayJoueurs = [];
        $i = 0;
        foreach ($joueurs as $value) {
            $arrayJoueurs[$i] = [                
                    'nom' => $value->getNom(),
                    'prenom' => $value->getPrenom(),
                    'classement' => $value->getClassement()
                 ];
            $i++;
        }


        return new JsonResponse(array('joueurs' => $arrayJoueurs));
    }

    /**
     *  @Route("/getAllEquipes" , name="get_all_equipes")
     */
    public function getAllEquipes(){
        $repository = $this->getDoctrine()->getRepository(listEquipe::class);
        $equipes = $repository->findAll();
        $equipeArray = [];
        $i = 0;
        foreach ($equipes as  $value) {
            $equipeArray[$i] = [
                'nom' => $value->getNomEquipe(),
                'numero' => $value->getNumEquipe()
            ];
            $i++;
        }

        return new JsonResponse(array('equipes' => $equipeArray));
    }

    /**
     * @Route("generateGrillePdf" , name="generate_grille_pdf")
     */
    public function generateGrillePdf(Request $req){
        if($req->isMethod("GET")){
            $arrayJoueurs = json_decode($req->get('joueurs'),true);

            $html = $this->renderView('pdf/generate_grille.html.twig', array(
                'joueurs' => $arrayJoueurs
            ));

            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="file.pdf"'
                )
            );
        }
    }

    /**
     * @Route("/saveEquipe" , name="save_equipe")
     */
    public function saveEquipe(Request $req){
        $success = false;
        $index = 0;
        $repository = $this->getDoctrine()->getRepository(Joueurs::class);
        $repositoryEquipe = $this->getDoctrine()->getRepository(listEquipe::class);
        if($req->isMethod('POST')){
           $data = json_decode($req->get('equipes') , true);
           
            foreach ($data as $value) {
                 // Récupérer l'id de l'utilisateur 
                $joueur = $repository->findByNom($value[0]['nom']);
                $id = $joueur[0]->getID();

                // Récupérer le nom de l'équipe
                $equipe = $repositoryEquipe->findByNumEquipe($index+1);
                $nomEquipe = $equipe[0]->getNomEquipe();

                //Enregistrement des équipes
                $equipe = new equipe();
                $equipe->setNumEquipe($index+1);
                $equipe->setNomEquipe($nomEquipe);
                $equipe->setIdJoueur($id);
                $equipe->setIdJournee(0); // A modifier par la suite
                $equipe->setEtatEquipe(1);

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($equipe);
                $em->flush();

                $success = true; // A modifier pour avec le vrai résultat de la query


                $index++;
            }
        }

        return new JsonResponse(array('success' => $success));

    }

  

}
