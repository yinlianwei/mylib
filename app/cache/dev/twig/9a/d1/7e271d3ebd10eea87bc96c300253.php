<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9ad17e271d3ebd10eea87bc96c300253 extends Twig_Template
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
        echo "/*
";
        // line 2
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 5,  103 => 24,  91 => 20,  74 => 16,  70 => 14,  66 => 12,  56 => 9,  25 => 4,  22 => 3,  17 => 1,  92 => 39,  86 => 6,  77 => 17,  57 => 22,  29 => 6,  24 => 3,  19 => 1,  68 => 14,  61 => 9,  44 => 7,  20 => 2,  161 => 32,  153 => 50,  150 => 49,  147 => 48,  143 => 46,  137 => 45,  129 => 42,  121 => 41,  118 => 40,  113 => 39,  104 => 36,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 22,  64 => 20,  53 => 16,  50 => 15,  48 => 8,  41 => 9,  39 => 7,  35 => 8,  33 => 4,  30 => 9,  27 => 6,  182 => 70,  176 => 66,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 53,  141 => 48,  136 => 45,  134 => 44,  131 => 43,  128 => 42,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 22,  93 => 28,  90 => 29,  87 => 19,  83 => 24,  79 => 40,  71 => 19,  62 => 19,  58 => 8,  55 => 12,  52 => 6,  49 => 10,  46 => 14,  43 => 8,  40 => 12,  37 => 6,  34 => 5,  31 => 5,  28 => 3,);
    }
}
