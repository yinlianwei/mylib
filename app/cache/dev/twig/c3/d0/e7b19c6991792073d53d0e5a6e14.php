<?php

/* MylibberBackendBundle::layout.html.twig */
class __TwigTemplate_c3d0e7b19c6991792073d53d0e5a6e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::backendBase.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backendBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/backend.css"), "html", null, true);
        echo "\" type= \"text/css\"  rel= \"stylesheet\">
";
    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "<ul class=\"nav nav-list\">
 \t<li class=\"active\">
    \t<a href=\"#\"><i class = \"icon-home\"></i>常用操作</a>
  \t</li>
  \t<li>
    \t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_borrbook"), "html", null, true);
        echo "\">
      \t\t<i class=\"icon-backward\"></i>图书借出
    \t</a>
   \t</li>
   \t<li>
    \t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_retbook"), "html", null, true);
        echo "\">
      \t\t<i class=\"icon-gift\"></i>图书归还
   \t\t</a>
   \t</li>
   \t<li>
   \t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addbook"), "html", null, true);
        echo "\">
      \t\t<i class=\"icon-book\"></i>图书录入
    \t</a>
   \t</li> 
   \t<li>
   \t\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_histbook"), "html", null, true);
        echo "\">
      \t\t<i class=\"icon-list\"></i>借阅历史
    \t</a>
  \t</li>
  \t<li class=\"active\">
    \t<a href=\"#\"><i class = \"icon-check\"></i>其他配置</a>
  \t</li>
    <li>
      \t<a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_usermanage"), "html", null, true);
        echo "\">
      \t\t<i class=\"icon-user\"></i>用户管理
    \t</a>
    </li>
    <li>
    \t<a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_config"), "html", null, true);
        echo "\">
      \t\t<i class=\"icon-edit\"></i>系统配置
    \t</a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 42,  86 => 37,  75 => 29,  67 => 24,  59 => 19,  51 => 14,  44 => 9,  41 => 8,  35 => 5,  30 => 4,  27 => 3,);
    }
}
