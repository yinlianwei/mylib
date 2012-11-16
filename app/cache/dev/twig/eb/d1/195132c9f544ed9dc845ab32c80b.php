<?php

/* MylibberMylibBundle::layout.html.twig */
class __TwigTemplate_ebd1195132c9f544ed9dc845ab32c80b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mylib.css"), "html", null, true);
        echo "\" type= \"text/css\"  rel= \"stylesheet\">
";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "    Sidebar content
";
    }

    public function getTemplateName()
    {
        return "MylibberMylibBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  41 => 9,  164 => 69,  155 => 66,  151 => 64,  148 => 63,  144 => 62,  140 => 60,  138 => 59,  108 => 32,  104 => 30,  101 => 29,  95 => 25,  86 => 22,  81 => 20,  77 => 19,  73 => 18,  65 => 17,  61 => 16,  49 => 11,  43 => 10,  39 => 8,  35 => 6,  30 => 5,  27 => 4,);
    }
}
