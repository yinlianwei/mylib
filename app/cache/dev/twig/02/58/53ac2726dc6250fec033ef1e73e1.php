<?php

/* MylibberBackendBundle:Default:index.html.twig */
class __TwigTemplate_025853ac2726dc6250fec033ef1e73e1 extends Twig_Template
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
        echo " welcome admin";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<!--rating modal's content-->
            <div id=\"ratyService\" class=\"modal hide fade\">
            
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h3>添加收藏: 我买过这个服务</h3>
            </div><!--Modal header-->
            <div class=\"modal-body\">
             <div class=\"row\">
            <div  class=\"span1\"></div>
             <div class=\"span4 \">
              <h3>求评价(@^_^@) : </h3>
              </div>
              <div  class=\"span4\" id=\"ratingstar\"  ></div>
              <div  class=\"span1\" id=\"target\"></div>
           </div>
            </div><!--Modal body-->
            <div class=\"modal-footer\">
              <a href=\"#\" class=\"btn\" data-dismiss=\"modal\" >Close</a>
              <a href=\"#\" class=\"btn btn-primary\">Save changes</a>
            </div><!--Modal footer-->

          </div> <!--Modal-->
";
    }

    public function getTemplateName()
    {
        return "MylibberBackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  33 => 3,  27 => 2,);
    }
}
