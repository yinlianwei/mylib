<?php

/* MylibberBackendBundle:Default:addCatrgory.html.twig */
class __TwigTemplate_03c6fc18ce047c89e98f53463734dbd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MylibberBackendBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"alert alert-info\">
  <h4>类别管理   </h4>
</div>
\t\t \t";
        // line 7
        $context["i"] = 0;
        // line 8
        echo "\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th><span class=\"label label-info\">分类名称:</span></th>
\t\t\t<th><span class=\"label label-info\">删除分类:</span></th>
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "\t    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 15
            echo "\t            <tr>
\t            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "categoryName"), "html", null, true);
            echo "</td>
\t            <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_deleteCategory", array("id" => $this->getAttribute($this->getContext($context, "category"), "Id"))), "html", null, true);
            echo "\"><span class=\"label label-important\">删除</span></a></td>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "\t</table>

\t\t<form action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addCategoryNew"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"bloger\"> 
\t\t    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo " 
\t\t 
\t\t    <input type=\"submit\" / value=\"添加分类\"> 
\t\t</form> 
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Default:addCatrgory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  73 => 22,  69 => 20,  61 => 18,  57 => 17,  53 => 16,  50 => 15,  47 => 14,  43 => 13,  36 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
