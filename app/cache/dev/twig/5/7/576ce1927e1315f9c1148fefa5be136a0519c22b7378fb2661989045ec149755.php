<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_576ce1927e1315f9c1148fefa5be136a0519c22b7378fb2661989045ec149755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cd64130a2ce961811f7a7a81d3e88a284f2f21ead57a240924d299a84e3682a = $this->env->getExtension("native_profiler");
        $__internal_8cd64130a2ce961811f7a7a81d3e88a284f2f21ead57a240924d299a84e3682a->enter($__internal_8cd64130a2ce961811f7a7a81d3e88a284f2f21ead57a240924d299a84e3682a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd64130a2ce961811f7a7a81d3e88a284f2f21ead57a240924d299a84e3682a->leave($__internal_8cd64130a2ce961811f7a7a81d3e88a284f2f21ead57a240924d299a84e3682a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b0a46e27753df9a26a95982e33c66812ae644c69312650e1d70828db948f306 = $this->env->getExtension("native_profiler");
        $__internal_7b0a46e27753df9a26a95982e33c66812ae644c69312650e1d70828db948f306->enter($__internal_7b0a46e27753df9a26a95982e33c66812ae644c69312650e1d70828db948f306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7b0a46e27753df9a26a95982e33c66812ae644c69312650e1d70828db948f306->leave($__internal_7b0a46e27753df9a26a95982e33c66812ae644c69312650e1d70828db948f306_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4075fe2eb91172ef93d4b0a6180f34edb5487e595f866dc30581e99c9c6f8ec = $this->env->getExtension("native_profiler");
        $__internal_f4075fe2eb91172ef93d4b0a6180f34edb5487e595f866dc30581e99c9c6f8ec->enter($__internal_f4075fe2eb91172ef93d4b0a6180f34edb5487e595f866dc30581e99c9c6f8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f4075fe2eb91172ef93d4b0a6180f34edb5487e595f866dc30581e99c9c6f8ec->leave($__internal_f4075fe2eb91172ef93d4b0a6180f34edb5487e595f866dc30581e99c9c6f8ec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_513d7361fd152e0bb9d491c2578e84c762ad6afa494a2bdf952a717f8f32692f = $this->env->getExtension("native_profiler");
        $__internal_513d7361fd152e0bb9d491c2578e84c762ad6afa494a2bdf952a717f8f32692f->enter($__internal_513d7361fd152e0bb9d491c2578e84c762ad6afa494a2bdf952a717f8f32692f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_513d7361fd152e0bb9d491c2578e84c762ad6afa494a2bdf952a717f8f32692f->leave($__internal_513d7361fd152e0bb9d491c2578e84c762ad6afa494a2bdf952a717f8f32692f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
