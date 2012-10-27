<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_4fe324a81ed2ceef83281ae9dd1ddd46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
        ";
        // line 30
        if ($this->getContext($context, "required")) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  18 => 1,  260 => 236,  258 => 235,  255 => 234,  168 => 60,  88 => 27,  60 => 14,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  236 => 218,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  133 => 47,  126 => 45,  67 => 15,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  331 => 156,  328 => 140,  325 => 139,  323 => 150,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  250 => 105,  245 => 97,  238 => 219,  232 => 89,  229 => 88,  226 => 89,  224 => 86,  219 => 83,  207 => 73,  205 => 76,  191 => 68,  188 => 67,  172 => 67,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  200 => 73,  186 => 67,  180 => 64,  177 => 85,  174 => 61,  167 => 56,  162 => 63,  159 => 79,  146 => 58,  135 => 69,  122 => 59,  108 => 38,  105 => 37,  97 => 43,  51 => 17,  38 => 11,  138 => 49,  95 => 23,  75 => 25,  47 => 12,  21 => 3,  173 => 48,  165 => 64,  144 => 72,  132 => 54,  124 => 24,  111 => 40,  84 => 29,  54 => 12,  299 => 125,  293 => 133,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 248,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 81,  202 => 71,  196 => 69,  183 => 68,  181 => 63,  175 => 59,  158 => 59,  107 => 42,  101 => 25,  80 => 26,  63 => 17,  36 => 7,  156 => 56,  148 => 55,  142 => 50,  140 => 71,  127 => 45,  123 => 44,  115 => 55,  110 => 39,  85 => 26,  65 => 16,  59 => 18,  45 => 15,  26 => 3,  89 => 34,  82 => 25,  223 => 88,  214 => 90,  210 => 78,  203 => 71,  199 => 83,  194 => 69,  192 => 90,  189 => 70,  187 => 77,  184 => 76,  178 => 53,  170 => 64,  157 => 78,  152 => 54,  145 => 58,  130 => 47,  125 => 52,  119 => 45,  116 => 29,  112 => 43,  102 => 31,  98 => 36,  76 => 24,  73 => 24,  69 => 23,  32 => 5,  42 => 11,  23 => 29,  103 => 41,  91 => 28,  74 => 17,  70 => 18,  66 => 19,  56 => 14,  25 => 5,  22 => 3,  17 => 1,  92 => 33,  86 => 30,  77 => 23,  57 => 13,  29 => 4,  24 => 3,  19 => 1,  68 => 13,  61 => 6,  44 => 34,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 57,  137 => 45,  129 => 46,  121 => 35,  118 => 50,  113 => 40,  104 => 9,  99 => 33,  94 => 35,  81 => 28,  78 => 32,  72 => 22,  64 => 19,  53 => 15,  50 => 18,  48 => 16,  41 => 12,  39 => 7,  35 => 7,  33 => 7,  30 => 4,  27 => 3,  182 => 70,  176 => 62,  169 => 66,  163 => 60,  160 => 53,  155 => 56,  151 => 62,  149 => 53,  141 => 56,  136 => 55,  134 => 50,  131 => 31,  128 => 53,  120 => 51,  117 => 45,  114 => 41,  109 => 38,  106 => 33,  100 => 30,  96 => 29,  93 => 34,  90 => 31,  87 => 30,  83 => 38,  79 => 24,  71 => 23,  62 => 11,  58 => 20,  55 => 19,  52 => 17,  49 => 16,  46 => 11,  43 => 8,  40 => 11,  37 => 10,  34 => 5,  31 => 4,  28 => 3,);
    }
}
