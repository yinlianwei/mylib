<?php

/* MylibberBackendBundle:Book:borr.html.twig */
class __TwigTemplate_b420154c747c2d9ab3e13975a71da26d extends Twig_Template
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
        echo " borrow books ";
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
\t\t<th><span class=\"label label-info\">归还:</span></th>
\t\t<th><span class=\"label label-info\">移除:</span></th></tr>
\t\t
";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "borrs"));
        foreach ($context['_seq'] as $context["_key"] => $context["borr"]) {
            // line 20
            echo "    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 21
            echo "
    
 \t\t
 \t \t
            <tr>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            if (($this->getAttribute($this->getContext($context, "borr"), "BookBorr") == 1)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_detail", array("id" => $this->getAttribute($this->getContext($context, "borr"), "Id"))), "html", null, true);
                echo "\"><span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookName"), "html", null, true);
                echo "</span></a> ";
            } else {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_detail", array("id" => $this->getAttribute($this->getContext($context, "borr"), "Id"))), "html", null, true);
                echo "\"><span class=\"label\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookName"), "html", null, true);
                echo "</span></a>";
            }
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookAuthor"), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookIsbn"), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            if (($this->getAttribute($this->getContext($context, "borr"), "BookBorr") == 1)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_borrform", array("id" => $this->getAttribute($this->getContext($context, "borr"), "Id"))), "html", null, true);
                echo "\"><span class=\"label label-success\">借阅</span></a>  ";
            } else {
                echo " <span class=\"label\">不可借阅</span> ";
            }
            echo "</td>
            <td>";
            // line 31
            if (($this->getAttribute($this->getContext($context, "borr"), "BookBorr") == 1)) {
                echo " <i class=\"icon-ok-sign\">  ";
            } else {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_giveBack", array("id" => $this->getAttribute($this->getContext($context, "borr"), "Id"))), "html", null, true);
                echo "\"><i class=\"icon-arrow-left\"></a>";
            }
            echo "</td>
            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_deletebook", array("id" => $this->getAttribute($this->getContext($context, "borr"), "Id"))), "html", null, true);
            echo "\"><span class=\"icon-remove\"></span></a></td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['borr'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "</table>
<form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_borrSearchList"), "html", null, true);
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
        return "MylibberBackendBundle:Book:borr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  125 => 34,  117 => 32,  107 => 31,  97 => 30,  93 => 29,  89 => 28,  73 => 27,  69 => 26,  62 => 21,  59 => 20,  55 => 19,  43 => 9,  41 => 8,  36 => 5,  33 => 4,  27 => 2,);
    }
}
