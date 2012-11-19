<?php

/* ::base.html.twig */
class __TwigTemplate_9e37b7509f582de1f80d60f63868c0da extends Twig_Template
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
        echo " - mylib</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
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
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">网上图书馆</a></a>
                  <li class=\"active\">
                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">首页</a>
                  </li>
                  <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibberMulibBUndle_ebook"), "html", null, true);
        echo "\">电子书</a></li>
                  <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_about"), "html", null, true);
        echo "\">关于</a></li>
                  </ul>
                  <ul class=\"nav pull-right\">
                    <li><a href=\"";
        // line 34
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
        // line 42
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h5>
                    <h4>";
        // line 43
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h4>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 51
        $this->displayBlock('sidebar', $context, $blocks);
        // line 52
        echo "            </aside>

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
        echo "mylib";
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

    // line 42
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">Books management system in symfony2</a>";
    }

    // line 43
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\"> &nbsp;</a>";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
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
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 61,  195 => 56,  192 => 55,  187 => 51,  182 => 48,  174 => 43,  166 => 42,  160 => 17,  156 => 16,  152 => 15,  147 => 13,  143 => 12,  139 => 11,  135 => 10,  131 => 9,  128 => 8,  125 => 7,  119 => 5,  114 => 62,  112 => 61,  107 => 58,  105 => 55,  100 => 52,  98 => 51,  94 => 49,  92 => 48,  84 => 43,  80 => 42,  69 => 34,  63 => 31,  59 => 30,  54 => 28,  49 => 26,  38 => 19,  36 => 7,  31 => 5,  25 => 1,);
    }
}
