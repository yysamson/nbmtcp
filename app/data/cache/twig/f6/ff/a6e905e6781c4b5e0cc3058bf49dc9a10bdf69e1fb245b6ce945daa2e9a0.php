<?php

/* customer/my_orders.twig */
class __TwigTemplate_f6ffa6e905e6781c4b5e0cc3058bf49dc9a10bdf69e1fb245b6ce945daa2e9a0 extends Twig_Template
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
                class=\"glyphicon glyphicon-chevron-left return1\"></span>我的订单</a>
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"main\">
        <div class=\"products\">
            <div class=\"container order-bt\">
                <div class=\"row\">
                    <div class=\"col-xs-12 \">
                        <P class=\"pull-right month\"><span class=\"glyphicon glyphicon-star return1\"></span>最近10个订单</P>
                    </div>
                </div>
            </div>
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 17
            echo "                <div class=\"container\">
                    <div class=\"order-list\">
                        <div class=\"order\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    <small>订单编号：";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "id"), "html", null, true);
            echo "</small>
                                </div>
                                <div class=\"col-xs-6\">
                                    <small class=\"pull-right\">成交时间：";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "created"), "Y-m-d"), "html", null, true);
            echo "</small>
                                </div>
                            </div>
                        </div>

                        <div class=\"pro-list1\">
                            ";
            // line 31
            $context["items"] = $this->env->getExtension('ext')->getOwn((isset($context["o"]) ? $context["o"] : null), "ordersitem");
            // line 32
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 33
                echo "                                ";
                $context["goods"] = $this->env->getExtension('ext')->getParent((isset($context["i"]) ? $context["i"] : null), "goods");
                // line 34
                echo "                                <a href=\"#\">
                                    <div class=\"pro-xx1\">
                                        <div class=\"pro-img\"><img src=\"";
                // line 36
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "image"), "/images/default-pro.jpg")) : ("/images/default-pro.jpg")), "html", null, true);
                echo "\"></div>
                                        <div class=\"pro-info\">
                                            <h2 class=\"pro-name\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "name"), "html", null, true);
                echo "</h2>

                                            <div class=\"price-info\">
                                                <h3 class=\"price price-nocol\">￥<span class=\"bigprice\">";
                // line 41
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "price"), 2), "html", null, true);
                echo "</span></h3>
                                                <span class=\"buy-count\">共";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "amount"), "html", null, true);
                echo "件</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                        </div>

                    </div>
                    <!--pro-list end-->
                    <div class=\"count1\">

                        <div class=\"row\">
                            <div class=\"col-xs-6 \">
                                订单总金额：<span class=\"col-red\">￥";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "price"), 2), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"col-xs-6\">
                                <small class=\"pull-right\">订单状态：<span class=\"shipped\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "status"), "html", null, true);
            echo "</span>";
            if (($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "status") == "未支付")) {
                // line 60
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wechat_pay", array("id" => $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "id"))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-danger\">立即支付</a>";
            }
            echo "</small>
                            </div>

                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </div>
        <!--products end-->
    </div>  <!--main end-->
";
    }

    public function getTemplateName()
    {
        return "customer/my_orders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 67,  141 => 60,  137 => 59,  131 => 56,  121 => 48,  109 => 42,  105 => 41,  99 => 38,  94 => 36,  90 => 34,  87 => 33,  82 => 32,  80 => 31,  71 => 25,  65 => 22,  58 => 17,  54 => 16,  43 => 7,  40 => 6,  32 => 3,  29 => 2,);
    }
}
