<?php

/* MylibberBackendBundle:Book:add.html.twig */
class __TwigTemplate_76208610a2f58675c9292b2895396221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MylibberBackendBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MylibberBackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"alert alert-info\">
  <h4>书籍录入</h4></div>
\t<form method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_getBookInfo"), "html", null, true);
        echo "\">
\t    <input name=\"bookIsbn\" />
\t    <input type=submit value=\"自动获取\" />
\t    <div class=\"alert alert-success\" style=\"width:300px;\" >
\t\t\t输入ISBN: [ 9787111126768 ] :点击从自动查找，获取该图书详细参考信息;
\t\t</div>
\t\t
\t</form>
\t\t<form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addnew"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"bloger\">
\t\t   \t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo " 
    \t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bookIsbn"), 'row');
        echo "
    \t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bookName"), 'row');
        echo "
    \t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "categoryName"), 'row');
        echo "
    \t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bookAuthor"), 'row');
        echo "
    \t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bookPrice"), 'row');
        echo "
    \t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bookPic"), 'row');
        echo "
    \t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bookContent"), 'row');
        echo "
    \t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bookOwner"), 'row');
        echo "
    \t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "bookBorr"), 'row');
        echo "
\t\t    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo " 
\t\t    <input type=\"submit\" /> 
\t\t</form>
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Book:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  44 => 14,  33 => 6,  29 => 4,  26 => 3,);
    }
}
