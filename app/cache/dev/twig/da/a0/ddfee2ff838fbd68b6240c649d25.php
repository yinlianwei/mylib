<?php

/* MylibberBackendBundle:Borr:searchBorrlist.html.twig */
class __TwigTemplate_daa0ddfee2ff838fbd68b6240c649d25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MylibberBackendBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " bookow books ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"alert alert-info\">
  <h4>图书借阅 </h4>
</div>
 ";
        // line 8
        $context["i"] = 0;
        // line 9
        echo "<table class=\"table table-striped table-bordered table-condensed\">
\t<tr>
\t\t<th></th>
\t\t<th><span class=\"label label-info\">书籍名称:</span></th>
\t\t<th><span class=\"label label-info\">作者:</span></th>
\t\t<th><span class=\"label label-info\">ISBN:</span></th>
\t\t<th><span class=\"label label-info\">借阅:</span></th>
\t\t<th><span class=\"label label-info\">归还:</span></th></tr>
";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "books"));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 18
            echo "    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 19
            echo "
    
 \t\t
 \t \t
            <tr>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_detail", array("id" => $this->getAttribute($this->getContext($context, "book"), "Id"))), "html", null, true);
            echo "\"><span class=\"label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
            echo "</span></a></td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookAuthor"), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookIsbn"), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            if (($this->getAttribute($this->getContext($context, "book"), "Bookborr") == 1)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_borrform", array("id" => $this->getAttribute($this->getContext($context, "book"), "Id"))), "html", null, true);
                echo "\"><span class=\"label label-success\">借阅</span></a>  ";
            } else {
                echo " <span class=\"label\">不可借阅</span> ";
            }
            echo "</td>
            <td>";
            // line 29
            if (($this->getAttribute($this->getContext($context, "book"), "Bookborr") == 1)) {
                echo " <i class=\"icon-ok-sign\">  ";
            } else {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_giveBack", array("id" => $this->getAttribute($this->getContext($context, "book"), "Id"))), "html", null, true);
                echo "\"><i class=\"icon-arrow-left\"></a>";
            }
            echo "</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "</table>
<form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_search"), "html", null, true);
        echo "\" method=\"get\" name=\"f\" onsubmit=\"return chkForm(this)\" id=\"f\">
\t\t<tbody>
\t\t\t<tr>
\t        \t<td colspan=\"2\">请输入检索关键字:
\t       \t\t\t<input type=\"text\" name=\"strText\" id=\"strText\" value=\"\">&nbsp;&nbsp;
\t      \t\t</td>
\t      \t</tr>
\t      \t<tr>
\t        \t<td align=\"right\">请选择检索类型：</td>
\t        \t<td>
\t          \t\t<select class=\"option\" name=\"SearchType\" size=\"1\" style=\"width:100px;\">
\t                    <option value=\"title\">题&nbsp;&nbsp;名</option>
\t                   \t<option value=\"isbn\">ISBN/ISSN</option>
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
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Borr:searchBorrlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  110 => 32,  95 => 29,  85 => 28,  81 => 27,  77 => 26,  71 => 25,  67 => 24,  60 => 19,  57 => 18,  53 => 17,  43 => 9,  41 => 8,  36 => 5,  33 => 4,  27 => 2,);
    }
}
