<?php

/* default/index.html.twig */
class __TwigTemplate_e757fb5d2c4c68f51b663d138b66028d6dccd306093e63e56fc07a253be61ef7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_82e703d06f3efba14e11c64ecca78d60eae9340b91485efc3e755a2fae640db7 = $this->env->getExtension("native_profiler");
        $__internal_82e703d06f3efba14e11c64ecca78d60eae9340b91485efc3e755a2fae640db7->enter($__internal_82e703d06f3efba14e11c64ecca78d60eae9340b91485efc3e755a2fae640db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82e703d06f3efba14e11c64ecca78d60eae9340b91485efc3e755a2fae640db7->leave($__internal_82e703d06f3efba14e11c64ecca78d60eae9340b91485efc3e755a2fae640db7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c34fff37c321ecfc521dcd69682da6ff6e8b184fe9cc72717632f6834b0c32da = $this->env->getExtension("native_profiler");
        $__internal_c34fff37c321ecfc521dcd69682da6ff6e8b184fe9cc72717632f6834b0c32da->enter($__internal_c34fff37c321ecfc521dcd69682da6ff6e8b184fe9cc72717632f6834b0c32da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_c34fff37c321ecfc521dcd69682da6ff6e8b184fe9cc72717632f6834b0c32da->leave($__internal_c34fff37c321ecfc521dcd69682da6ff6e8b184fe9cc72717632f6834b0c32da_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
