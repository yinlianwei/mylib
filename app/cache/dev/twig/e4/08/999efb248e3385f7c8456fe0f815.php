<?php

/* MylibberMylibBundle:Page:about.html.twig */
class __TwigTemplate_e408999efb248e3385f7c8456fe0f815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MylibberMylibBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MylibberMylibBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " About ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<header> 
        <h1> About Mylib </h1> 
    </header> 
    <article> 
        <p> 基于symfony完成一个图书管理系统，该系统具备如下功能:

\t<p>图书录入</p>
\t<p>图书借出</p>
\t<p>图书归还</p>
\t<p>图书归还</p>
\t<p>图书查询</p>
\t
\t
\t
\t
\t
\t图书借阅历史 </p>
    </article>
";
    }

    public function getTemplateName()
    {
        return "MylibberMylibBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  33 => 7,  27 => 5,);
    }
}
