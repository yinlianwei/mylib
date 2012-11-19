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
        echo " - mylib</title>
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
                </ul>
                <ul class=\"nav pull-right\">
                    <li><a href=\"";
        // line 38
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
        // line 46
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h5>
                    <h4>";
        // line 47
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h4>
                </hgroup>
            </header>
            <aside class=\"sidebar\">
                ";
        // line 51
        $this->displayBlock('sidebar', $context, $blocks);
        // line 52
        echo "            </aside>
            <section class=\"main-col\">
                ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "            </section>


            <div id=\"footer\">
                ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "            </div>
        </section>

        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "mylib";
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

    // line 46
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">Books Management System in Symfony2</a>";
    }

    // line 47
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\"> &nbsp;</a>";
    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "                    Symfony2 mylib - created by <a href=\"https://www.github.com/yinlianwei/\">Evenvi</a>
                ";
    }

    // line 65
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
        return array (  210 => 65,  205 => 60,  202 => 59,  197 => 54,  192 => 51,  184 => 47,  176 => 46,  170 => 23,  166 => 22,  162 => 21,  158 => 20,  154 => 19,  150 => 18,  146 => 17,  141 => 15,  137 => 14,  133 => 13,  129 => 12,  125 => 11,  122 => 10,  119 => 9,  113 => 5,  108 => 66,  106 => 65,  101 => 62,  99 => 59,  93 => 55,  91 => 54,  87 => 52,  85 => 51,  78 => 47,  74 => 46,  63 => 38,  56 => 34,  51 => 32,  40 => 25,  38 => 9,  31 => 5,  25 => 1,);
    }
}
