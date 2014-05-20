<?php

/* register.twig */
class __TwigTemplate_51689a25207dca1dbd87e2811dcd6e47c04f798cd528e9458d590bf98c968869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'end_js' => array($this, 'block_end_js'),
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

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"main\">
        <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">
            <div class=\"container\">
                ";
        // line 6
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 7
            echo "                    <ul>
                        ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 9
                echo "                            <li>";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "                    </ul>
                ";
        }
        // line 13
        echo "                <div class=\" form-group1\">
                    <label class=\" control-label\">用户名</label>
                    <input type=\"text\" class=\"form-control \" placeholder=\"请输入用户名\" name=\"username\"
                           value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "username"), "html", null, true);
        echo "\" required>

                </div>
                <div class=\" form-group1\">
                    <label class=\"control-label\">密码</label>
                    <input type=\"password\" class=\"form-control\" placeholder=\"请输入密码\" name=\"password\" required>

                </div>
                <div class=\" form-group1\">
                    <label class=\"control-label\">核对密码</label>
                    <input type=\"password\" class=\"form-control\" placeholder=\"请再一次输入密码\" name=\"password1\" required>

                </div>
                <div class=\"form-group1\">
                    <label class=\"control-label\">真实姓名</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"请输入真实姓名\" name=\"name\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name"), "html", null, true);
        echo "\"
                           required>
                </div>
                <div class=\"form-group1\">
                    <label class=\"control-label\">联系电话</label>
                    <input type=\"number\" class=\"form-control\" placeholder=\"请输入联系电话\" name=\"tel\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tel"), "html", null, true);
        echo "\"
                           required>
                </div>
                <div class=\"form-group1\">
                    <label class=\" control-label\">邮箱地址</label>
                    <input type=\"email\" class=\"form-control\" placeholder=\"请输入邮箱地址\" name=\"email\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "email"), "html", null, true);
        echo "\"
                           required>
                </div>
                <div class=\"form-group1\">
                    <label class=\"control-label\">收货地址</label>
                    <input type=\"text\" class=\"form-control\" placeholder=\"请输入收货地址\" name=\"address\" value=\"address\"
                           required>
                </div>

                <div class=\"form-group1\">
                    <div class=\" \">
                        <input type=\"submit\" id=\"submit\" class=\"btn btn-danger btn-lg btn-block\" value=\"我要注册\">
                    </div>

                </div>
            </div>
        </form>
    </div>  <!--main end-->
";
    }

    // line 60
    public function block_end_js($context, array $blocks = array())
    {
        // line 61
        echo "    <script>
        \$('form').on('submit', function(){
           if(\$('input[name=password]').val() != \$('input[name=password1]').val()){
               alert('密码不匹配');
               return false;
           }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 61,  124 => 60,  101 => 41,  93 => 36,  85 => 31,  67 => 16,  62 => 13,  58 => 11,  49 => 9,  45 => 8,  42 => 7,  40 => 6,  35 => 4,  32 => 3,  29 => 2,);
    }
}
