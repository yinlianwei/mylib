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
<html lang=\"en\">
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
        // line 25
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 32
        $this->displayBlock('navigation', $context, $blocks);
        // line 41
        echo "                </div>

                <hgroup>
                    <h4>";
        // line 44
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h4>
                    <h5>";
        // line 45
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h5>
                </hgroup>
            </header>
            <aside class=\"sidebar\">
                ";
        // line 49
        $this->displayBlock('sidebar', $context, $blocks);
        // line 50
        echo "            </aside>
            <section class=\"main-col\">
                ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "            </section>


            <div id=\"footer\">
                ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 60
        echo "            </div>
        </section>

        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
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
        echo "
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/backendScreen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

            <script  src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" language=\"javascript\" type=\"text/javascript\"></script>
            <script  src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" language=\"javascript\" type=\"text/javascript\"></script>
            <script  src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-alert.js"), "html", null, true);
        echo "\" language=\"javascript\" type=\"text/javascript\"></script>
            <script  src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-modal.js"), "html", null, true);
        echo "\" language=\"javascript\" type=\"text/javascript\"></script>
            <script  src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" language=\"javascript\" type=\"text/javascript\"></script>
            <script  src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.2.min.js"), "html", null, true);
        echo "\" language=\"javascript\" type=\"text/javascript\"></script>
            <script  src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-popover.js"), "html", null, true);
        echo "\" language=\"javascript\" type=\"text/javascript\"></script>
        ";
    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        // line 33
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">主页</a></li>
                                <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_about"), "html", null, true);
        echo "\">关于</a></li>
                                <li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_homepage"), "html", null, true);
        echo "\">管理</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 44
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_homepage"), "html", null, true);
        echo "\">图书管理系统</a>";
    }

    // line 45
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "Books management system in symfony2";
    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "                    Symfony2 mylib - created by <a href=\"https://www.github.com/yinlianwei/\">Evenvi</a>
                ";
    }

    // line 63
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
        return array (  216 => 63,  211 => 58,  208 => 57,  203 => 52,  198 => 49,  192 => 45,  184 => 44,  176 => 37,  172 => 36,  168 => 35,  164 => 33,  161 => 32,  155 => 23,  151 => 22,  147 => 21,  143 => 20,  139 => 19,  135 => 18,  131 => 17,  126 => 15,  122 => 14,  118 => 13,  114 => 12,  110 => 11,  107 => 10,  104 => 9,  98 => 5,  93 => 64,  91 => 63,  86 => 60,  84 => 57,  78 => 53,  76 => 52,  72 => 50,  70 => 49,  63 => 45,  59 => 44,  54 => 41,  52 => 32,  41 => 25,  39 => 9,  32 => 5,  26 => 1,);
    }
}
