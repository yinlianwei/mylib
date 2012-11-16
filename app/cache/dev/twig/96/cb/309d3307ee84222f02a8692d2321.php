<?php

/* MylibberBackendBundle:Ebook:manage.html.twig */
class __TwigTemplate_96cb309d3307ee84222f02a8692d2321 extends Twig_Template
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
  <h4>电子书管理</h4></div>
  </div>
\t\t \t";
        // line 7
        $context["i"] = 0;
        // line 8
        echo "\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th><span class=\"label label-info\">电子书名:</span></th>
\t\t\t<th><span class=\"label label-info\">删除:</span></th>
\t\t\t<th><span class=\"label label-info\">下载链接:</span></th>
\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ebooks"));
        foreach ($context['_seq'] as $context["_key"] => $context["ebook"]) {
            // line 15
            echo "\t    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 16
            echo "\t            <tr>
\t            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ebook"), "name"), "html", null, true);
            echo "</td>
\t            <td><a href=\" \"><span class=\"label label-important\">删除</span></a></td>
\t            <td><a href=\" \"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ebook"), "path"), "html", null, true);
            echo "\"><span class=\"label label-success\">下载</span></a></td>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ebook'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "\t</table>
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Ebook:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  63 => 20,  58 => 18,  54 => 17,  51 => 16,  48 => 15,  44 => 14,  36 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
