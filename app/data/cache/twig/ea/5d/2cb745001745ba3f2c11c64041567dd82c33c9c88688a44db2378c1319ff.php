<?php

/* Demo/base.twig */
class __TwigTemplate_ea5d2cb745001745ba3f2c11c64041567dd82c33c9c88688a44db2378c1319ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('silexBase')->asset($this->env, "js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>
";
        // line 6
        $this->displayBlock('main', $context, $blocks);
        // line 8
        echo "<ul>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">首页</a></li>
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">管理员页面演示</a></li>
    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("form");
        echo "\">表单演示</a></li>
</ul>
";
        // line 13
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getUrl("footer"));
        echo "
</body>
</html>";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Demo/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  48 => 13,  43 => 11,  39 => 10,  35 => 9,  32 => 8,  30 => 6,  24 => 3,  20 => 1,  31 => 3,  28 => 2,);
    }
}
