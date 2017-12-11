<?php

/* pdf/generate_grille.html.twig */
class __TwigTemplate_88b1de310353fc4ec944cb18fd2be970a861248d813ca6434d10ff692870a3ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90ff6434229d2eebe6ae624519724880aea75f72ebf4507b03cba23180be87f2 = $this->env->getExtension("native_profiler");
        $__internal_90ff6434229d2eebe6ae624519724880aea75f72ebf4507b03cba23180be87f2->enter($__internal_90ff6434229d2eebe6ae624519724880aea75f72ebf4507b03cba23180be87f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pdf/generate_grille.html.twig"));

        // line 1
        echo "odjfosdjfjisdo

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_90ff6434229d2eebe6ae624519724880aea75f72ebf4507b03cba23180be87f2->leave($__internal_90ff6434229d2eebe6ae624519724880aea75f72ebf4507b03cba23180be87f2_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_df05a7ff8da9e106a993cbe594a020dcf075259ff8fcf1dcba90d912e27d8f46 = $this->env->getExtension("native_profiler");
        $__internal_df05a7ff8da9e106a993cbe594a020dcf075259ff8fcf1dcba90d912e27d8f46->enter($__internal_df05a7ff8da9e106a993cbe594a020dcf075259ff8fcf1dcba90d912e27d8f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"content\">
        <div class=\"col-md-12\">
            <div class=\"row\">
                <div class=\"table table-bordered\">
                    <thead>
                        <tr>
                            <th>
                                Nom
                            </th>
                            <th>
                                Set 1
                            </th>
                            <th>
                                Set 2
                            </th>
                            <th>
                                Set 3
                            </th>
                            <th>
                                Set 4
                            </th>
                            <th>
                                Set 5
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["joueurs"]) ? $context["joueurs"] : $this->getContext($context, "joueurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 34
            echo "                        <tr>
                            <td>
                                ";
            // line 36
            echo twig_escape_filter($this->env, $context["joueur"], "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_df05a7ff8da9e106a993cbe594a020dcf075259ff8fcf1dcba90d912e27d8f46->leave($__internal_df05a7ff8da9e106a993cbe594a020dcf075259ff8fcf1dcba90d912e27d8f46_prof);

    }

    public function getTemplateName()
    {
        return "pdf/generate_grille.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 40,  78 => 36,  74 => 34,  70 => 33,  39 => 4,  27 => 3,  23 => 1,);
    }
}
