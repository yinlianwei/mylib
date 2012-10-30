<?php

/* MylibberBackendBundle:Book:add.html.twig */
class __TwigTemplate_9aeac17d4bb085cafe8e13e3bd9a782b extends Twig_Template
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
        echo " add book  admin";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addnew"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"bloger\"> 
\t\t    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo " 
\t\t 
\t\t    <input type=\"submit\" /> 
\t\t</form> 
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Book:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  36 => 5,  33 => 4,  27 => 3,);
    }
}
