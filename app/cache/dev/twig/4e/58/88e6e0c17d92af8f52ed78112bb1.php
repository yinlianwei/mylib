<?php

/* MylibberMylibBundle:Page:manage.html.twig */
class __TwigTemplate_4e5888e6e0c17d92af8f52ed78112bb1 extends Twig_Template
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
        echo " Manage ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<header> 
        <h1> Manage </h1> 
    </header> 
    <article> 
        <p> 基于symfony完成一个图书管理系统:
    </article>
";
    }

    public function getTemplateName()
    {
        return "MylibberMylibBundle:Page:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 48,  165 => 43,  144 => 34,  132 => 26,  124 => 24,  111 => 12,  84 => 47,  54 => 31,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 10,  101 => 34,  80 => 24,  63 => 35,  36 => 8,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 34,  45 => 9,  26 => 1,  89 => 20,  82 => 19,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 53,  170 => 47,  157 => 61,  152 => 35,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 5,  76 => 24,  73 => 41,  69 => 19,  32 => 5,  42 => 12,  23 => 4,  103 => 24,  91 => 53,  74 => 20,  70 => 19,  66 => 18,  56 => 16,  25 => 4,  22 => 2,  17 => 1,  92 => 39,  86 => 50,  77 => 43,  57 => 22,  29 => 5,  24 => 6,  19 => 2,  68 => 20,  61 => 24,  44 => 10,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 9,  99 => 33,  94 => 21,  81 => 18,  78 => 21,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 10,  41 => 14,  39 => 9,  35 => 6,  33 => 7,  30 => 5,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 40,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 27,  134 => 50,  131 => 43,  128 => 25,  120 => 22,  117 => 21,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 54,  90 => 28,  87 => 19,  83 => 23,  79 => 44,  71 => 40,  62 => 17,  58 => 23,  55 => 14,  52 => 21,  49 => 14,  46 => 11,  43 => 10,  40 => 7,  37 => 9,  34 => 5,  31 => 4,  28 => 7,);
    }
}
