<?php

/* ::backendBase.html.twig */
class __TwigTemplate_29c3573130d93e2040561f200ead8b20 extends Twig_Template
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
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
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
        // line 21
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 28
        $this->displayBlock('navigation', $context, $blocks);
        // line 39
        echo "                </div>

                <hgroup>
                    <h4>";
        // line 42
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h4>
                    <h5>";
        // line 43
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h5>
                </hgroup>
            </header>
            <aside class=\"sidebar\">
                ";
        // line 47
        $this->displayBlock('sidebar', $context, $blocks);
        // line 48
        echo "            </aside>
            <section class=\"main-col\">
                ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "            </section>


            <div id=\"footer\">
                ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "            </div>
        </section>

        ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/backendScreen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

            <script  src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" language=\"javascript\"></script>
            <script  src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" language=\"javascript\"></script>
        ";
    }

    // line 28
    public function block_navigation($context, array $blocks = array())
    {
        // line 29
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">主页</a></li>
                                <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_about"), "html", null, true);
        echo "\">关于</a></li>
                                <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_contact"), "html", null, true);
        echo "\">联系我们</a></li>
                                <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_search"), "html", null, true);
        echo "\">书籍搜索</a></li>
                                <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_homepage"), "html", null, true);
        echo "\">admin</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 42
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_homepage"), "html", null, true);
        echo "\">图书管理系统</a>";
    }

    // line 43
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "Books management system in symfony2";
    }

    // line 47
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        // line 56
        echo "                    Symfony2 mylib - created by <a href=\"https://www.github.com/yinlianwei/\">Evenvi</a>
                ";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::backendBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 61,  200 => 56,  197 => 55,  192 => 50,  187 => 47,  181 => 43,  173 => 42,  165 => 35,  161 => 34,  157 => 33,  153 => 32,  149 => 31,  145 => 29,  142 => 28,  136 => 19,  132 => 18,  127 => 16,  123 => 15,  119 => 14,  115 => 13,  111 => 12,  107 => 10,  104 => 9,  98 => 5,  93 => 62,  91 => 61,  86 => 58,  84 => 55,  78 => 51,  76 => 50,  72 => 48,  70 => 47,  63 => 43,  59 => 42,  54 => 39,  52 => 28,  41 => 21,  39 => 9,  32 => 5,  26 => 1,);
    }
}
