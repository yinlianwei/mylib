<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_fe56e4fb6c14d9223786445f488dc105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"search clearfix\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/search.png"), "html", null, true);
        echo "\" />
        Search
    </h3>
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search"), "html", null, true);
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "ip"), "html", null, true);
        echo "\" />
        <div class=\"clear_fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((($this->getContext($context, "m") == $this->getContext($context, "method"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "m"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "        </select>
        <div class=\"clear_fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\" />
        <div class=\"clear_fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" />
        <div class=\"clear_fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 26
            echo "                <option";
            echo ((($this->getContext($context, "l") == $this->getContext($context, "limit"))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "l"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "        </select>

        <button type=\"submit\">
            <span class=\"border_l\">
                <span class=\"border_r\">
                    <span class=\"btn_bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear_fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 236,  258 => 235,  255 => 234,  168 => 60,  88 => 28,  60 => 25,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  236 => 218,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  133 => 47,  126 => 45,  67 => 20,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  331 => 156,  328 => 140,  325 => 139,  323 => 150,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  250 => 105,  245 => 97,  238 => 219,  232 => 89,  229 => 88,  226 => 89,  224 => 86,  219 => 83,  207 => 73,  205 => 76,  191 => 68,  188 => 67,  172 => 67,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  200 => 73,  186 => 67,  180 => 64,  177 => 85,  174 => 61,  167 => 56,  162 => 63,  159 => 79,  146 => 58,  135 => 69,  122 => 59,  108 => 42,  105 => 27,  97 => 43,  51 => 22,  38 => 6,  138 => 49,  95 => 23,  75 => 24,  47 => 17,  21 => 3,  173 => 48,  165 => 64,  144 => 72,  132 => 54,  124 => 24,  111 => 40,  84 => 29,  54 => 15,  299 => 125,  293 => 133,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 248,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 81,  202 => 71,  196 => 69,  183 => 68,  181 => 63,  175 => 59,  158 => 59,  107 => 42,  101 => 25,  80 => 19,  63 => 23,  36 => 6,  156 => 56,  148 => 55,  142 => 50,  140 => 71,  127 => 45,  123 => 44,  115 => 55,  110 => 42,  85 => 34,  65 => 21,  59 => 18,  45 => 9,  26 => 3,  89 => 35,  82 => 25,  223 => 88,  214 => 90,  210 => 78,  203 => 71,  199 => 83,  194 => 69,  192 => 90,  189 => 70,  187 => 77,  184 => 76,  178 => 53,  170 => 64,  157 => 78,  152 => 54,  145 => 58,  130 => 47,  125 => 52,  119 => 45,  116 => 29,  112 => 43,  102 => 35,  98 => 35,  76 => 26,  73 => 23,  69 => 20,  32 => 8,  42 => 13,  23 => 29,  103 => 41,  91 => 31,  74 => 17,  70 => 22,  66 => 19,  56 => 14,  25 => 4,  22 => 3,  17 => 1,  92 => 33,  86 => 20,  77 => 23,  57 => 13,  29 => 6,  24 => 3,  19 => 2,  68 => 24,  61 => 16,  44 => 12,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 57,  137 => 45,  129 => 46,  121 => 35,  118 => 50,  113 => 44,  104 => 9,  99 => 33,  94 => 21,  81 => 28,  78 => 32,  72 => 25,  64 => 19,  53 => 15,  50 => 18,  48 => 10,  41 => 11,  39 => 12,  35 => 5,  33 => 9,  30 => 5,  27 => 6,  182 => 70,  176 => 62,  169 => 66,  163 => 60,  160 => 53,  155 => 56,  151 => 62,  149 => 53,  141 => 56,  136 => 55,  134 => 50,  131 => 31,  128 => 53,  120 => 51,  117 => 45,  114 => 41,  109 => 38,  106 => 41,  100 => 34,  96 => 32,  93 => 31,  90 => 21,  87 => 28,  83 => 38,  79 => 24,  71 => 16,  62 => 17,  58 => 15,  55 => 16,  52 => 19,  49 => 12,  46 => 11,  43 => 13,  40 => 11,  37 => 10,  34 => 5,  31 => 10,  28 => 3,);
    }
}
