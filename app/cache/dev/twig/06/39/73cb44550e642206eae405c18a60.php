<?php

/* MylibberBackendBundle:Book:hist.html.twig */
class __TwigTemplate_063973cb44550e642206eae405c18a60 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " history books ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo "  
\t\t<form action=\"openlink.php\" method=\"get\" name=\"f\" onsubmit=\"return chkForm(this)\" id=\"f\">
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
        return "MylibberBackendBundle:Book:hist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  27 => 3,);
    }
}
