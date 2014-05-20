<?php

/* goods.twig */
class __TwigTemplate_5a59b5d60e4f421229b21a21a043d5499838ae4f8d4bdc09dbb2b8100a2fe0be extends Twig_Template
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
                class=\"glyphicon glyphicon-chevron-left return1\"></span>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "name"), "html", null, true);
        echo "</a>
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"main\">
        ";
        // line 8
        if (twig_length_filter($this->env, (isset($context["images"]) ? $context["images"] : null))) {
            // line 9
            echo "            <div class=\"carousel slide focus\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 19
                echo "                        <div class=\"item ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "active";
                }
                echo "\">
                            <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "path"), "html", null, true);
                echo "\" alt=\"宁波美天诚品进出口有限公司\" style=\"width: 100%;\">
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        ";
        }
        // line 34
        echo "        <div class=\"item-value\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-3 item-price\">
                        <h5>￥";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "price"), 2), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"col-xs-9\">
                        ";
        // line 42
        echo "                    </div>
                </div>
            </div>
        </div>


        <div class=\"item-summery\">
            <div class=\"container\">
                <P>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "description"), "html", null, true);
        echo "</p>
            </div>
        </div>

        <div class=\"item-spxq\">
            <div class=\"container text-center\">
                <h5> 商品详情</h5>
            </div>
        </div>

        <div class=\"item-img\">
            <div class=\"container\">
                <a class=\"\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("goods_introduction", array("id" => $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "id"))), "html", null, true);
        echo "\">
                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <span class=\"glyphicon glyphicon-list return1\"></span>图文详情
                        </div>
                        <div class=\"col-xs-6\">
                            <span class=\"glyphicon glyphicon-chevron-right next\"></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class=\"item-info\">
            <div class=\"container\">
                <div>
                    <h5><strong>产品规格</strong></h5>
                    ";
        // line 79
        echo $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "specification");
        echo "
                </div>
                <!--<div class=\"sq\">-->
                <!--<a href=\"#\"><p>展开</p></a>-->
                <!--</div>-->
            </div>
        </div>

        <div class=\"empty\"></div>
        <nav class=\"navbar navbar-default navbar-fixed-bottom\" role=\"navigation\">
            <form class=\"container\" action=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("cart_add");
        echo "\" method=\"post\">
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <div class=\"input-group add\">
                              <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\">购买数量</button>
                              </span>
                            <input type=\"number\" class=\"form-control\" name=\"amount\" value=\"1\">
                            <input type=\"hidden\" name=\"gid\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "id"), "html", null, true);
        echo "\">
                        </div>
                        <!-- /input-group -->
                    </div>

                    <div class=\"col-xs-6\">
                        <div class=\"add\">
                            <input type=\"submit\" class=\"btn btn-danger\" value=\"加入购物车\">
                        </div>
                    </div>
                </div>
            </form>
        </nav>
    </div>  <!--main end-->
";
    }

    public function getTemplateName()
    {
        return "goods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 97,  186 => 89,  173 => 79,  153 => 62,  138 => 50,  128 => 42,  122 => 38,  116 => 34,  103 => 23,  86 => 20,  79 => 19,  62 => 18,  51 => 9,  49 => 8,  46 => 7,  43 => 6,  37 => 4,  32 => 3,  29 => 2,);
    }
}
