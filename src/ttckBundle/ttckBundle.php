<?php

namespace ttckBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ttckBundle extends Bundle
{
	 /**
     * @Route("/ttck", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
}
