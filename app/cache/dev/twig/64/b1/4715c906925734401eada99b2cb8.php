<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_64b14715c906925734401eada99b2cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  331 => 141,  328 => 140,  325 => 139,  323 => 138,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  250 => 100,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  226 => 87,  224 => 86,  219 => 83,  207 => 77,  205 => 76,  191 => 68,  188 => 67,  172 => 58,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  200 => 73,  186 => 66,  180 => 86,  177 => 85,  174 => 84,  167 => 56,  162 => 80,  159 => 79,  146 => 46,  135 => 69,  122 => 59,  108 => 50,  105 => 27,  97 => 43,  51 => 22,  38 => 6,  138 => 42,  95 => 23,  75 => 33,  47 => 13,  21 => 1,  173 => 48,  165 => 43,  144 => 72,  132 => 26,  124 => 24,  111 => 43,  84 => 39,  54 => 23,  299 => 125,  293 => 121,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 86,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 96,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 63,  175 => 59,  158 => 57,  107 => 42,  101 => 25,  80 => 19,  63 => 23,  36 => 7,  156 => 58,  148 => 55,  142 => 50,  140 => 71,  127 => 45,  123 => 44,  115 => 55,  110 => 42,  85 => 28,  65 => 14,  59 => 12,  45 => 11,  26 => 3,  89 => 40,  82 => 19,  223 => 96,  214 => 90,  210 => 78,  203 => 93,  199 => 83,  194 => 69,  192 => 90,  189 => 78,  187 => 77,  184 => 76,  178 => 53,  170 => 47,  157 => 78,  152 => 48,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 29,  112 => 43,  102 => 36,  98 => 24,  76 => 24,  73 => 41,  69 => 31,  32 => 5,  42 => 10,  23 => 29,  103 => 41,  91 => 41,  74 => 17,  70 => 19,  66 => 21,  56 => 17,  25 => 3,  22 => 2,  17 => 1,  92 => 33,  86 => 20,  77 => 18,  57 => 13,  29 => 4,  24 => 9,  19 => 2,  68 => 15,  61 => 19,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 35,  118 => 46,  113 => 28,  104 => 9,  99 => 33,  94 => 21,  81 => 18,  78 => 28,  72 => 32,  64 => 28,  53 => 9,  50 => 14,  48 => 10,  41 => 11,  39 => 10,  35 => 5,  33 => 5,  30 => 5,  27 => 3,  182 => 70,  176 => 71,  169 => 57,  163 => 54,  160 => 53,  155 => 56,  151 => 54,  149 => 47,  141 => 43,  136 => 27,  134 => 50,  131 => 31,  128 => 39,  120 => 22,  117 => 21,  114 => 31,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 54,  90 => 21,  87 => 31,  83 => 38,  79 => 44,  71 => 16,  62 => 17,  58 => 25,  55 => 16,  52 => 21,  49 => 13,  46 => 20,  43 => 19,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
