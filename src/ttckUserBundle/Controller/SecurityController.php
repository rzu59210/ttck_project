<?php

namespace ttckUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use ttckUserBundle\Entity\User;
use ttckUserBundle\Form\UserType;



class SecurityController extends Controller{
	/**
     * @Route("/login" , name="login")
     */
	public function loginAction(Request $request){
		 // Si le visiteur est déjà identifié, on le redirige vers l'accueil
	    if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
	      return $this->redirectToRoute('index');
	    }
	    
	    // Le service authentication_utils permet de récupérer le nom d'utilisateur
	    // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
	    // (mauvais mot de passe par exemple)
	    $authenticationUtils = $this->get('security.authentication_utils');

	    return $this->render('ttckUserBundle:Security:login.html.twig', array(
	      'last_username' => $authenticationUtils->getLastUsername(),
	      'error'         => 'Le nom de compte ou le mot de passe est incorrect. Veuillez réessayer !',
	    ));
	}

	/**
	* @Route("/register" , name="inscription")
	*/
	public function registerAction(Request $request){
		$security = $this->container->get('security.context');
		$token = $security->getToken();
		$user = $this->getUser();
		$arrayErreur = [];
		$erreur = false;

		if(null == $user){
			$user = new User();

	        $form = $this->get('form.factory')->create(new UserType(), $user);
	        $form->handleRequest($request);

	        if($form->isSubmitted() && $form->isValid()){

	        	/* Regardez au niveau des classes Validator de Synfony */

	        	if(strlen($password) < 6){
	        		$erreur = true;
	        		array_push($arrayErreur,'Votre mot de passe est trop court !');
	        	}

	        	if(!$erreur){
	        		$password = $this->get('security.password_encoder')
	        						->encodePassword($user, $user->getPassword());
		        	$user->setPassword($password);

		            $em = $this->getDoctrine()->getManager();
		            $em->persist($user);
		            $em->flush();

		             return $this->redirectToRoute('index');
	        	} else{
	        		return $this->render('ttckUserBundle:Security:register.html.twig' , array(
	        				'form' => $form->createView(),
	        				'errors' => $arrayErreur
	        		));
	        	}
	        	


	           
	        }
	        return $this->render('ttckUserBundle:Security:register.html.twig' , array(
	            'form' => $form->createView()
	        ));
    	}

    	return $this->redirectToRoute('index');
	}
}