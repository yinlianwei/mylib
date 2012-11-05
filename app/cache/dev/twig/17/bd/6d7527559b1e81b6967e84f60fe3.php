<?php

/* MylibberBackendBundle:Book:config.html.twig */
class __TwigTemplate_17bd6d7527559b1e81b6967e84f60fe3 extends Twig_Template
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
        echo " config ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "  
 
  <div class=\"alert alert-info\">
  <h4>系统配置  </h4>
</div> 
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Book:config.html.twig";
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
