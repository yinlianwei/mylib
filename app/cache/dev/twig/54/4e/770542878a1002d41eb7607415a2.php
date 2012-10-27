<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_544e770542878a1002d41eb7607415a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 39,  95 => 45,  75 => 27,  47 => 13,  21 => 1,  173 => 48,  165 => 43,  144 => 34,  132 => 26,  124 => 24,  111 => 12,  84 => 39,  54 => 31,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 5,  101 => 34,  80 => 37,  63 => 23,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 22,  45 => 9,  26 => 4,  89 => 20,  82 => 19,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 53,  170 => 47,  157 => 61,  152 => 35,  145 => 53,  130 => 48,  125 => 49,  119 => 30,  116 => 29,  112 => 43,  102 => 36,  98 => 5,  76 => 24,  73 => 41,  69 => 19,  32 => 5,  42 => 12,  23 => 4,  103 => 24,  91 => 53,  74 => 20,  70 => 19,  66 => 24,  56 => 16,  25 => 3,  22 => 2,  17 => 1,  92 => 44,  86 => 41,  77 => 43,  57 => 22,  29 => 5,  24 => 6,  19 => 2,  68 => 20,  61 => 24,  44 => 10,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 33,  118 => 46,  113 => 28,  104 => 9,  99 => 33,  94 => 21,  81 => 18,  78 => 28,  72 => 16,  64 => 15,  53 => 15,  50 => 10,  48 => 10,  41 => 7,  39 => 9,  35 => 7,  33 => 5,  30 => 5,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 40,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 27,  134 => 50,  131 => 31,  128 => 30,  120 => 22,  117 => 21,  114 => 35,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 54,  90 => 43,  87 => 19,  83 => 23,  79 => 44,  71 => 40,  62 => 17,  58 => 23,  55 => 12,  52 => 21,  49 => 14,  46 => 9,  43 => 12,  40 => 7,  37 => 9,  34 => 6,  31 => 6,  28 => 7,);
    }
}
