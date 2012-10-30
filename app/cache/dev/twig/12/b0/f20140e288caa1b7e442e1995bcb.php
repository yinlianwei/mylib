<?php

/* ::base.html.twig */
class __TwigTemplate_12b0f20140e288caa1b7e442e1995bcb extends Twig_Template
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
        // line 22
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 29
        $this->displayBlock('navigation', $context, $blocks);
        // line 40
        echo "                </div>

                <hgroup>
                    <h4>";
        // line 43
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h4>
                    <h5>";
        // line 44
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h5>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 52
        $this->displayBlock('sidebar', $context, $blocks);
        // line 53
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "            </div>
        </section>

        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-dropdown.js"), "html", null, true);
        echo "\" language=\"javascript\"></script>
            <script  src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" language=\"javascript\"></script>
            <script  src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" language=\"javascript\"></script>
        ";
    }

    // line 29
    public function block_navigation($context, array $blocks = array())
    {
        // line 30
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">主页</a></li>
                                <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_about"), "html", null, true);
        echo "\">关于</a></li>
                                <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_contact"), "html", null, true);
        echo "\">联系我们</a></li>
                                <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_search"), "html", null, true);
        echo "\">书籍搜索</a></li>
                                <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_homepage"), "html", null, true);
        echo "\">admin</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 43
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">网上图书馆</a>";
    }

    // line 44
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">Books management system in symfony2</a>";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "                    Symfony2 mylib - created by <a href=\"https://www.github.com/yinlianwei/\">Evenvi</a>
                ";
    }

    // line 62
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
        return array (  211 => 62,  206 => 57,  203 => 56,  198 => 52,  193 => 49,  185 => 44,  177 => 43,  169 => 36,  165 => 35,  161 => 34,  157 => 33,  153 => 32,  149 => 30,  146 => 29,  140 => 20,  136 => 19,  132 => 18,  127 => 16,  123 => 15,  119 => 14,  115 => 13,  111 => 12,  107 => 10,  104 => 9,  98 => 5,  93 => 63,  91 => 62,  86 => 59,  84 => 56,  79 => 53,  77 => 52,  73 => 50,  71 => 49,  63 => 44,  59 => 43,  54 => 40,  52 => 29,  41 => 22,  39 => 9,  32 => 5,  26 => 1,);
    }
}
