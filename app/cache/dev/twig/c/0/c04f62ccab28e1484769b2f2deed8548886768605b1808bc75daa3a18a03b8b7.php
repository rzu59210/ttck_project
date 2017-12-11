<?php

/* ttck/index.html.twig */
class __TwigTemplate_c04f62ccab28e1484769b2f2deed8548886768605b1808bc75daa3a18a03b8b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ttck/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79072807380706362fcf4d209ffe93957cdd07068ac8dd0fb21c5de40243d052 = $this->env->getExtension("native_profiler");
        $__internal_79072807380706362fcf4d209ffe93957cdd07068ac8dd0fb21c5de40243d052->enter($__internal_79072807380706362fcf4d209ffe93957cdd07068ac8dd0fb21c5de40243d052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ttck/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79072807380706362fcf4d209ffe93957cdd07068ac8dd0fb21c5de40243d052->leave($__internal_79072807380706362fcf4d209ffe93957cdd07068ac8dd0fb21c5de40243d052_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_363d3f899622364d5bb840628b4b545413c13cc669e57fd186aa32a697fdc1ef = $this->env->getExtension("native_profiler");
        $__internal_363d3f899622364d5bb840628b4b545413c13cc669e57fd186aa32a697fdc1ef->enter($__internal_363d3f899622364d5bb840628b4b545413c13cc669e57fd186aa32a697fdc1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div id=\"infoSalle\" style=\"text-align : center; margin-top: 20px;\">
\t\t<div class=\"alert alert-success\" >La salle est ouverte ce soir à partir de 18 heures
\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("generate_grille_pdf");
        echo "\">Générer grille essai</a>
\t\t</div>
\t</div>

\t<div id=\"content\" ng-app=\"indexModule\" ng-controller=\"indexCtrl\" style=\"margin-top: 20px;\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t  <div class=\"carousel-inner\">
\t\t\t\t\t    <div class=\"carousel-item active\">
\t\t\t\t\t      <img class=\"d-block w-100\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/img/grey.png"), "html", null, true);
        echo "\" height=\"300px\" alt=\"First slide\">
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"carousel-item\">
\t\t\t\t\t      <img class=\"d-block w-100\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/img/grey.png"), "html", null, true);
        echo "\" height=\"300px\" alt=\"Second slide\">
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"carousel-item\">
\t\t\t\t\t      <img class=\"d-block w-100\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/img/grey.png"), "html", null, true);
        echo "\" height=\"300px\" alt=\"Third slide\">
\t\t\t\t\t    </div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t    <span class=\"sr-only\">Previous</span>
\t\t\t\t\t  </a>
\t\t\t\t\t  <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t    <span class=\"sr-only\">Next</span>
\t\t\t\t\t  </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t  <table class=\"table table-bordered\">
\t\t\t\t\t  \t<thead>
\t\t\t\t\t  \t\t<tr>
\t\t\t\t\t  \t\t\t<th>Equipe</th>
\t\t\t\t\t  \t\t\t<th>Résultat</th>
\t\t\t\t\t  \t\t\t<th>Score</th>
\t\t\t\t\t  \t\t\t<th>Historique</th>
\t\t\t\t\t  \t\t</tr>
\t\t\t\t\t  \t</thead>
\t\t\t\t\t  \t<tbody>
\t\t\t\t\t  \t\t<tr>
\t\t\t\t\t  \t\t\t<td>R1</td>
\t\t\t\t\t  \t\t\t<td>V</td>
\t\t\t\t\t  \t\t\t<td>13-1</td>
\t\t\t\t\t  \t\t\t<td>V - V - V</td>
\t\t\t\t\t  \t\t</tr>
\t\t\t\t\t  \t</tbody>
\t\t\t\t\t  </table>

