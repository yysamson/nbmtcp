<?php

/* base.twig */
class __TwigTemplate_c2e9711ee5082d524c9895f43f3842334d12314c6753ff9b7ebdfb6b3f6dcb7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav_title' => array($this, 'block_nav_title'),
            'main' => array($this, 'block_main'),
            'end_js' => array($this, 'block_end_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-cn\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>宁波美天诚品进出口有限公司</title>
    <!-- Bootstrap core CSS -->
    <link href=\"/css/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/css/style.css\" rel=\"stylesheet\">
</head>
<body>
<div class=\"wrapper\">
    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            ";
        // line 26
        $this->displayBlock('nav_title', $context, $blocks);
        // line 27
        echo "        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"active\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">首 页</a></li>
                ";
        // line 34
        echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">产品中心 <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("products", array("cate" => 17));
        echo "\">生活用品</a></li>
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("products", array("cate" => 20));
        echo "\">进口食品</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">用户中心 <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">亲,请登录</a></li>
                        <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">免费注册</a></li>
                        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("customer_my_orders");
        echo "\">我的订单</a></li>
                        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\">购物车</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    ";
        // line 55
        $this->displayBlock('main', $context, $blocks);
        // line 57
        echo "
</div>
<!--wrapper end-->


<script src=\"/js/jquery-1.11.0.min.js\"></script>
<script src=\"/css/bootstrap/js/bootstrap.js\"></script>
";
        // line 64
        $this->displayBlock('end_js', $context, $blocks);
        // line 66
        echo "</body>
</html>";
    }

    // line 26
    public function block_nav_title($context, array $blocks = array())
    {
        echo "<a class=\"navbar-brand\" href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">美天诚品</a>";
    }

    // line 55
    public function block_main($context, array $blocks = array())
    {
        // line 56
        echo "    ";
    }

    // line 64
    public function block_end_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 64,  132 => 56,  129 => 55,  121 => 26,  116 => 66,  114 => 64,  105 => 57,  103 => 55,  92 => 47,  88 => 46,  84 => 45,  80 => 44,  71 => 38,  67 => 37,  62 => 34,  58 => 32,  51 => 27,  49 => 26,  22 => 1,  45 => 21,  39 => 18,  34 => 16,  31 => 15,  28 => 14,);
    }
}
