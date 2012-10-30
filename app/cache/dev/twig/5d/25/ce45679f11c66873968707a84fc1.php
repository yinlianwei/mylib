<?php

/* MylibberMylibBundle:Default:index.html.twig */
class __TwigTemplate_5d25ce45679f11c66873968707a84fc1 extends Twig_Template
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
        echo "\t<span class=\"label label-info\">最新图书</span>
    <article class=\"book\">
    <p></p>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "books"));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 8
            echo "        
    \t<div class=\"bookpic\">
    \t\t<p><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_detail", array("id" => $this->getAttribute($this->getContext($context, "book"), "Id"))), "html", null, true);
            echo "\"><span class=\"badge badge-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
            echo "</span></a></p>
        \t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_detail", array("id" => $this->getAttribute($this->getContext($context, "book"), "Id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getAttribute($this->getContext($context, "book"), "bookPic")))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
            echo " image not found\" class=\"large\" /></a>
        </div>
        <div class=\"bookattribute\">
       \t\t<p></p>
       \t\t<br>
        \t<p>ISBN: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookIsbn"), "html", null, true);
            echo "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        \t\t ";
            // line 17
            if (($this->getAttribute($this->getContext($context, "book"), "BookBorr") == 1)) {
                echo " <span class=\"label label-success\">可借阅</span>  ";
            } else {
                echo "}  <span class=\"label\">不可借阅</span> ";
            }
            echo "</p>
        \t<p>作者: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookAuthor"), "html", null, true);
            echo " </p>
        \t<p>定价: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookPrice"), "html", null, true);
            echo "</p>
            <p>图书类别:";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "categoryName"), "html", null, true);
            echo "</p>
           
          <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_detail", array("id" => $this->getAttribute($this->getContext($context, "book"), "Id"))), "html", null, true);
            echo "\"><span class=\"label\">详细信息...</span></a>
        </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "    </article>
";
    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        // line 29
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
        return "MylibberMylibBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  100 => 28,  95 => 25,  86 => 22,  81 => 20,  77 => 19,  73 => 18,  65 => 17,  61 => 16,  49 => 11,  43 => 10,  39 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
