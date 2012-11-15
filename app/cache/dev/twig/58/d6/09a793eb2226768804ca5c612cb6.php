<?php

/* MylibberMylibBundle:Book:detail.html.twig */
class __TwigTemplate_58d609a793eb2226768804ca5c612cb6 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<div class=\"alert alert-info\"><h4>详细信息</h4></div>
    <article class=\"book\">
    <p></p>  
    \t<div class=\"detailbookpic\">
    \t\t<p><span class=\"badge badge-warning\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
        echo "</span></p>
        \t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getAttribute($this->getContext($context, "book"), "bookPic")))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
        echo " image not found\" class=\"large\" />
        </div>
        <div class=\"detailbookattribute\">
       \t\t<p></p>
       \t\t<br>
       \t\t<p>名称:";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
        echo "</p>
        \t<p>ISBN: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookIsbn"), "html", null, true);
        echo "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        \t\t ";
        // line 15
        if (($this->getAttribute($this->getContext($context, "book"), "BookBorr") == 1)) {
            echo " <span class=\"label label-success\">可借阅</span>  ";
        } else {
            echo "}  <span class=\"label\">不可借阅</span> ";
        }
        echo "</p>
        \t<p>作者: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookAuthor"), "html", null, true);
        echo " </p>
        \t<p>定价: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookPrice"), "html", null, true);
        echo "</p>
            <p>图书类别:";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "categoryName"), "html", null, true);
        echo "</p>
            <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookContent"), "html", null, true);
        echo "</p>
            <span class=\"label label-info\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_homepage"), "html", null, true);
        echo "\">返回</a></span>
        </div>
    </article>
";
    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        // line 26
        echo "
<span class=\"label label-info\">书籍检索</span>
\t<form action=\"openlink.php\" method=\"get\" name=\"f\" onsubmit=\"return chkForm(this)\" id=\"f\">
\t\t<tbody>
\t\t\t<tr>
\t        \t<td colspan=\"2\"><input type=\"hidden\" id=\"historyCount\" name=\"historyCount\" value=\"1\">
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
        return "MylibberMylibBundle:Book:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  90 => 25,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  58 => 15,  54 => 14,  50 => 13,  40 => 8,  36 => 7,  30 => 3,  27 => 2,);
    }
}
