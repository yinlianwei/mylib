<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_906d7c334296d46d689e46655b91671b extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        Sfjs.load(
            'sfwdt";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  33 => 7,  29 => 6,  24 => 3,  22 => 2,  17 => 1,  214 => 66,  209 => 61,  206 => 60,  201 => 55,  196 => 52,  188 => 48,  180 => 47,  174 => 23,  170 => 22,  166 => 21,  162 => 20,  158 => 19,  154 => 18,  150 => 17,  145 => 15,  141 => 14,  137 => 13,  133 => 12,  129 => 11,  126 => 10,  123 => 9,  117 => 5,  112 => 67,  110 => 66,  105 => 63,  103 => 60,  97 => 56,  95 => 55,  91 => 53,  89 => 52,  82 => 48,  78 => 47,  61 => 36,  56 => 34,  40 => 25,  38 => 9,  31 => 5,  25 => 1,  116 => 58,  108 => 53,  100 => 48,  88 => 39,  80 => 34,  67 => 39,  59 => 19,  51 => 32,  44 => 9,  41 => 8,  35 => 5,  30 => 4,  27 => 3,);
    }
}
