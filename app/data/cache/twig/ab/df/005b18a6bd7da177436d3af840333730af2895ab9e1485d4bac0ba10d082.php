<?php

/* admin/goods/show.twig */
class __TwigTemplate_abdf005b18a6bd7da177436d3af840333730af2895ab9e1485d4bac0ba10d082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("admin/base.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "name"), "html", null, true);
        echo "（";
        echo (($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "available")) ? ("已上架") : ("未上架"));
        echo "）</h1>
    <a class=\"ui green button\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_goods_update", array("id" => $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "id"))), "html", null, true);
        echo "\">修改商品</a>
    <h2>商品图片</h2>
    <form method=\"post\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("admin_goods_image_upload");
        echo "\" enctype=\"multipart/form-data\">
        <div class=\"ui input\">
            <input type=\"file\" name=\"image\" accept=\"image/*\" required>
        </div>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"/>
        <button class=\"ui secondary button\">
            上传
        </button>
    </form>
    <div class=\"ui connected six items\">
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('ext')->getOwn((isset($context["goods"]) ? $context["goods"] : null), "goodsimage"));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "            <div class=\"item\">
                <div class=\"image\">
                    <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "path"), "html", null, true);
            echo "\">
                    <a class=\"star ui corner delete label\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_goods_image_delete", array("id" => $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "id"))), "html", null, true);
            echo "\">
                        <i class=\"delete icon\"></i>
                    </a>
                </div>
                <p style=\"text-align: center\">
                    ";
            // line 25
            if (($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "image") == $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "path"))) {
                // line 26
                echo "                        <span class=\"ui small green button\">标题图片</span>
                    ";
            } else {
                // line 28
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_goods_default_image", array("id" => $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "id"), "image_id" => $this->getAttribute((isset($context["i"]) ? $context["i"] : null), "id"))), "html", null, true);
                echo "\"
                           class=\"ui small button\">设为标题图片</a>
                    ";
            }
            // line 31
            echo "                </p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>

    <div class=\"ui pointing secondary goods-info menu\">
        <a class=\"active red item\" data-tab=\"first\">简要说明</a>
        <a class=\"blue item\" data-tab=\"second\">商品详情</a>
        <a class=\"green item\" data-tab=\"third\">商品规格</a>
    </div>
    <div class=\"ui active tab segment\" data-tab=\"first\">
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "description"), "html", null, true);
        echo "
    </div>
    <div class=\"ui tab segment\" data-tab=\"second\">
        ";
        // line 45
        echo $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "introduction");
        echo "
    </div>
    <div class=\"ui tab segment\" data-tab=\"third\">
        ";
        // line 48
        echo $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "specification");
        echo "
    </div>
    <script>
        \$(document)
                .ready(function () {
                    \$('.goods-info.menu .item').tab();
                })
        ;
    </script>
";
    }

    public function getTemplateName()
    {
        return "admin/goods/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  116 => 45,  110 => 42,  100 => 34,  92 => 31,  85 => 28,  81 => 26,  79 => 25,  71 => 20,  67 => 19,  63 => 17,  59 => 16,  50 => 10,  43 => 6,  38 => 4,  31 => 3,  28 => 2,);
    }
}
