<?php

/* ::base.html.twig */
class __TwigTemplate_63cdbc3c31629c4259d6b6a022beabfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!-​​-[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 34
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 35
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "            </div>
        </section>

        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        // line 22
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_about"), "html", null, true);
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
                                <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_manage"), "html", null, true);
        echo "\">Manage</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">mylib</a>";
    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">Books management system in symfony2</a>";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "                    Symfony2 mylib - created by <a href=\"https://www.github.com/yinlianwei/\">Evenvi</a>
                ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 48,  165 => 43,  144 => 34,  132 => 26,  124 => 24,  111 => 12,  84 => 47,  54 => 31,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 10,  101 => 34,  80 => 24,  63 => 35,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 34,  45 => 9,  26 => 1,  89 => 20,  82 => 19,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 53,  170 => 47,  157 => 61,  152 => 35,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 5,  76 => 24,  73 => 41,  69 => 19,  32 => 5,  42 => 12,  23 => 4,  103 => 24,  91 => 53,  74 => 20,  70 => 19,  66 => 18,  56 => 16,  25 => 4,  22 => 2,  17 => 1,  92 => 39,  86 => 50,  77 => 43,  57 => 22,  29 => 5,  24 => 6,  19 => 2,  68 => 20,  61 => 24,  44 => 10,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 9,  99 => 33,  94 => 21,  81 => 18,  78 => 21,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 10,  41 => 14,  39 => 9,  35 => 6,  33 => 5,  30 => 5,  27 => 4,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 40,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 27,  134 => 50,  131 => 43,  128 => 25,  120 => 22,  117 => 21,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 54,  90 => 28,  87 => 19,  83 => 23,  79 => 44,  71 => 40,  62 => 17,  58 => 23,  55 => 14,  52 => 21,  49 => 14,  46 => 11,  43 => 10,  40 => 7,  37 => 9,  34 => 5,  31 => 4,  28 => 7,);
    }
}
