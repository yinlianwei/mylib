<?php

/* MylibberBackendBundle:Default:addCatrgory.html.twig */
class __TwigTemplate_2ead164ef280e1619e5ec20a18f9e219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MylibberBackendBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
 \t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo " \t\t\t<li><span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "categoryName"), "html", null, true);
            echo "</span><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_deleteCategory", array("id" => $this->getAttribute($this->getContext($context, "category"), "Id"))), "html", null, true);
            echo "\"><span class=\"label label-important\">删除</span></a></li><br>
 \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "\t\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addCategoryNew"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"bloger\"> 
\t\t    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo " 
\t\t 
\t\t    <input type=\"submit\" /> 
\t\t</form> 
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Default:addCatrgory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  47 => 8,  36 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
