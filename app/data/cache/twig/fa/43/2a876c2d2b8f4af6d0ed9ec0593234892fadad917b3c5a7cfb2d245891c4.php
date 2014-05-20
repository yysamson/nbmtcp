<?php

/* login.twig */
class __TwigTemplate_fa432a876c2d2b8f4af6d0ed9ec0593234892fadad917b3c5a7cfb2d245891c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"main\">
        <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("customer_login_check");
        echo "\" method=\"post\">
            <div class=\"container\">
                ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
                <div class=\" form-group1\">
                    <label for=\"inputusername3\" class=\" control-label\">用户名</label>
                    <input type=\"text\" class=\"form-control \" id=\"inputusername3\" placeholder=\"请输入用户名\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\">

                </div>
                <div class=\" form-group1\">
                    <label for=\"inputPassword3\" class=\"control-label\">密码</label>
                    <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"请输入用户名\" name=\"_password\" value=\"\">

                </div>
                <div class=\"form-group1\">
                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <input type=\"submit\" class=\"btn btn-danger btn-lg btn-block\" value=\"登录\">
                        </div>
                        <div>
                            <div class=\"col-xs-6\">
                                <a href=\"a\"  class=\"btn btn-default btn-lg btn-block\">注册</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>  <!--main end-->
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 21,  39 => 18,  34 => 16,  31 => 15,  28 => 14,);
    }
}
