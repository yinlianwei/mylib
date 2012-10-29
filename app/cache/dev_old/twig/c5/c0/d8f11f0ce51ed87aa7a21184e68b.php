<?php

/* MylibberMylibBundle:Book:show.html.twig */
class __TwigTemplate_c5c0d8f11f0ce51ed87aa7a21184e68b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MylibberMylibBundle::layout.html.twig");

        $this->blocks = array(
            'bookName' => array($this, 'block_bookName'),
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

    // line 4
    public function block_bookName($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <article class=\"book\">
        <header>
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getAttribute($this->getContext($context, "book"), "bookPic")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
        \t<p>ISBN: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookIsbn"), "html", null, true);
        echo "</p>
        \t<p>作者: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookAuthor"), "html", null, true);
        echo " </p>
        \t<p>定价: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookPrice"), "html", null, true);
        echo "</p>
            <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookContent"), "html", null, true);
        echo "</p>
        </div>
    </article>
";
    }

    public function getTemplateName()
    {
        return "MylibberMylibBundle:Book:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  60 => 15,  56 => 14,  52 => 13,  45 => 11,  40 => 9,  36 => 7,  33 => 6,  27 => 4,);
    }
}
