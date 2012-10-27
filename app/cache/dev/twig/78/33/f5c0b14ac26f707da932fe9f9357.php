<?php

/* MylibberMylibBundle:Page:contact.html.twig */
class __TwigTemplate_7833f5c0b14ac26f707da932fe9f9357 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Contact ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<header> 
        <h1> Contact mylib </h1> 
    </header>
\t";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "blogger-notice"), "method")) {
            // line 10
            echo "\t    <div  class= \"blogger-notice\" >
\t        ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "blogger-notice"), "method"), "html", null, true);
            echo "
\t    </div>
\t";
        }
        // line 14
        echo "    <p> Want to contact Mylib? </p>

    <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"bloger\">
    \t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    \t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'row');
        echo "
    \t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
    \t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "subject"), 'row');
        echo "
    \t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "body"), 'row');
        echo "

    \t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    \t<input type=\"submit\" value=\"Subject\"/>
    </form>
";
    }

    public function getTemplateName()
    {
        return "MylibberMylibBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  26 => 3,  89 => 20,  82 => 19,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 24,  73 => 23,  69 => 19,  32 => 11,  42 => 12,  23 => 4,  103 => 24,  91 => 20,  74 => 20,  70 => 19,  66 => 18,  56 => 16,  25 => 4,  22 => 2,  17 => 1,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  29 => 5,  24 => 6,  19 => 2,  68 => 20,  61 => 24,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 21,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 10,  41 => 9,  39 => 5,  35 => 8,  33 => 5,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 23,  79 => 25,  71 => 19,  62 => 17,  58 => 23,  55 => 14,  52 => 14,  49 => 14,  46 => 11,  43 => 10,  40 => 7,  37 => 9,  34 => 5,  31 => 4,  28 => 7,);
    }
}
