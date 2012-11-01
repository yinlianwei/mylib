<?php

/* MylibberBackendBundle:User:addUser.html.twig */
class __TwigTemplate_a611f39ac0c44ea4355172b3a1a31ef7 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 6
            echo " \t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "uName"), "html", null, true);
            echo "
 \t\t\t<a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_updateUser", array("id" => $this->getAttribute($this->getContext($context, "user"), "Id"))), "html", null, true);
            echo "\"><span class=\"label label-success\">修改</span></a>
 \t\t\t
 \t\t\t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_deleteUser", array("id" => $this->getAttribute($this->getContext($context, "user"), "Id"))), "html", null, true);
            echo "\"><span class=\"label label-important\">删除</span></a>
 \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "\t\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addUserNew"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"bloger\"> 
\t\t    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo " 
\t\t 
\t\t    <input type=\"submit\" /> 
\t\t</form> 
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:User:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  54 => 11,  46 => 9,  41 => 7,  36 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
