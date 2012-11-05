<?php

/* MylibberBackendBundle:User:addUser.html.twig */
class __TwigTemplate_a611f39ac0c44ea4355172b3a1a31ef7 extends Twig_Template
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
  <h4>用户管理   </h4>
</div>
 \t";
        // line 7
        $context["i"] = 0;
        // line 8
        echo "\t<table class=\"table table-striped table-bordered table-condensed\">
\t\t<tr>
\t\t\t<th></th>
\t\t\t<th><span class=\"label label-info\">用户名:</span></th>
\t\t\t<th><span class=\"label label-info\">证件号码:</span></th>
\t\t\t<th><span class=\"label label-info\">管理员:</span></th>
\t\t\t<th><span class=\"label label-info\">删除用户:</span></th>
\t\t\t<th><span class=\"label label-info\">修改信息:</span></th></tr>
\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "\t    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 18
            echo "\t            <tr>
\t            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "uName"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "uBookId"), "html", null, true);
            echo "</td>
\t            <td>";
            // line 22
            if (($this->getAttribute($this->getContext($context, "user"), "uState") == 1)) {
                echo " <span class=\"label label-success\">是</span></a>  ";
            } else {
                echo " <span class=\"label\">否</span> ";
            }
            echo "</td>
\t            <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_deleteUser", array("id" => $this->getAttribute($this->getContext($context, "user"), "Id"))), "html", null, true);
            echo "\"><i class=\"icon-remove\"></a></td>
\t            <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_updateUserForm", array("id" => $this->getAttribute($this->getContext($context, "user"), "Id"))), "html", null, true);
            echo "\"><span class=\"label label-success\">修改</span></a></td>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "\t</table>

\t<form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_addUserNew"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"bloger\"> 
\t   ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo " 
\t\t 
\t    <input type=\"submit\" /> 
\t</form> 
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:User:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  92 => 28,  88 => 26,  80 => 24,  76 => 23,  68 => 22,  64 => 21,  60 => 20,  56 => 19,  53 => 18,  50 => 17,  46 => 16,  36 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
