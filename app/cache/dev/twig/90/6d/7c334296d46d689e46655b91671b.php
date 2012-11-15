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
        return array (  42 => 13,  33 => 7,  29 => 6,  24 => 3,  22 => 2,  17 => 1,  200 => 57,  195 => 52,  192 => 51,  187 => 47,  182 => 44,  174 => 39,  166 => 38,  158 => 31,  154 => 30,  150 => 29,  146 => 27,  143 => 26,  137 => 17,  133 => 16,  129 => 15,  124 => 13,  120 => 12,  116 => 11,  112 => 10,  105 => 8,  102 => 7,  96 => 5,  91 => 58,  89 => 57,  84 => 54,  82 => 51,  75 => 47,  71 => 45,  69 => 44,  57 => 38,  52 => 35,  50 => 26,  37 => 7,  32 => 5,  26 => 1,  44 => 10,  41 => 9,  108 => 9,  104 => 30,  101 => 29,  95 => 25,  86 => 22,  81 => 20,  77 => 48,  73 => 18,  65 => 17,  61 => 39,  49 => 11,  43 => 10,  39 => 19,  35 => 6,  30 => 5,  27 => 4,);
    }
}
