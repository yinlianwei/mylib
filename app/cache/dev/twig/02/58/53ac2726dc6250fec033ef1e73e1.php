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
        echo "<div id=\"myModal\" class=\"modal hide fade\" style=\"display: none; \">
            <div class=\"modal-header\">
              <a class=\"close\" data-dismiss=\"modal\">×</a>
              <h3>对话框标题</h3>
            </div>
            <div class=\"modal-body\">
              <h4>对话框文字</h4>
              <p>
    高考临近，湖北孝感惊现史上最刻苦“吊瓶班”。这是昨日孝感市第一高级中学某晚自习教室的一幕，\"吊瓶高考班\"轰动全校！不知台上的老师面对如此震撼的场面和沁人心脾的药水味，如何站稳脚跟hold住全场呢？该校学生表示，备战高考，补充能量挨几针也是值得的，你hold住了吗？
        </p>

              <h4>对话框中的弹出提示</h4>
              <p> <a href=\"#\" class=\"btn popover-test\" data-content=\"青岛工学院最近下发通知，将考研自习室772个座位“有偿提供”，5元起售，目前已售出500多个座位。根据采光通风等条件不同，座位每月收费划分为5元、10元、15元、20元、25元五个档次，学生购买时要一次交纳10个月的费用。教务处长称， 为了给学生解决考研复习问题，只好“出此下策”。\" data-original-title=\"花钱买座位\">学生真不易</a> 把鼠标放上来试试？</p>

              <h4>对话框中的工具提示</h4>
              <p>
    5月1日，济南一名<a href=\"#\" class=\"tooltip-test\" data-original-title=\"城管里面也有好人，把他们变成坏人的是恶的制度\">城管</a>要对一位抱着三四岁孩子的<a href=\"#\" class=\"tooltip-test\" data-original-title=\"小商贩真的很辛苦，不要再欺负辛劳人了\">女商贩</a>扣留时候发生争执。争执中女商贩抱着孩子给城管下跪,城管见状也向女商贩跪下。事后城管称，下跪是为了与对方“平等对话”,也怕对孩子心理产生不良影响。
        </p>

              <hr>

              <h4>对溢出文本使用可选的滚动条</h4>
              <p>
    我们对 <code>.modal-body</code> 样式修正了 <code>max-height</code> 。对于超过高度的内容就会显示滚动条。
        </p>
              <p>南京街头某家麦当劳门口，一个外国人买了两包薯条，分给乞讨的老奶奶一包，两人席地而坐，开心地吃着聊着。</p>
        <p>@说书者一枚 ：《帝都日爆》射论：《从麦当劳事件看美国小伙的拙劣表演》：这位美国小伙拙劣的”亲民民主表演“，再次印证了中国的古语“黄鼠狼给鸡拜年没安好心”。这道貌岸然的潜伏”美国政客“，想用糖衣炮弹瓦解坚强的中国无产阶级老奶奶，必定遭到中国人民的唾弃！不要做自取其辱的丑事！（完，完蛋的完） </p>
              <p>4日晚，东莞东城海雅百货前，一女子被偷包，巴西籍男子MOZEN阻止，遭小偷团伙报复群殴。其间数十名路人在场，无人施救。MOZEN说，小偷打他，他觉得正常，可没有任何人帮他，让他觉得不正常，“这个社会是需要互相帮助的，我整天出没在君豪商业中心，中心几乎大部分人都认识我，却没有一个人帮我，这让我觉得很失望，很心寒”。</p>
        <p>MOZEN说，海雅百货这一带治安很乱，这已经不是他第一次阻止小偷行窃了，早在今年春节前，他就曾扑倒过一个小偷。可有了这一次的经历，如果下回再碰上类似情况，他不会也不敢再帮忙了。</p>
              <p>美国总统富兰克林·罗斯福1942年6月14日美国国旗纪念日广播演讲：“我们所有人都是地球的子孙，有些道理不言而喻，如果我们的兄弟在遭受压迫，我们也将遭受压迫，如果他们在忍饥挨饿，我们也将忍饥挨饿，如果他们的自由权利被剥夺，我们的自由也将不复存在......<a href=\"http://t.cn/aDoq5K\"></a>http://t.cn/aDoq5K</p>
            </div>
            <div class=\"modal-footer\">
              <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">关闭</a>
              <a href=\"#\" class=\"btn btn-primary\">保存更改</a>
            </div>
          </div>
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
