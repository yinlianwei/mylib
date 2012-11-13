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
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 35
        echo "                </div>

                <hgroup>
                    <h4>";
        // line 38
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h4>
                    <h5>";
        // line 39
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h5>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 47
        $this->displayBlock('sidebar', $context, $blocks);
        // line 48
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "            </div>
        </section>

        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

            <script  src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-dropdown.js"), "html", null, true);
        echo "\" language=\"javascript\"></script>
            <script  src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" language=\"javascript\"></script>
            <script  src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" language=\"javascript\"></script>
        ";
    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        // line 27
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">主页</a></li>
                                <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_about"), "html", null, true);
        echo "\">关于</a></li>
                                <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_homepage"), "html", null, true);
        echo "\">管理</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 38
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">网上图书馆</a>";
    }

    // line 39
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">Books management system in symfony2</a>";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    // line 47
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "                    Symfony2 mylib - created by <a href=\"https://www.github.com/yinlianwei/\">Evenvi</a>
                ";
    }

    // line 57
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
        return array (  200 => 57,  195 => 52,  192 => 51,  187 => 47,  182 => 44,  174 => 39,  166 => 38,  158 => 31,  154 => 30,  150 => 29,  146 => 27,  143 => 26,  137 => 17,  133 => 16,  129 => 15,  124 => 13,  120 => 12,  116 => 11,  112 => 10,  108 => 9,  105 => 8,  102 => 7,  96 => 5,  91 => 58,  89 => 57,  84 => 54,  82 => 51,  77 => 48,  75 => 47,  71 => 45,  69 => 44,  61 => 39,  57 => 38,  52 => 35,  50 => 26,  39 => 19,  37 => 7,  32 => 5,  26 => 1,);
    }
}
