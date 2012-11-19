<?php

/* MylibberMylibBundle:Book:list.html.twig */
class __TwigTemplate_118958567b0db661e070b3a927630490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MylibberMylibBundle::layout.html.twig");

        $this->blocks = array(
            'bookName' => array($this, 'block_bookName'),
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
    public function block_bookName($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <article class=\"book\">
    <div class=\"alert alert-info\">结果列表</div>
    ";
        // line 8
        $context["i"] = 0;
        // line 9
        echo "\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "books"));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 11
            echo "\t    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 12
            echo "\t            <tr>
\t            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</td>
\t            <td>书籍名称:</span>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
            echo "</td>
\t            <td>作者:</span> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookAuthor"), "html", null, true);
            echo "</td>
\t            <td>ISBN:</span> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookIsbn"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 17
            if (($this->getAttribute($this->getContext($context, "book"), "BookBorr") == 1)) {
                echo " <span class=\"label label-success\">可借阅</span>  ";
            } else {
                echo " <span class=\"label\">不可借阅</span> ";
            }
            // line 18
            echo "            </td>
            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_detail", array("id" => $this->getAttribute($this->getContext($context, "book"), "Id"))), "html", null, true);
            echo "\"><span class=\"badge badge-info\">详细信息...</span></a></td>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "\t</table>


       

    </article>
";
    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        // line 29
        echo "
<span class=\"label label-info\">书籍检索</span>
<form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_search"), "html", null, true);
        echo "\" method=\"get\" name=\"f\" onsubmit=\"return chkForm(this)\" id=\"f\">
        <tbody>
            <tr>
                <td colspan=\"2\">请输入检索关键字:
                    <input type=\"text\" name=\"strText\" id=\"strText\" value=\"\">&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td align=\"right\">请选择检索类型：</td>
                <td>
                    <select class=\"option\" name=\"SearchType\" size=\"1\" style=\"width:100px;\">
                        <option value=\"title\">题&nbsp;&nbsp;名</option>
                        <option value=\"isbn\">ISBN/ISSN</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <td>
                    <input type=\"submit\" class=\"submit\" value=\"检索\">
                </td>
            </tr>
        </tbody>

    </form>
";
    }

    public function getTemplateName()
    {
        return "MylibberMylibBundle:Book:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  102 => 29,  99 => 28,  89 => 21,  81 => 19,  78 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  53 => 12,  50 => 11,  46 => 10,  43 => 9,  41 => 8,  37 => 6,  34 => 5,  28 => 3,);
    }
}
