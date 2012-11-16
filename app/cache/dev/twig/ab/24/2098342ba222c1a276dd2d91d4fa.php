<?php

/* ::backendBase.html.twig */
class __TwigTemplate_ab242098342ba222c1a276dd2d91d4fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'blog_title' => array($this, 'block_blog_title'),
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
        <div class=\"navbar\">
          <div class=\"navbar-inner\">
            <div class=\"container\" style=\"width:980px\">
              <ul class=\"nav\">
                <a class=\"brand\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">网上图书馆</a></a>
                  <li class=\"active\">
                    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">首页</a>
                  </li>
                  <li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_about"), "html", null, true);
        echo "\">关于</a></li>
                </ul>
                <ul class=\"nav pull-right\">
                    <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_homepage"), "html", null, true);
        echo "\">管理</a></li>
                  </ul>
            </div>
          </div>
        </div>
        <section id=\"wrapper\">
            <header id=\"header\">
                <hgroup>
                    <h5>";
        // line 47
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h5>
                    <h4>";
        // line 48
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h4>
                </hgroup>
            </header>
            <aside class=\"sidebar\">
                ";
        // line 52
        $this->displayBlock('sidebar', $context, $blocks);
        // line 53
        echo "            </aside>
            <section class=\"main-col\">
                ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "            </section>


            <div id=\"footer\">
                ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "            </div>
        </section>

        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
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

    // line 47
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">Books Management System in Symfony2</a>";
    }

    // line 48
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\"> &nbsp;</a>";
    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "                    Symfony2 mylib - created by <a href=\"https://www.github.com/yinlianwei/\">Evenvi</a>
                ";
    }

    // line 66
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
        return array (  214 => 66,  209 => 61,  206 => 60,  201 => 55,  196 => 52,  188 => 48,  180 => 47,  174 => 23,  170 => 22,  166 => 21,  162 => 20,  158 => 19,  154 => 18,  150 => 17,  145 => 15,  141 => 14,  137 => 13,  133 => 12,  129 => 11,  126 => 10,  123 => 9,  117 => 5,  112 => 67,  110 => 66,  105 => 63,  103 => 60,  97 => 56,  95 => 55,  91 => 53,  89 => 52,  82 => 48,  78 => 47,  61 => 36,  56 => 34,  40 => 25,  38 => 9,  31 => 5,  25 => 1,  116 => 58,  108 => 53,  100 => 48,  88 => 39,  80 => 34,  67 => 39,  59 => 19,  51 => 32,  44 => 9,  41 => 8,  35 => 5,  30 => 4,  27 => 3,);
    }
}
