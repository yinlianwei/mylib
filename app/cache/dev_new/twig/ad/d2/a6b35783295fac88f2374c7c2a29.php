<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_add2a6b35783295fac88f2374c7c2a29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $this->getContext($context, "token")), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 69,  172 => 67,  162 => 63,  108 => 42,  51 => 11,  95 => 45,  75 => 27,  47 => 13,  21 => 1,  138 => 39,  60 => 15,  38 => 6,  173 => 48,  165 => 64,  144 => 34,  132 => 54,  124 => 24,  111 => 43,  84 => 39,  54 => 31,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 71,  196 => 63,  183 => 68,  181 => 60,  175 => 58,  158 => 57,  107 => 5,  101 => 34,  80 => 37,  63 => 23,  36 => 7,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 42,  85 => 34,  65 => 23,  59 => 22,  45 => 11,  89 => 35,  82 => 33,  103 => 41,  91 => 53,  74 => 20,  70 => 19,  66 => 24,  42 => 12,  92 => 44,  86 => 41,  77 => 26,  57 => 13,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 70,  187 => 77,  184 => 76,  178 => 53,  170 => 47,  157 => 61,  152 => 35,  145 => 58,  130 => 48,  125 => 52,  119 => 30,  116 => 29,  112 => 43,  102 => 39,  98 => 5,  76 => 24,  73 => 41,  69 => 19,  56 => 16,  32 => 5,  25 => 3,  19 => 2,  23 => 29,  26 => 3,  22 => 3,  29 => 3,  24 => 9,  17 => 1,  68 => 24,  61 => 19,  44 => 12,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 33,  118 => 50,  113 => 28,  104 => 9,  99 => 33,  94 => 21,  81 => 18,  78 => 32,  72 => 24,  64 => 16,  53 => 13,  50 => 14,  48 => 10,  41 => 7,  39 => 8,  35 => 5,  33 => 6,  30 => 5,  27 => 3,  182 => 70,  176 => 71,  169 => 66,  163 => 58,  160 => 40,  155 => 56,  151 => 62,  149 => 52,  141 => 40,  136 => 55,  134 => 50,  131 => 31,  128 => 53,  120 => 51,  117 => 21,  114 => 35,  109 => 38,  106 => 41,  100 => 47,  96 => 34,  93 => 36,  90 => 43,  87 => 31,  83 => 29,  79 => 44,  71 => 40,  62 => 17,  58 => 23,  55 => 12,  52 => 13,  49 => 12,  46 => 9,  43 => 8,  40 => 7,  37 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
