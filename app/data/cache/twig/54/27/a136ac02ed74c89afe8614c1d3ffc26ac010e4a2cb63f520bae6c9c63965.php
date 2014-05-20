<?php

/* cart.twig */
class __TwigTemplate_5427a136ac02ed74c89afe8614c1d3ffc26ac010e4a2cb63f520bae6c9c63965 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'nav_title' => array($this, 'block_nav_title'),
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

    // line 2
    public function block_nav_title($context, array $blocks = array())
    {
        // line 3
        echo "    <a class=\"navbar-brand\" href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><span
                class=\"glyphicon glyphicon-chevron-left return1\"></span>购物车</a>
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"main\">
        <div class=\"container \">
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "                <div class=\"cart\">
                    <div class=\"pro-list2\">
                        <a href=\"#\">
                            <div class=\"pro-xx\">
                                <div class=\"pro-img\"><img src=\"";
            // line 14
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "goods", array(), "any", false, true), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "goods", array(), "any", false, true), "image"), "/images/default-pro.jpg")) : ("/images/default-pro.jpg")), "html", null, true);
            echo "\"></div>
                                <div class=\"pro-info\">
                                    <h2 class=\"pro-name\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "goods"), "name"), "html", null, true);
            echo "</h2>

                                    <div class=\"price-info\">
                                        单价：<span class=\"col-red\">￥";
            // line 19
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "goods"), "price"), 2), "html", null, true);
            echo "</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    ";
            // line 42
            echo "                    <div class=\" count\">
                        <div class=\"row pull-left \">
                            <div class=\"col-xs-1\">
                                <a class=\"glyphicon glyphicon-trash trash\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_delete", array("gid" => $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "goods"), "id"))), "html", null, true);
            echo "\"></a>
                            </div>

                            <form class=\"col-xs-9\" method=\"post\" action=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("cart_update");
            echo "\">
                                <input class=\"nmu\" type=\"number\" name=\"amount\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "amount"), "html", null, true);
            echo "\">
                                <input type=\"hidden\" name=\"gid\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "goods"), "id"), "html", null, true);
            echo "\"/>
                                <input type=\"submit\" value=\"更新\">
                            </form>
                        </div>
                        <div class=\"row pull-right\">
                            <div class=\"col-xs-12\">
                                小计：<span class=\"col-red\">￥";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : null), "goods"), "price") * $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "amount")), 2), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    </div>

                </div>
                <!--cart end-->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
            <div class=\"settle\">
                <div class=\"count\">
                    <div class=\"row \">
                        <div class=\"col-xs-9 check\">
                            合计：<span class=\"col-red\">￥";
        // line 69
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalPrice"), 2), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"col-xs-3\">
                            <a href=\"\" class=\"pull-right \">
                                <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("cart_order");
        echo "\"  class=\"btn btn-danger\">下订单</a>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <!--settle end-->


        </div>
    </div>  <!--main end-->
";
    }

    public function getTemplateName()
    {
        return "cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 73,  127 => 69,  120 => 64,  106 => 56,  97 => 50,  93 => 49,  89 => 48,  83 => 45,  78 => 42,  68 => 19,  62 => 16,  57 => 14,  51 => 10,  47 => 9,  43 => 7,  40 => 6,  32 => 3,  29 => 2,);
    }
}
