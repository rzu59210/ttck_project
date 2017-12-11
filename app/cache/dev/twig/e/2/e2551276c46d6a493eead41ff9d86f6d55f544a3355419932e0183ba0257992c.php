<?php

/* base.html.twig */
class __TwigTemplate_e2551276c46d6a493eead41ff9d86f6d55f544a3355419932e0183ba0257992c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1833267c63162d5e503754b29f603b97f821df27b9cafc47071f1301e1b95be = $this->env->getExtension("native_profiler");
        $__internal_b1833267c63162d5e503754b29f603b97f821df27b9cafc47071f1301e1b95be->enter($__internal_b1833267c63162d5e503754b29f603b97f821df27b9cafc47071f1301e1b95be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "         ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    
        <style type=\"text/css\">
          #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: #f5f5f5;
          }
          .row {
            margin-top : 20px;
          }
          h1 {
            border-bottom: 1px solid #eee;
            padding-bottom: 9px;
          }
          .pointer {
              cursor: pointer;
          }
          
       


        </style>
     
    </head>
    <body ng-app=\"ttckApp\">
          <div ng-app=\"grilleTournoi\" ng-controller=\"mainCtrl\" class=\"modal fade bd-example-modal-lg\" id=\"popup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
              <div class=\"modal-content\">
                 <div class=\"modal-header\">
                  <h5 class=\"modal-title\">Générer une grille de match</h5>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                  </button>
                </div>
                <div class=\"modal-body\">
                  <generate-grille></generate-grille>
                </div>
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-primary\" ng-click=\"genererGrille()\">Générer</button>
                  <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
              </div>
            </div>
          </div>


  <nav ng-app=\"menuModule\" ng-controller=\"menuCtrl\" class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"background-color: #e3f2fd !important;\">
      <a class=\"navbar-brand\" href=\"#\">Navbar</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Accueil <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Le club</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("mon_club");
        echo "\">Mon club</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Rencontres</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("gestion_equipe");
        echo "\">Gestion des équipes</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">Administration</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\" ng-click=\"openPopup()\">Organiser tournoi</a>
          </li>
           ";
        // line 98
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 99
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link inscription\" href=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\">Inscription</a>
          </li>
           ";
        }
        // line 103
        echo "       
        </ul>

        <!-- Example single danger button -->
        <div class=\"btn-group\" style=\"margin-left: 20px\">
          <button type=\"button\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"fa fa-user-o\" aria-hidden=\"true\"></i>
            ";
        // line 110
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 111
            echo "             Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "
             ";
        } else {
            // line 113
            echo "             Bienvenue invité
             ";
        }
        // line 115
        echo "          </button>
          <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"#\">Action</a>
            <a class=\"dropdown-item\" href=\"#\">Another action</a>
            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
            <div class=\"dropdown-divider\"></div>  
            <div id=\"content-footer-dropdow\" style=\"text-align:center\">           
               ";
        // line 122
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 123
            echo "              <a href='";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "'>
                <button class=\"btn btn-danger\"  type=\"button\">
                    <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i>
                    Déconnexion
                </button>               
              </a>
               ";
        } else {
            // line 130
            echo "               <a href='";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "' >
                <button class=\"btn btn-success\"  type=\"button\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                    Connexion
                </button>               
              </a>
              ";
        }
        // line 137
        echo "          </div>
      
          </div>
        </div>      
      </div>

    </nav>



  
        ";
        // line 148
        $this->displayBlock('body', $context, $blocks);
        // line 151
        echo "
    </body>
    <script type=\"text/javascript\">
     
      \$(document).ready(function(){
        var pathUrl = {
            'getAllPlayers' : \"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("get_all_joueurs");
        echo "\"
        };

       
    })
    </script>
     <script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/js/ttckModule.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/js/ttckController.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/js/ttckService.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/js/ttckComponent.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_b1833267c63162d5e503754b29f603b97f821df27b9cafc47071f1301e1b95be->leave($__internal_b1833267c63162d5e503754b29f603b97f821df27b9cafc47071f1301e1b95be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ee450ef3fb003ddcd632fab321e8f323015d34825503d184c72530c165eeb9f = $this->env->getExtension("native_profiler");
        $__internal_7ee450ef3fb003ddcd632fab321e8f323015d34825503d184c72530c165eeb9f->enter($__internal_7ee450ef3fb003ddcd632fab321e8f323015d34825503d184c72530c165eeb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7ee450ef3fb003ddcd632fab321e8f323015d34825503d184c72530c165eeb9f->leave($__internal_7ee450ef3fb003ddcd632fab321e8f323015d34825503d184c72530c165eeb9f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_715603d811119e131834687a23459d22959c0ba42a29888337eeb5dd46c48730 = $this->env->getExtension("native_profiler");
        $__internal_715603d811119e131834687a23459d22959c0ba42a29888337eeb5dd46c48730->enter($__internal_715603d811119e131834687a23459d22959c0ba42a29888337eeb5dd46c48730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_715603d811119e131834687a23459d22959c0ba42a29888337eeb5dd46c48730->leave($__internal_715603d811119e131834687a23459d22959c0ba42a29888337eeb5dd46c48730_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fcb59fa8b8f1c26260e701a9c47e80c359419d5a97a0be9b95b27e98e5377c12 = $this->env->getExtension("native_profiler");
        $__internal_fcb59fa8b8f1c26260e701a9c47e80c359419d5a97a0be9b95b27e98e5377c12->enter($__internal_fcb59fa8b8f1c26260e701a9c47e80c359419d5a97a0be9b95b27e98e5377c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
             <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/angular/angular.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/angular/angular-dragdrop.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/ui-bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_fcb59fa8b8f1c26260e701a9c47e80c359419d5a97a0be9b95b27e98e5377c12->leave($__internal_fcb59fa8b8f1c26260e701a9c47e80c359419d5a97a0be9b95b27e98e5377c12_prof);

    }

    // line 148
    public function block_body($context, array $blocks = array())
    {
        $__internal_47f61533a0ee4909be76663d15bbe7e1e9d7c8d07f01c45f20fe270f4e0d9d10 = $this->env->getExtension("native_profiler");
        $__internal_47f61533a0ee4909be76663d15bbe7e1e9d7c8d07f01c45f20fe270f4e0d9d10->enter($__internal_47f61533a0ee4909be76663d15bbe7e1e9d7c8d07f01c45f20fe270f4e0d9d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 149
        echo "            
        ";
        
        $__internal_47f61533a0ee4909be76663d15bbe7e1e9d7c8d07f01c45f20fe270f4e0d9d10->leave($__internal_47f61533a0ee4909be76663d15bbe7e1e9d7c8d07f01c45f20fe270f4e0d9d10_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 149,  327 => 148,  317 => 17,  313 => 16,  309 => 15,  305 => 14,  301 => 13,  297 => 12,  292 => 11,  286 => 10,  277 => 8,  272 => 7,  266 => 6,  254 => 5,  244 => 166,  240 => 165,  236 => 164,  232 => 163,  223 => 157,  215 => 151,  213 => 148,  200 => 137,  189 => 130,  178 => 123,  176 => 122,  167 => 115,  163 => 113,  157 => 111,  155 => 110,  146 => 103,  140 => 100,  137 => 99,  135 => 98,  127 => 93,  121 => 90,  112 => 84,  103 => 78,  41 => 20,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