\t\t\t\t\t  </li>
\t\t\t\t\t 
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<list-article></list-article>
\t\t\t\t\t<!--<ul class=\"list-group\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t  <img class=\"d-flex mr-3\" src=\"...\" alt=\"Generic placeholder image\">
\t\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t    <h5 class=\"mt-0\">Article 1</h5>
\t\t\t\t\t\t\t   \t\t Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin<br>\t\t\t\t\t\t\t   \t\t
\t\t\t\t\t   \t\t \t\t<a href=\"#\">
\t\t\t\t\t   \t\t \t\t\t<i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t   \t\t \t\t\tCommentaire(s)
\t\t\t\t\t   \t\t \t\t</a>
\t\t\t\t\t   \t\t \t\t<a href=\"#\">
\t\t\t\t\t   \t\t \t\t\t<i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t   \t\t \t\t\tJ'aime
\t\t\t\t\t   \t\t \t\t</a>
\t\t\t\t\t   \t\t \t\t<div class=\"text-right\">
\t\t\t\t\t   \t\t \t\t\t<footer class=\"blockquote-footer\">Wallaert Kévin <cite title=\"Source Title\">Le 19/09/2017</cite></footer>
\t\t\t\t\t   \t\t \t\t</div>
\t\t\t\t\t   \t\t \t\t<div class=\"text-right\">
\t\t\t\t\t   \t\t \t\t\t<span class=\"badge badge-warning\" style=\"color: white !important\">Modifier cet article</span>
\t\t\t\t\t   \t\t \t\t\t<span class=\"badge badge-danger\">Supprimer cet article</span>
\t\t\t\t\t   \t\t \t\t</div>
\t\t\t\t\t\t\t   \t\t 
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li> 
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<div class=\"media\">
\t\t\t\t\t\t\t  <img class=\"d-flex mr-3\" src=\"...\" alt=\"Generic placeholder image\">
\t\t\t\t\t\t\t  <div class=\"media-body\">
\t\t\t\t\t\t\t    <h5 class=\"mt-0\">Article 2</h5>
\t\t\t\t\t\t\t   \t\t Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin<br>\t\t\t\t\t\t\t   \t\t
\t\t\t\t\t   \t\t \t\t<a href=\"#\">
\t\t\t\t\t   \t\t \t\t\t<i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t   \t\t \t\t\tCommentaire(s)
\t\t\t\t\t   \t\t \t\t</a>
\t\t\t\t\t   \t\t \t\t<a href=\"#\">
\t\t\t\t\t   \t\t \t\t\t<i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t   \t\t \t\t\tJ'aime
\t\t\t\t\t   \t\t \t\t</a>
\t\t\t\t\t   \t\t \t\t<div class=\"text-right\">
\t\t\t\t\t   \t\t \t\t\t<footer class=\"blockquote-footer\">Wallaert Kévin <cite title=\"Source Title\">Le 19/09/2017</cite></footer>
\t\t\t\t\t   \t\t \t\t</div>
\t\t\t\t\t   \t\t \t\t<div class=\"text-right\">
\t\t\t\t\t   \t\t \t\t\t<span class=\"badge badge-warning\" style=\"color: white !important\">Modifier cet article</span>
\t\t\t\t\t   \t\t \t\t\t<span class=\"badge badge-danger\">Supprimer cet article</span>
\t\t\t\t\t   \t\t \t\t</div>
\t\t\t\t\t\t\t   \t\t 
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t  <ajouter-article></ajouter-article>

\t\t\t\t\t</ul>-->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\" style=\"text-align: center;\">
\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t  <li class=\"list-group-item active\" style=\"background-color : \t#FFD700 !important; border-color: \t#FFD700 !important\">Top progression</li>
\t\t\t\t\t  <li class=\"list-group-item\">Wallaert Kévin</li>
\t\t\t\t\t  <li class=\"list-group-item\">Lechêne Olivier</li>
\t\t\t\t\t  <li class=\"list-group-item\">Tassou Anthony</li>
\t\t\t\t\t  <li class=\"list-group-item\">Maniez Gregory</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>

\t\t<footer class=\"footer\" id=\"footer\">
\t\t\t<div class=\"container\" style=\"text-align: center;\" >
\t\t\t\tI'm a footer
\t\t\t</div>
\t\t</footer>
\t\t
\t</div>

\t
   
";
        
        $__internal_363d3f899622364d5bb840628b4b545413c13cc669e57fd186aa32a697fdc1ef->leave($__internal_363d3f899622364d5bb840628b4b545413c13cc669e57fd186aa32a697fdc1ef_prof);

    }

    public function getTemplateName()
    {
        return "ttck/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  65 => 21,  59 => 18,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
