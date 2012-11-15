<?php

/* MylibberBackendBundle:Book:borr.html.twig */
class __TwigTemplate_49d59cbbec68f19de88736203a9952a6 extends Twig_Template
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

\t<form action=\"";
        // line 9
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
        // line 35
        $context["i"] = 0;
        // line 36
        echo "<table class=\"table table-striped table-bordered table-condensed\">
\t<tr>
\t\t<th></th>
\t\t<th><span class=\"label label-info\">书籍名称:</span></th>
\t\t<th><span class=\"label label-info\">作者:</span></th>
\t\t<th><span class=\"label label-info\">持有者:</span></th>
\t\t<th><span class=\"label label-info\">ISBN:</span></th>
\t\t<th><span class=\"label label-info\">借阅:</span></th>
\t\t<th><span class=\"label label-info\">归还:</span></th>
\t\t<th><span class=\"label label-info\">借阅历史:</span></th>
\t\t<th><span class=\"label label-info\">移除:</span></th></tr>
\t\t
";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "borrs"));
        foreach ($context['_seq'] as $context["_key"] => $context["borr"]) {
            // line 49
            echo "    ";
            $context["i"] = ($this->getContext($context, "i") + 1);
            // line 50
            echo "
    
 \t\t
 \t \t
            <tr>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</td>
            <td>";
            // line 56
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
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookAuthor"), "html", null, true);
            echo " </td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookOwner"), "html", null, true);
            echo " </td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "borr"), "bookIsbn"), "html", null, true);
            echo " </td>

            <td>";
            // line 61
            if (($this->getAttribute($this->getContext($context, "borr"), "BookBorr") == 1)) {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_borrform", array("id" => $this->getAttribute($this->getContext($context, "borr"), "Id"))), "html", null, true);
                echo "\"><span class=\"label label-success\">借阅</span></a>  ";
            } else {
                echo " <span class=\"label\">不可</span> ";
            }
            echo "</td>
            <td>";
            // line 62
            if (($this->getAttribute($this->getContext($context, "borr"), "BookBorr") == 1)) {
                echo " <i class=\"icon-ok-sign\">  ";
            } else {
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_giveBack", array("bookIsbn" => $this->getAttribute($this->getContext($context, "borr"), "bookIsbn"))), "html", null, true);
                echo "\"><i class=\"icon-arrow-left\"></a>";
            }
            echo "</td>

            <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_isbnBorrList", array("bookIsbn" => $this->getAttribute($this->getContext($context, "borr"), "bookIsbn"))), "html", null, true);
            echo "\"<i class=\"icon-folder-open\"></a> </td>
            <td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylibber_backend_deletebook", array("id" => $this->getAttribute($this->getContext($context, "borr"), "Id"))), "html", null, true);
            echo "\"><span class=\"icon-remove\"></span></a></td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['borr'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 67
        echo "</table>


<?php if (\$pager->haveToPaginate()): ?> 
  <div class=\"pagination\"> 
    <a href=\"<?php echo url_for('category', \$category) ?>?page=1\"> 
      <img src=\"/images/first.png\" alt=\"First page\" title=\"First page\" /> 
    </a> 
  
    <a href=\"<?php echo url_for('category', \$category) ?>?page=<?php echo \$pager->getPreviousPage() ?>\"> 
      <img src=\"/images/previous.png\" alt=\"Previous page\" title=\"Previous page\" /> 
    </a> 
  
    <?php foreach (\$pager->getLinks() as \$page): ?> 
      <?php if (\$page == \$pager->getPage()): ?> 
        <?php echo \$page ?> 
      <?php else: ?> 
        <a href=\"<?php echo url_for('category', \$category) ?>?page=<?php echo \$page ?>\"><?php echo \$page ?></a> 
      <?php endif; ?> 
    <?php endforeach; ?> 
  
    <a href=\"<?php echo url_for('category', \$category) ?>?page=<?php echo \$pager->getNextPage() ?>\"> 
      <img src=\"/images/next.png\" alt=\"Next page\" title=\"Next page\" /> 
    </a> 
  
    <a href=\"<?php echo url_for('category', \$category) ?>?page=<?php echo \$pager->getLastPage() ?>\"> 
      <img src=\"/images/last.png\" alt=\"Last page\" title=\"Last page\" /> 
    </a> 
  </div> 
<?php endif; ?> 
  
<div class=\"pagination_desc\"> 
  <strong><?php echo count(\$pager) ?></strong> jobs in this category 
  
  <?php if (\$pager->haveToPaginate()): ?> 
    - page <strong><?php echo \$pager->getPage() ?>/<?php echo \$pager->getLastPage() ?></strong> 
  <?php endif; ?> 
</div> 


<center>
\t<div class=\"pagination\">
\t  <ul>
\t    <li><a href=\"#\">前一页</a></li>
\t    <li class=\"active\">
\t      <a href=\"#\">1</a>
\t    </li>
\t    <li><a href=\"#\">2</a></li>
\t    <li><a href=\"#\">3</a></li>
\t    <li><a href=\"#\">4</a></li>
\t    <li><a href=\"#\">后一页</a></li>
\t  </ul>
\t</div>
</center>

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
        return array (  167 => 67,  159 => 65,  155 => 64,  144 => 62,  134 => 61,  129 => 59,  125 => 58,  121 => 57,  105 => 56,  101 => 55,  94 => 50,  91 => 49,  87 => 48,  73 => 36,  71 => 35,  42 => 9,  36 => 5,  33 => 4,  27 => 2,);
    }
}
