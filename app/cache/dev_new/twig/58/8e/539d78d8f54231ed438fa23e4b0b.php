<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_588e539d78d8f54231ed438fa23e4b0b extends Twig_Template
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
        return array (  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 156,  323 => 150,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 105,  236 => 97,  226 => 89,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  133 => 47,  126 => 45,  67 => 20,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  200 => 92,  177 => 85,  167 => 82,  159 => 79,  135 => 69,  122 => 59,  105 => 49,  97 => 43,  207 => 73,  180 => 69,  174 => 84,  168 => 60,  146 => 52,  88 => 28,  186 => 87,  172 => 67,  162 => 80,  108 => 39,  51 => 22,  95 => 45,  75 => 33,  47 => 13,  21 => 1,  138 => 49,  60 => 15,  38 => 6,  173 => 48,  165 => 64,  144 => 72,  132 => 54,  124 => 24,  111 => 40,  84 => 28,  54 => 23,  299 => 100,  293 => 133,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 81,  202 => 71,  196 => 74,  183 => 68,  181 => 60,  175 => 58,  158 => 59,  107 => 5,  101 => 34,  80 => 37,  63 => 23,  36 => 7,  156 => 56,  148 => 55,  142 => 50,  140 => 71,  127 => 45,  123 => 44,  115 => 55,  110 => 42,  85 => 34,  65 => 23,  59 => 22,  45 => 11,  89 => 40,  82 => 25,  103 => 41,  91 => 31,  74 => 20,  70 => 22,  66 => 19,  42 => 10,  92 => 44,  86 => 39,  77 => 23,  57 => 13,  223 => 88,  214 => 90,  210 => 88,  203 => 93,  199 => 83,  194 => 80,  192 => 90,  189 => 70,  187 => 77,  184 => 76,  178 => 53,  170 => 64,  157 => 78,  152 => 54,  145 => 58,  130 => 47,  125 => 52,  119 => 30,  116 => 29,  112 => 43,  102 => 36,  98 => 35,  76 => 24,  73 => 23,  69 => 31,  56 => 16,  32 => 5,  25 => 3,  19 => 2,  23 => 29,  26 => 3,  22 => 3,  29 => 4,  24 => 9,  17 => 1,  68 => 24,  61 => 16,  44 => 12,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 57,  137 => 45,  129 => 46,  121 => 33,  118 => 50,  113 => 44,  104 => 9,  99 => 33,  94 => 21,  81 => 27,  78 => 32,  72 => 32,  64 => 19,  53 => 13,  50 => 14,  48 => 10,  41 => 7,  39 => 8,  35 => 5,  33 => 5,  30 => 5,  27 => 3,  182 => 70,  176 => 62,  169 => 83,  163 => 60,  160 => 40,  155 => 56,  151 => 62,  149 => 53,  141 => 56,  136 => 55,  134 => 50,  131 => 31,  128 => 53,  120 => 51,  117 => 43,  114 => 41,  109 => 38,  106 => 41,  100 => 34,  96 => 32,  93 => 31,  90 => 43,  87 => 29,  83 => 38,  79 => 24,  71 => 40,  62 => 17,  58 => 16,  55 => 16,  52 => 13,  49 => 13,  46 => 11,  43 => 19,  40 => 8,  37 => 17,  34 => 16,  31 => 4,  28 => 3,);
    }
}
