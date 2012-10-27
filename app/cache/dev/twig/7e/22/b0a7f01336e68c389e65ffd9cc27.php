<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_7e22b0a7f01336e68c389e65ffd9cc27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ($this->getContext($context, "error")) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_check"), "html", null, true);
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <input type=\"submit\" class=\"symfony-button-grey\" value=\"LOGIN\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  38 => 6,  138 => 61,  95 => 45,  75 => 27,  47 => 13,  21 => 1,  173 => 48,  165 => 43,  144 => 34,  132 => 26,  124 => 24,  111 => 43,  84 => 39,  54 => 31,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 42,  101 => 34,  80 => 37,  63 => 23,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 44,  110 => 42,  85 => 28,  65 => 19,  59 => 22,  45 => 9,  26 => 3,  89 => 20,  82 => 19,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 53,  170 => 47,  157 => 61,  152 => 35,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 29,  112 => 43,  102 => 36,  98 => 5,  76 => 24,  73 => 41,  69 => 19,  32 => 5,  42 => 12,  23 => 29,  103 => 41,  91 => 53,  74 => 20,  70 => 19,  66 => 21,  56 => 17,  25 => 3,  22 => 2,  17 => 1,  92 => 33,  86 => 41,  77 => 26,  57 => 13,  29 => 4,  24 => 9,  19 => 2,  68 => 22,  61 => 19,  44 => 10,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 33,  118 => 46,  113 => 28,  104 => 9,  99 => 33,  94 => 21,  81 => 18,  78 => 28,  72 => 24,  64 => 15,  53 => 15,  50 => 14,  48 => 10,  41 => 11,  39 => 10,  35 => 5,  33 => 5,  30 => 5,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 40,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 27,  134 => 50,  131 => 31,  128 => 30,  120 => 22,  117 => 21,  114 => 35,  109 => 38,  106 => 37,  100 => 47,  96 => 34,  93 => 54,  90 => 43,  87 => 31,  83 => 29,  79 => 44,  71 => 40,  62 => 17,  58 => 23,  55 => 12,  52 => 21,  49 => 14,  46 => 9,  43 => 8,  40 => 7,  37 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
