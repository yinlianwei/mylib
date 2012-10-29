<?php

/* MylibberMylibBundle:Page:index.html.twig */
class __TwigTemplate_76f17cdc687bb933b53ff16ad7e74835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MylibberMylibBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <article class=\"book\">
        <header>
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getAttribute($this->getContext($context, "book"), "bookPic")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
        \t<p>ISBN: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookIsbn"), "html", null, true);
        echo "</p>
        \t<p>作者: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookAuthor"), "html", null, true);
        echo " </p>
        \t<p>定价: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookPrice"), "html", null, true);
        echo "</p>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookContent"), "html", null, true);
        echo "</p>
        </div>
    </article>
";
    }

    public function getTemplateName()
    {
        return "MylibberMylibBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  173 => 48,  165 => 43,  144 => 34,  132 => 26,  124 => 24,  111 => 12,  84 => 47,  54 => 31,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 10,  101 => 34,  80 => 24,  63 => 35,  36 => 8,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 34,  45 => 11,  89 => 20,  82 => 19,  103 => 24,  91 => 53,  74 => 20,  70 => 19,  66 => 18,  42 => 12,  92 => 39,  86 => 50,  77 => 43,  57 => 14,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 53,  170 => 47,  157 => 61,  152 => 35,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 5,  76 => 24,  73 => 41,  69 => 19,  56 => 16,  32 => 5,  25 => 4,  19 => 2,  23 => 4,  26 => 4,  22 => 3,  29 => 5,  24 => 6,  17 => 1,  68 => 20,  61 => 24,  44 => 10,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 9,  99 => 33,  94 => 21,  81 => 18,  78 => 21,  72 => 16,  64 => 15,  53 => 13,  50 => 15,  48 => 10,  41 => 14,  39 => 9,  35 => 6,  33 => 7,  30 => 5,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 40,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 27,  134 => 50,  131 => 43,  128 => 25,  120 => 22,  117 => 21,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 54,  90 => 28,  87 => 19,  83 => 23,  79 => 44,  71 => 40,  62 => 17,  58 => 23,  55 => 14,  52 => 21,  49 => 12,  46 => 11,  43 => 10,  40 => 7,  37 => 9,  34 => 5,  31 => 4,  28 => 7,);
    }
}