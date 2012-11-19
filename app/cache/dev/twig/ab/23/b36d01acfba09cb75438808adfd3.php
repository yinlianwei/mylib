<?php

/* MylibberMylibBundle:Page:ebook.html.twig */
class __TwigTemplate_ab23b36d01acfba09cb75438808adfd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MylibberMylibBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MylibberMylibBundle::layout.html.twig";
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
  <h4>电子书</h4></div>
  </div>
\t\t \t";
        // line 7
        $context["i"] = 0;
        // line 8
        echo "\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "ebooks"));
        foreach ($context['_seq'] as $context["_key"] => $context["ebook"]) {
            // line 10
            echo "\t    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 11
            echo "\t            <tr>
\t            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ebook"), "name"), "html", null, true);
            echo "</td>
\t            <td><a href=\" \"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ebook"), "path"), "html", null, true);
            echo "\"><span class=\"label label-success\">下载</span></a></td>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ebook'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "\t</table>
";
    }

    // line 19
    public function block_sidebar($context, array $blocks = array())
    {
        // line 20
        echo "<span class=\"label label-info\">书籍检索</span>
\t<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_searchEbook"), "html", null, true);
        echo "\" method=\"get\" name=\"f\" onsubmit=\"return chkForm(this)\" id=\"f\">
\t\t<tbody>
\t\t\t<tr>
\t        \t<td colspan=\"2\">
\t       \t\t\t<input type=\"text\" name=\"strText\" id=\"strText\" value=\"\">&nbsp;&nbsp;
\t      \t\t</td>
\t      \t</tr>
\t      \t<tr>
\t        \t<td align=\"right\">请选择检索类型：</td>
\t        \t<td>
\t          \t\t<select class=\"option\" name=\"SearchType\" size=\"1\" style=\"width:100px;\">
\t                    <option value=\"title\">题&nbsp;&nbsp;名</option>
\t                </select> 
\t            </td>
\t      \t</tr>
\t      \t<tr>
\t      \t\t<td>
\t      \t\t\t<input type=\"submit\" class=\"submit\" value=\"检索\">
\t      \t\t</td>
\t      \t</tr>
\t\t</tbody>

\t</form>


\t";
        // line 46
        $context["i"] = 0;
        // line 47
        echo "\t<span class=\"label label-info\">书籍分类:</span>
\t<table class=\"table table-striped table-bordered table-condensed\">
\t";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 50
            echo "\t    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 51
            echo "\t            <tr>
\t            \t
\t           \t\t<td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_showEbookByCategory", array("category" => $this->getAttribute($this->getContext($context, "category"), "categoryName"))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "categoryName"), "html", null, true);
            echo "</td>
\t            </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "\t</table>
";
    }

    public function getTemplateName()
    {
        return "MylibberMylibBundle:Page:ebook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 56,  122 => 53,  118 => 51,  115 => 50,  111 => 49,  107 => 47,  105 => 46,  77 => 21,  74 => 20,  71 => 19,  66 => 16,  58 => 14,  54 => 13,  50 => 12,  47 => 11,  44 => 10,  40 => 9,  37 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
