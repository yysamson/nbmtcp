<?php

/* admin/base.twig */
class __TwigTemplate_4c63cb6293e66c4389adf64d742eb76c06e98fd39947205ee478a8a13f3d94fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'top_menu' => array($this, 'block_top_menu'),
            'main' => array($this, 'block_main'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>商城后台系统</title>
    <link rel=\"stylesheet\" type=\"text/css\" class=\"ui\" href=\"/css/semantic/css/semantic.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" class=\"ui\" href=\"/css/jquery-ui.min.css\">
    <script src=\"/js/jquery-2.0.3.min.js\"></script>
    <script src=\"/js/jquery-ui.min.js\"></script>
    <script src=\"/js/jquery.ui.datepicker-zh-CN.js\"></script>
    ";
        // line 11
        echo "    <script src=\"/css/semantic/javascript/semantic.min.js\"></script>
    <script src=\"/js/jquery.address.js\"></script>
    <script src=\"/js/ckeditor/ckeditor.js\"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: \"微软雅黑\";
        }
    </style>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
</head>
<body class=\"module\">
";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 54
        echo "<div style=\"margin-left: 275px;\">
    ";
        // line 55
        $this->displayBlock('top_menu', $context, $blocks);
        // line 57
        echo "    <div style=\"margin: 0 50px 50px 50px\">
        ";
        // line 58
        $this->displayBlock('main', $context, $blocks);
        // line 60
        echo "    </div>
</div>
<div class=\"ui small modal\">

</div>
<script>
    \$('.ui.dropdown').dropdown();
    \$('.ui.checkbox').checkbox();
    //    \$('.date').datepicker(\$.datepicker.regional[ \"zh-CN\" ]);
    \$('.date').datepicker({
        changeMonth: true,
        changeYear: true
    });
    \$('.delete').on('click', function () {
        return confirm('确定删除？');
    });
</script>
";
        // line 77
        $this->displayBlock('script', $context, $blocks);
        // line 79
        echo "</body>
</html>";
    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"ui active vertical sidebar menu inverted\">
        <a class=\"item\">
            <i class=\"home icon\"></i>
            首页
        </a>

        <div class=\"header item\">
            <i class=\"dollar icon\"></i>
            商品管理
        </div>
        <div class=\"item\">
            <div class=\"menu\">
                <a class=\"item\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_goods");
        echo "\">商品列表</a>
                <a class=\"item\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("admin_goods_add");
        echo "\">添加商品</a>
                <a class=\"item\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\">商品分类管理</a>
            </div>
        </div>

        <div class=\"header item\">
            <i class=\"setting icon\"></i>
            系统设置
        </div>
        <div class=\"item\">
            <div class=\"menu\">
                <a class=\"item\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("admin_logout");
        echo "\">退出系统</a>
            </div>
        </div>
    </div>
";
    }

    // line 55
    public function block_top_menu($context, array $blocks = array())
    {
        // line 56
        echo "    ";
    }

    // line 58
    public function block_main($context, array $blocks = array())
    {
        // line 59
        echo "        ";
    }

    // line 77
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin/base.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 77,  144 => 59,  141 => 58,  137 => 56,  134 => 55,  125 => 49,  112 => 39,  108 => 38,  104 => 37,  90 => 25,  82 => 79,  80 => 77,  61 => 60,  59 => 58,  54 => 55,  51 => 54,  34 => 11,  23 => 1,  109 => 41,  105 => 39,  93 => 33,  87 => 24,  81 => 27,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  56 => 57,  53 => 19,  49 => 24,  33 => 4,  30 => 3,  25 => 2,);
    }
}
