<?php

/* ttck/gestionEquipe.html.twig */
class __TwigTemplate_7d52d7252d6dbbbd9c82ba12a994bf13d2ca04b622c9a2d7162a87de73d9de08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ttck/gestionEquipe.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e2e4a5f1dcc4c1952690fc3abfac19b235663ee39e44edc89a3748f36bc77a8 = $this->env->getExtension("native_profiler");
        $__internal_7e2e4a5f1dcc4c1952690fc3abfac19b235663ee39e44edc89a3748f36bc77a8->enter($__internal_7e2e4a5f1dcc4c1952690fc3abfac19b235663ee39e44edc89a3748f36bc77a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ttck/gestionEquipe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e2e4a5f1dcc4c1952690fc3abfac19b235663ee39e44edc89a3748f36bc77a8->leave($__internal_7e2e4a5f1dcc4c1952690fc3abfac19b235663ee39e44edc89a3748f36bc77a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1cc1a8bf94187ba01411787028f91fdcb1a76f1fc6ed34cec7e48855af8520af = $this->env->getExtension("native_profiler");
        $__internal_1cc1a8bf94187ba01411787028f91fdcb1a76f1fc6ed34cec7e48855af8520af->enter($__internal_1cc1a8bf94187ba01411787028f91fdcb1a76f1fc6ed34cec7e48855af8520af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<style type=\"text/css\">
\tul.list-group:after {
\t\tclear: both;
\t\tdisplay: block;
\t\tcontent: \"\";
\t}

\t.list-group-item {
\t    float: left !important;
\t}
\t</style>
";
        
        $__internal_1cc1a8bf94187ba01411787028f91fdcb1a76f1fc6ed34cec7e48855af8520af->leave($__internal_1cc1a8bf94187ba01411787028f91fdcb1a76f1fc6ed34cec7e48855af8520af_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_ada1465b999a5dbbd3185a0a4b54c7fdc92aa59654599bf4063c6df1326955cf = $this->env->getExtension("native_profiler");
        $__internal_ada1465b999a5dbbd3185a0a4b54c7fdc92aa59654599bf4063c6df1326955cf->enter($__internal_ada1465b999a5dbbd3185a0a4b54c7fdc92aa59654599bf4063c6df1326955cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
\t<div id=\"content\" style=\"margin-top: 20px\">
\t\t<div class=\"col-lg-12\"  ng-controller=\"OverviewCtrl\"> 
\t\t\t<fieldset>
\t\t\t\t<h2>Equipe pour la journée 3 (21-22 Octobre)
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t<i class=\"fa fa-print\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\tImprimer les équipes
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success\" ng-click=\"validerEquipe(joueurs)\">
\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\tValider les équipes
\t\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t</h2>
\t\t\t\t
\t\t\t</fieldset>

\t\t\t\t
\t\t\t\t<gestion-equipe joueurs=\"joueurs\"></gestion-equipe>
\t\t\t\t<popup message-modal=\"messageModal\"></popup>

\t\t\t\t
\t\t\t
\t\t\t\t</div>

\t\t\t";
        // line 107
        echo "\t


\t\t\t<!--
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<ul class=\"list-group\" data-drop=\"true\" ng-show=\"hideJoueur()\" ng-model='arrayJoueur' jqyoui-droppable=\"{multiple:true}\">
\t\t\t\t\t  <li class=\"list-group-item active\">Pot de Joueur 11 à 15 </li>

\t\t\t\t\t\t<li class=\"list-group-item\"   ng-repeat=\"item in arrayJoueur track by \$index \" ng-show=\"item.nom\" data-drag=\"true\" data-jqyoui-options=\"{revert: 'invalid'}\" ng-model=\"arrayJoueur\" jqyoui-draggable=\"{index: {{\$index}},animate:true}\" >{{item.nom}} {{ item.prenom }}<div class=\"pull-right\">{{item.classement}}</div></li>
\t\t\t\t\t  
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"list-group\" data-drop=\"true\" ng-show=\"hideJoueur()\" ng-model='arrayJoueur' jqyoui-droppable=\"{multiple:true}\">
\t\t\t\t\t  <li class=\"list-group-item active\">Pot de Joueur 5 à 10 </li>

\t\t\t\t\t\t<li class=\"list-group-item\"  ng-repeat=\"item in arrayJoueur2 track by \$index \" ng-show=\"item.nom\" data-drag=\"true\" data-jqyoui-options=\"{revert: 'invalid'}\" ng-model=\"arrayJoueur2\" jqyoui-draggable=\"{index: {{\$index}},animate:true}\" >{{item.nom}} {{ item.prenom }}<div class=\"pull-right\">{{item.classement}}</div></li>
\t\t\t\t\t  
\t\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t</div>
\t\t

\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<ul class=\"list-group\"  data-drop=\"true\" ng-model='arrayEquipe1' jqyoui-droppable=\"{multiple:true}\">
\t \t\t\t\t\t  <li class=\"list-group-item\">
\t \t\t\t\t\t  \tEquipe de R2
\t \t\t\t\t\t  \t<div ng-if=\"arrayEquipe1.length > 0\" class=\"pull-right\"> \t\t\t\t\t  \t\t
\t \t\t\t\t\t  \t\t <span class=\"badge badge-pill badge-success pointer\" ng-click=\"reinitEquipe(1)\">
\t\t \t\t\t\t\t  \t\t <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
\t\t \t\t\t\t\t  \t\t Réinitialiser 
\t \t\t\t\t\t  \t\t </span>
\t \t\t\t\t\t  \t</div>\t \t\t\t\t\t
\t\t\t\t\t   \t\t<li class=\"list-group-item list-group-item-success\" ng-repeat=\"item in arrayEquipe1 track by \$index\" ng-show=\"item.nom\" data-drag=\"true\" data-jqyoui-options=\"{revert: 'invalid'}\" ng-model=\"arrayEquipe1\" jqyoui-draggable=\"{index: {{\$index}},animate:true}\" >{{item.nom}} {{ item.prenom }}<div class=\"pull-right\">{{item.classement}}</div></li>
\t\t\t\t\t   \t\t\t <li class=\"list-group-item\" ng-hide=\"hideMe(arrayEquipe1)\"  >Ajouter un joueur</li>

\t \t\t\t\t\t  </li>
 \t\t\t\t\t  </ul>
 \t\t\t\t\t  <ul class=\"list-group\" data-drop=\"true\" ng-model='arrayEquipeRemplacante1' jqyoui-droppable=\"{multiple:true}\">
\t\t\t\t\t  \t\t <li class=\"list-group-item active\" style=\"text-align: center;\" ng-show=\"showRemplacant(arrayEquipe1)\" data-drop=\"true\" >Remplaçant
\t\t\t   \t\t\t  <li class=\"list-group-item list-group-item-warning\" ng-repeat=\"item in arrayEquipeRemplacante1 track by \$index\" ng-show=\"item.nom\" data-drag=\"true\" data-jqyoui-options=\"{revert: 'invalid'}\" ng-model=\"arrayEquipeRemplacante1\" jqyoui-draggable=\"{index: {{\$index}},animate:true}\" >{{item.nom}}<div class=\"pull-right\">{{item.classement}}</div></li>

\t\t\t\t\t   \t\t\t <li ng-if=\"arrayEquipe1.length > 0\" class=\"list-group-item\" ng-hide=\"hideMe(arrayEquipeRemplacante1)\"  >Ajouter un joueur</li>
\t\t\t   \t\t\t  </li>
 \t\t\t\t\t  </ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<ul class=\"list-group\"  data-drop=\"true\" ng-model='arrayEquipe2' jqyoui-droppable=\"{multiple:true}\">
\t \t\t\t\t\t  <li class=\"list-group-item\">
\t \t\t\t\t\t  \tEquipe de R3 (forte)
\t \t\t\t\t\t  \t<div ng-if=\"arrayEquipe2.length > 0\" class=\"pull-right\"> \t\t\t\t\t  \t\t
\t \t\t\t\t\t  \t\t <span class=\"badge badge-pill badge-success pointer\" ng-click=\"reinitEquipe(2)\">
\t\t \t\t\t\t\t  \t\t <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
\t\t \t\t\t\t\t  \t\t Réinitialiser 
\t \t\t\t\t\t  \t\t </span>
\t \t\t\t\t\t  \t</div>\t \t\t\t\t\t 
\t \t
\t \t\t\t\t\t   \t
\t\t\t\t\t   \t\t<li class=\"list-group-item\" ng-repeat=\"item in arrayEquipe2 track by \$index\" ng-show=\"item.nom\" data-drag=\"true\" data-jqyoui-options=\"{revert: 'invalid', helper: 'clone'}\" ng-model=\"arrayEquipe2\" jqyoui-draggable=\"{index: {{\$index}},animate:true}\">{{item.nom}} <div class=\"pull-right\">{{item.classement}}</div></li>
\t\t\t\t\t   \t\t\t <li class=\"list-group-item\" ng-hide=\"hideMe(arrayEquipe2)\">Ajouter un joueur</li>
\t \t\t\t\t\t  </li>
 \t\t\t\t\t  </ul>
\t\t\t\t</div>

\t\t\t";
        echo "
\t\t\t-->

\t\t</div>
\t\t\t<!--<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"list-group\">
 \t\t\t\t\t  <li class=\"list-group-item\">
 \t\t\t\t\t  \tEquipe de R2
 \t\t\t\t\t  \t<div class=\"pull-right\"> \t\t\t\t\t  \t\t
 \t\t\t\t\t  \t\t <span class=\"badge badge-pill badge-success\">
\t \t\t\t\t\t  \t\t <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
\t \t\t\t\t\t  \t\t Gérer cette équipe
 \t\t\t\t\t  \t\t </span>
 \t\t\t\t\t  \t</div>
 \t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t  \t<table class=\"table table-hover\">
\t\t\t\t\t  \t\t<thead>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<th>Num. licence</th>
\t\t\t\t\t  \t\t\t\t<th>Nom</th>
\t\t\t\t\t  \t\t\t\t<th>Prenom</th>
\t\t\t\t\t  \t\t\t\t<th>Classement</th>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</thead>
\t\t\t\t\t  \t\t<tbody>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</tbody>
\t\t\t\t\t  \t</table>
\t\t\t\t\t  </li>
\t\t\t\t\t  
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"list-group\">
 \t\t\t\t\t  <li class=\"list-group-item\">
 \t\t\t\t\t  \tEquipe de R3
 \t\t\t\t\t  \t<div class=\"pull-right\"> \t\t\t\t\t  \t\t
 \t\t\t\t\t  \t\t <span class=\"badge badge-pill badge-success\">
\t \t\t\t\t\t  \t\t <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
\t \t\t\t\t\t  \t\t Gérer cette équipe
 \t\t\t\t\t  \t\t </span>
 \t\t\t\t\t  \t</div>
 \t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t  \t<table class=\"table table-hover\">
\t\t\t\t\t  \t\t<thead>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<th>Num. licence</th>
\t\t\t\t\t  \t\t\t\t<th>Nom</th>
\t\t\t\t\t  \t\t\t\t<th>Prenom</th>
\t\t\t\t\t  \t\t\t\t<th>Classement</th>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</thead>
\t\t\t\t\t  \t\t<tbody>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</tbody>
\t\t\t\t\t  \t</table>
\t\t\t\t\t  </li>
\t\t\t\t\t  
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"list-group\">
 \t\t\t\t\t  <li class=\"list-group-item\">
 \t\t\t\t\t  \tEquipe de R4
 \t\t\t\t\t  \t<div class=\"pull-right\"> \t\t\t\t\t  \t\t
 \t\t\t\t\t  \t\t <span class=\"badge badge-pill badge-success\">
\t \t\t\t\t\t  \t\t <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
\t \t\t\t\t\t  \t\t Gérer cette équipe
 \t\t\t\t\t  \t\t </span>
 \t\t\t\t\t  \t</div>
 \t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t  \t<table class=\"table table-hover\">
\t\t\t\t\t  \t\t<thead>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<th>Num. licence</th>
\t\t\t\t\t  \t\t\t\t<th>Nom</th>
\t\t\t\t\t  \t\t\t\t<th>Prenom</th>
\t\t\t\t\t  \t\t\t\t<th>Classement</th>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</thead>
\t\t\t\t\t  \t\t<tbody>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</tbody>
\t\t\t\t\t  \t</table>
\t\t\t\t\t  </li>
\t\t\t\t\t  
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"list-group\">
 \t\t\t\t\t  <li class=\"list-group-item\">
 \t\t\t\t\t  \tEquipe de D1
 \t\t\t\t\t  \t<div class=\"pull-right\"> \t\t\t\t\t  \t\t
 \t\t\t\t\t  \t\t <span class=\"badge badge-pill badge-success\">
\t \t\t\t\t\t  \t\t <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
\t \t\t\t\t\t  \t\t Gérer cette équipe
 \t\t\t\t\t  \t\t </span>
 \t\t\t\t\t  \t</div>
 \t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t  \t<table class=\"table table-hover\">
\t\t\t\t\t  \t\t<thead>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<th>Num. licence</th>
\t\t\t\t\t  \t\t\t\t<th>Nom</th>
\t\t\t\t\t  \t\t\t\t<th>Prenom</th>
\t\t\t\t\t  \t\t\t\t<th>Classement</th>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</thead>
\t\t\t\t\t  \t\t<tbody>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</tbody>
\t\t\t\t\t  \t</table>
\t\t\t\t\t  </li>
\t\t\t\t\t  
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"list-group\">
 \t\t\t\t\t  <li class=\"list-group-item\">
 \t\t\t\t\t  \tEquipe de D2
 \t\t\t\t\t  \t<div class=\"pull-right\"> \t\t\t\t\t  \t\t
 \t\t\t\t\t  \t\t <span class=\"badge badge-pill badge-success\">
\t \t\t\t\t\t  \t\t <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
\t \t\t\t\t\t  \t\t Gérer cette équipe
 \t\t\t\t\t  \t\t </span>
 \t\t\t\t\t  \t</div>
 \t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t  \t<table class=\"table table-hover\">
\t\t\t\t\t  \t\t<thead>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<th>Num. licence</th>
\t\t\t\t\t  \t\t\t\t<th>Nom</th>
\t\t\t\t\t  \t\t\t\t<th>Prenom</th>
\t\t\t\t\t  \t\t\t\t<th>Classement</th>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</thead>
\t\t\t\t\t  \t\t<tbody>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</tbody>
\t\t\t\t\t  \t</table>
\t\t\t\t\t  </li>
\t\t\t\t\t  
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"list-group\">
 \t\t\t\t\t  <li class=\"list-group-item\">
 \t\t\t\t\t  \tEquipe de D3
 \t\t\t\t\t  \t<div class=\"pull-right\"> \t\t\t\t\t  \t\t
 \t\t\t\t\t  \t\t <span class=\"badge badge-pill badge-success\">
\t \t\t\t\t\t  \t\t <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
\t \t\t\t\t\t  \t\t Gérer cette équipe
 \t\t\t\t\t  \t\t </span>
 \t\t\t\t\t  \t</div>
 \t\t\t\t\t  </li>
\t\t\t\t\t  <li class=\"list-group-item\">
\t\t\t\t\t  \t<table class=\"table table-hover\">
\t\t\t\t\t  \t\t<thead>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<th>Num. licence</th>
\t\t\t\t\t  \t\t\t\t<th>Nom</th>
\t\t\t\t\t  \t\t\t\t<th>Prenom</th>
\t\t\t\t\t  \t\t\t\t<th>Classement</th>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</thead>
\t\t\t\t\t  \t\t<tbody>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t\t<tr>
\t\t\t\t\t  \t\t\t\t<td>595959</td>
\t\t\t\t\t  \t\t\t\t<td>Wallaert</td>
\t\t\t\t\t  \t\t\t\t<td>Kevin</td>
\t\t\t\t\t  \t\t\t\t<td>15</td>
\t\t\t\t\t  \t\t\t</tr>
\t\t\t\t\t  \t\t</tbody>
\t\t\t\t\t  \t</table>
\t\t\t\t\t  </li>
\t\t\t\t\t  
\t\t\t\t</div>

\t\t\t</div>-->
\t\t</div>
\t</div>

";
        
        $__internal_ada1465b999a5dbbd3185a0a4b54c7fdc92aa59654599bf4063c6df1326955cf->leave($__internal_ada1465b999a5dbbd3185a0a4b54c7fdc92aa59654599bf4063c6df1326955cf_prof);

    }

    public function getTemplateName()
    {
        return "ttck/gestionEquipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 107,  68 => 18,  62 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
