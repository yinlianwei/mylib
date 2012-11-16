<?php

/* MylibberBackendBundle::layout.html.twig */
class __TwigTemplate_a2f94827fb77f2451fdc47ec0c66c885 extends Twig_Template
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
      \t\t<i class=\"icon-gift\"></i>图书借阅
    \t</a>
   \t</li>
   \t<li>
   \t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addbook"), "html", null, true);
        echo "\">
      \t\t<i class=\"icon-book\"></i>图书录入
    \t</a>
   \t</li> 
   \t<li>
   \t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_histbook"), "html", null, true);
        echo "\">
      \t\t<i class=\"icon-list\"></i>借阅历史
    \t</a>
  \t</li>
  \t
  \t
  \t<li class=\"active\">
    \t<a href=\"#\"><i class = \"icon-book\"></i>电子书</a>
  \t</li>
        <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addebookform"), "html", null, true);
        echo "\">
          <i class=\"icon-upload\"></i>上传
      </a>
    </li>
    <li>
      \t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_showebook"), "html", null, true);
        echo "\">
      \t\t<i class=\"icon-magnet\"></i>管理
    \t</a>
    </li>
  \t
  \t<li class=\"active\">
    \t<a href=\"#\"><i class = \"icon-check\"></i>其他配置</a>
  \t</li>
        <li>
        <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addCategory"), "html", null, true);
        echo "\">
          <i class=\"icon-flag\"></i>类别管理
      </a>
    </li>
    <li>
      \t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addUser"), "html", null, true);
        echo "\">
      \t\t<i class=\"icon-user\"></i>用户管理
    \t</a>
    </li>
    <li>
    \t<a href=\"";
        // line 58
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
        return array (  116 => 58,  108 => 53,  100 => 48,  88 => 39,  80 => 34,  67 => 24,  59 => 19,  51 => 14,  44 => 9,  41 => 8,  35 => 5,  30 => 4,  27 => 3,);
    }
}
