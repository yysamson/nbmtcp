<?php

/* index.twig */
class __TwigTemplate_361ceef6a8e5f6ce001437a0bd0ab5a76cb0f6b7243aef5ebe0d449da8ca9cde extends Twig_Template
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
        // line 2
        $context["goods_list"] = $this->env->loadTemplate("macro/goods_list.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"main\">
        <div id=\"carousel-example-generic\" class=\"carousel slide focus\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <img src=\"/images/7.jpg\" alt=\"宁波美天诚品进出口有限公司\">
                </div>
                <div class=\"item\">
                    <img src=\"/images/10.jpg\" alt=\"宁波美天诚品进出口有限公司\">
                </div>
            </div>
            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\"></span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span>
            </a>
        </div>

        <div class=\"linkbutton\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("products", array("cate" => 17));
        echo "\"><img src=\"/images/shyp.jpg\" alt=\"生活用品\" class=\"img-thumbnail\"></a>
                    </div>
                    <div class=\"col-xs-6\">
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("products", array("cate" => 20));
        echo "\"><img src=\"/images/sp.jpg\" alt=\"食品\" class=\"img-thumbnail\"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"products\">
            ";
        // line 43
        echo $context["goods_list"]->getgoods_list((isset($context["goods"]) ? $context["goods"] : null));
        echo "
        </div>
        <!--products end-->
        <!--<div class=\"load\">-->
        <!--<div class=\"container\">-->
        <!--<button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">加载更多</button>-->
        <!--</div>-->
        <!--</div>-->

    </div>  <!--main end-->
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 43,  70 => 36,  64 => 33,  33 => 4,  30 => 3,  25 => 2,);
    }
}
