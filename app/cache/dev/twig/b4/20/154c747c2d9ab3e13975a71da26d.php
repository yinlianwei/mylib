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
        echo "\t    <article class=\"borr\">
       ";
        // line 6
        $context["i"] = 0;
        // line 7
        echo "<table class=\"table table-striped table-bordered table-condensed\">
<tr><th></th><th><span class=\"label label-info\">书籍名称:</span></th><th><span class=\"label label-info\">作者:</span></th><th><span class=\"label label-info\">ISBN:</span></th><th><span class=\"label label-info\">借阅:</span></th><th><span class=\"label label-info\">归还:</span></th></tr>
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "borrs"));
        foreach ($context['_seq'] as $context["_key"] => $context["borr"]) {
            // line 10
            echo "    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 11
            echo "
    
 \t\t
 \t \t
            <tr>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_detail", array("id" => $this->getAttribute($this->getContext($context, "borr"), "Id"))), "html", null, true);
            echo "\"><span class=\"label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookName"), "html", null, true);
            echo "</span></a></td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookAuthor"), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookIsbn"), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            if (($this->getAttribute($this->getContext($context, "borr"), "BookBorr") == 1)) {
                echo " <span class=\"label label-success\">可借阅</span>  ";
            } else {
                echo " <span class=\"label\">不可借阅</span> ";
            }
            echo "</td>
            <td>";
            // line 21
            if (($this->getAttribute($this->getContext($context, "borr"), "BookBorr") == 1)) {
                echo " <i class=\"icon-ok-sign\">  ";
            } else {
                echo " <i class=\"icon-leaf\">";
            }
            echo "</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['borr'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "</table>

\t<form action=\"openlink.php\" method=\"get\" name=\"f\" onsubmit=\"return chkForm(this)\" id=\"f\">
\t\t<tbody>
\t\t\t<tr>
\t        \t输入检索条件:<td colspan=\"2\"><input type=\"hidden\" id=\"historyCount\" name=\"historyCount\" value=\"1\">
\t       \t\t\t<input type=\"text\" size=\"45\" maxlength=\"250\" name=\"strText\" id=\"strText\" value=\"\" class=\"paddingleft\">&nbsp;&nbsp;
\t                    <script language=\"javascript\" type=\"text/javascript\">
\t                        document.f.strText.focus();
\t                    </script>
\t      \t\t \t
\t      \t\t</td>
\t      \t</tr>
\t      \t<tr>
\t        \t<td align=\"right\">请选择检索类型：</td>
\t        \t<td>
\t          \t\t<select class=\"option\" name=\"strSearchType\" size=\"1\" style=\"width:100px;\">
\t                    <option value=\"title\">题&nbsp;&nbsp;名</option>
\t                    <option value=\"author\">责任者</option>
\t                   \t<option value=\"isbn\">ISBN/ISSN</option>
\t                    <option value=\"publisher\">出版社</option>
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
        return array (  98 => 24,  85 => 21,  77 => 20,  73 => 19,  69 => 18,  63 => 17,  59 => 16,  52 => 11,  49 => 10,  45 => 9,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  27 => 2,);
    }
}
