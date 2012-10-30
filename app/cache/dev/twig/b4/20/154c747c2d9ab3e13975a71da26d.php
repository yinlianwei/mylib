<?php

/* MylibberBackendBundle:Book:borr.html.twig */
class __TwigTemplate_b420154c747c2d9ab3e13975a71da26d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MylibberBackendBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MylibberBackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " borrow books ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "  
\t<h3>borrow book</h3>
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Book:borr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  27 => 3,);
    }
}
