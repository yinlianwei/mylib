<?php

/* MylibberBackendBundle:Borr:showhist.html.twig */
class __TwigTemplate_b62e1fb455c598c0e79c2ac3bc0c40eb extends Twig_Template
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
<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_borrList"), "html", null, true);
        echo "\" method=\"get\" name=\"f\" onsubmit=\"return chkForm(this)\" id=\"f\">
        <tbody>
            <tr>
                <td colspan=\"2\">
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
        // line 32
        $context["i"] = 0;
        // line 33
        echo "<table class=\"table table-striped table-bordered table-condensed\">
    <tr>
        <th></th>
        <th><span class=\"label label-info\">书籍名称:</span></th>
        <th><span class=\"label label-info\">ISBN:</span></th>
        <th><span class=\"label label-info\">借阅人:</span></th>
        <th><span class=\"label label-info\">借阅号码:</span></th>
        <th><span class=\"label label-info\">借阅日期:</span></th></tr>
";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "borrs"));
        foreach ($context['_seq'] as $context["_key"] => $context["borr"]) {
            // line 42
            echo "    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 43
            echo "
    
        
        
            <tr>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MylibberMylibBundle_detail", array("id" => $this->getAttribute($this->getContext($context, "borr"), "Id"))), "html", null, true);
            echo "\"><span class=\"label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookName"), "html", null, true);
            echo "</span></a></td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookIsbn"), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "uName"), "html", null, true);
            echo "</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "uBookId"), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            echo 1;
            echo "</td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['borr'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Borr:showhist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 55,  115 => 53,  111 => 52,  107 => 51,  103 => 50,  97 => 49,  93 => 48,  86 => 43,  83 => 42,  79 => 41,  69 => 33,  67 => 32,  38 => 6,  33 => 5,  27 => 3,);
    }
}
