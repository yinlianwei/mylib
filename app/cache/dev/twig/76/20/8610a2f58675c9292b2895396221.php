<?php

/* MylibberBackendBundle:Book:add.html.twig */
class __TwigTemplate_76208610a2f58675c9292b2895396221 extends Twig_Template
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
        echo "  <div class=\"alert alert-info\">
  <h4>书籍录入</h4></div>
     <a href=\"../../test_douban.php\" target=\"view_window\"><span class=\"label label-success\">从豆瓣获取图书参考信息</span></a>

\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addnew"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"bloger\">
\t\t    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo " 
\t\t    <input type=\"submit\" /> 
\t\t</form>
\t\t<frame>
\t\t\ttest_douban.php
\t\t</frame>
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
        return array (  41 => 9,  35 => 8,  29 => 4,  26 => 3,);
    }
}
