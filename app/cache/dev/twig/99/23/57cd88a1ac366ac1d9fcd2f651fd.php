<?php

/* MylibberBackendBundle:Default:success.html.twig */
class __TwigTemplate_992357cd88a1ac366ac1d9fcd2f651fd extends Twig_Template
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
        echo " success";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "  
<h3>success</h3>
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Default:success.html.twig";
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
