<?php

/* MylibberMylibBundle:Book:list.html.twig */
class __TwigTemplate_a4f405deceec706e51316b2f69ac618e extends Twig_Template
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
       ";
        // line 7
        $context["i"] = 0;
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "books"));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 9
            echo "    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 10
            echo "    <div class=\"alert alert-info\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo ". 
            <span class=\"label\">书籍名称:</span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookName"), "html", null, true);
            echo "&nbsp;&nbsp;
            <span class=\"label\">作者:</span> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookAuthor"), "html", null, true);
            echo "&nbsp;&nbsp;
            <span class=\"label\">ISBN:</span> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "book"), "bookIsbn"), "html", null, true);
            echo "&nbsp;&nbsp;
            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ";
            // line 16
            if (($this->getAttribute($this->getContext($context, "book"), "BookBorr") == 1)) {
                echo " <span class=\"label label-success\">可借阅</span>  ";
            } else {
                echo "}  <span class=\"label\">不可借阅</span> ";
            }
            // line 17
            echo "    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "
       

    </article>
";
    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        // line 26
        echo "
<span class=\"label label-info\">书籍检索</span>
    <form action=\"openlink.php\" method=\"get\" name=\"f\" onsubmit=\"return chkForm(this)\" id=\"f\">
        <tbody>
            <tr>
                <td colspan=\"2\"><input type=\"hidden\" id=\"historyCount\" name=\"historyCount\" value=\"1\">
                    <input type=\"text\" size=\"45\" maxlength=\"250\" name=\"strText\" id=\"strText\" value=\"\" class=\"paddingleft\">&nbsp;&nbsp;
                        <script language=\"javascript\" type=\"text/javascript\">
                            document.f.strText.focus();
                        </script>
                    
                </td>
            </tr>
            <tr>
                <td align=\"right\">请选择检索类型：</td>
                <td>
                    <select class=\"option\" name=\"strSearchType\" size=\"1\" style=\"width:100px;\">
                        <option value=\"title\">题&nbsp;&nbsp;名</option>
                        <option value=\"author\">责任者</option>
                        <option value=\"isbn\">ISBN/ISSN</option>
                        <option value=\"publisher\">出版社</option>
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
        return array (  94 => 26,  91 => 25,  83 => 20,  75 => 17,  69 => 16,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  49 => 10,  46 => 9,  42 => 8,  40 => 7,  37 => 6,  34 => 5,  28 => 3,);
    }
}
