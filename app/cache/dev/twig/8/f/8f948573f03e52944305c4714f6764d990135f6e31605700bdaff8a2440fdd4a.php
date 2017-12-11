<?php

/* ttck/adminPage.html.twig */
class __TwigTemplate_8f948573f03e52944305c4714f6764d990135f6e31605700bdaff8a2440fdd4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ttck/adminPage.html.twig", 1);
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
        $__internal_228f08827e5aa0dff6c20dc31b7733806f472fedb64d5437c2331425c2484d34 = $this->env->getExtension("native_profiler");
        $__internal_228f08827e5aa0dff6c20dc31b7733806f472fedb64d5437c2331425c2484d34->enter($__internal_228f08827e5aa0dff6c20dc31b7733806f472fedb64d5437c2331425c2484d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ttck/adminPage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_228f08827e5aa0dff6c20dc31b7733806f472fedb64d5437c2331425c2484d34->leave($__internal_228f08827e5aa0dff6c20dc31b7733806f472fedb64d5437c2331425c2484d34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc6c1ebe0318a92a406c58aec68c195f0add0f69f2a3b437cbce6655d70d035b = $this->env->getExtension("native_profiler");
        $__internal_dc6c1ebe0318a92a406c58aec68c195f0add0f69f2a3b437cbce6655d70d035b->enter($__internal_dc6c1ebe0318a92a406c58aec68c195f0add0f69f2a3b437cbce6655d70d035b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"col-lg-12\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<ul class=\"list-group\">
 \t\t\t\t\t  <li class=\"list-group-item\">
 \t\t\t\t\t  \tListe des joueurs 
 \t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t  \t<table class=\"table table-hover\">
\t\t\t\t\t  \t\t<thead>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<th>Num. licence</th>
\t\t\t\t\t  \t\t\t\t<th>Nom</th>
\t\t\t\t\t  \t\t\t\t<th>Prenom</th>
\t\t\t\t\t  \t\t\t\t<th>Classement</th>
\t\t\t\t\t  \t\t\t\t<th>Date d'inscription</th>
\t\t\t\t\t  \t\t\t\t<th>Actions</th>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</thead>
\t\t\t\t\t  \t\t<tbody>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t\t<td>20/09/2017</td>
\t\t\t\t\t  \t\t\t\t<td>
\t\t\t\t\t  \t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\">Modifier</button>
\t\t\t\t\t  \t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
\t\t\t\t\t  \t\t\t\t</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t\t<td>20/09/2017</td>
\t\t\t\t\t  \t\t\t\t<td>
\t\t\t\t\t  \t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\">Modifier</button>
\t\t\t\t\t  \t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
\t\t\t\t\t  \t\t\t\t</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t\t<td>20/09/2017</td>
\t\t\t\t\t  \t\t\t\t<td>
\t\t\t\t\t  \t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\">Modifier</button>
\t\t\t\t\t  \t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
\t\t\t\t\t  \t\t\t\t</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t\t<td>20/09/2017</td>
\t\t\t\t\t  \t\t\t\t<td>
\t\t\t\t\t  \t\t\t\t\t<button type=\"button\" class=\"btn btn-warning\">Modifier</button>
\t\t\t\t\t  \t\t\t\t\t<button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
\t\t\t\t\t  \t\t\t\t</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</tbody>
\t\t\t\t\t  \t</table>
\t\t\t\t\t  </li>
\t\t\t\t\t  
\t\t\t\t</div>
\t\t</div>\t
\t</div>
";
        
        $__internal_dc6c1ebe0318a92a406c58aec68c195f0add0f69f2a3b437cbce6655d70d035b->leave($__internal_dc6c1ebe0318a92a406c58aec68c195f0add0f69f2a3b437cbce6655d70d035b_prof);

    }

    public function getTemplateName()
    {
        return "ttck/adminPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
