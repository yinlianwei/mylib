<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_0e8c712fb8934fd6d67b5474a0c09cb3 extends Twig_Template
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
        return array (  42 => 13,  29 => 6,  24 => 3,  22 => 2,  17 => 1,  213 => 63,  208 => 58,  205 => 57,  200 => 52,  195 => 49,  189 => 45,  181 => 44,  173 => 37,  169 => 36,  165 => 35,  161 => 33,  158 => 32,  152 => 23,  148 => 22,  144 => 21,  140 => 20,  136 => 19,  132 => 18,  127 => 16,  123 => 15,  119 => 14,  115 => 13,  111 => 12,  107 => 10,  104 => 9,  98 => 5,  93 => 64,  91 => 63,  84 => 57,  76 => 52,  72 => 50,  70 => 49,  63 => 45,  54 => 41,  52 => 32,  39 => 9,  32 => 5,  26 => 1,  94 => 42,  86 => 60,  78 => 53,  67 => 24,  59 => 44,  51 => 14,  44 => 9,  41 => 25,  35 => 5,  30 => 4,  36 => 4,  33 => 7,  27 => 3,);
    }
}
