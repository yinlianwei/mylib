<?php

/* MylibberBackendBundle:Default:index.html.twig */
class __TwigTemplate_025853ac2726dc6250fec033ef1e73e1 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " welcome admin";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"alert alert-info\">
  使用symfony2 完成的一个简易图书管理系统，暂且成为“网上图书馆”.
   该系统具备如下主要功能：
   <div class=\"alert alert-success\">
  图书录入，图书借出，图书归还，图书查询。
</div>

<li>框架版本：symfony2, twitter-bootstrap</li>
<li>兼容浏览器：chrome firefox</li>
<li>环境：xmapp-for-linux集成开发套件, linux-ubuntu-12.04LTS X64</li>
<li>开发工具：sublime</li>
<li>版本控制：github   https://github.com/yinlianwei/mylib.git</li>
<li>作者： Evenvi</li>
<li>开发日期：2012.10.25-2012.11.5</li>



</div>
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  33 => 3,  27 => 2,);
    }
}
