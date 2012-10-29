<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_bb12974efdebfac561bad5d6c9a7e432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => $this->getContext($context, "name"))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 45,  75 => 27,  47 => 13,  21 => 1,  138 => 39,  60 => 15,  38 => 6,  173 => 48,  165 => 43,  144 => 34,  132 => 26,  124 => 24,  111 => 43,  84 => 39,  54 => 31,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 5,  101 => 34,  80 => 37,  63 => 23,  36 => 7,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 42,  85 => 28,  65 => 19,  59 => 22,  45 => 11,  89 => 20,  82 => 19,  103 => 41,  91 => 53,  74 => 20,  70 => 19,  66 => 24,  42 => 12,  92 => 44,  86 => 41,  77 => 26,  57 => 14,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 53,  170 => 47,  157 => 61,  152 => 35,  145 => 53,  130 => 48,  125 => 49,  119 => 30,  116 => 29,  112 => 43,  102 => 36,  98 => 5,  76 => 24,  73 => 41,  69 => 19,  56 => 17,  32 => 5,  25 => 3,  19 => 2,  23 => 29,  26 => 3,  22 => 3,  29 => 3,  24 => 11,  17 => 1,  68 => 22,  61 => 19,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 33,  118 => 46,  113 => 28,  104 => 9,  99 => 33,  94 => 21,  81 => 18,  78 => 28,  72 => 24,  64 => 16,  53 => 13,  50 => 14,  48 => 10,  41 => 11,  39 => 10,  35 => 5,  33 => 6,  30 => 5,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 40,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 27,  134 => 50,  131 => 31,  128 => 30,  120 => 22,  117 => 21,  114 => 35,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 54,  90 => 43,  87 => 31,  83 => 29,  79 => 44,  71 => 40,  62 => 17,  58 => 23,  55 => 14,  52 => 13,  49 => 12,  46 => 9,  43 => 12,  40 => 7,  37 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
