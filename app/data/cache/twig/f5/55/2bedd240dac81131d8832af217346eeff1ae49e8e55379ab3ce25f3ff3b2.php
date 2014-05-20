<?php

/* admin/goods/index.twig */
class __TwigTemplate_f5552bedd240dac81131d8832af217346eeff1ae49e8e55379ab3ce25f3ff3b2 extends Twig_Template
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
        // line 2
        $context["paging"] = $this->env->loadTemplate("admin/component/paging.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>商品列表</h1>
    <table class=\"ui table segment compact\">
        <thead>
        <tr>
            <th>图片</th>
            <th>商品名称</th>
            <th>价格</th>
            <th>类别</th>
            <th>状态</th>
            <th>发布时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 19
            echo "            <tr>
                <td><img style=\"height: 80px\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["g"]) ? $context["g"] : null), "image"), "html", null, true);
            echo "\" alt=\"\"/></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["g"]) ? $context["g"] : null), "name"), "html", null, true);
            echo "</td>
                <td>￥";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["g"]) ? $context["g"] : null), "price"), 2), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('ext')->getParent((isset($context["g"]) ? $context["g"] : null), "goodscategory"), "title"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo (($this->getAttribute((isset($context["g"]) ? $context["g"] : null), "available")) ? ("上架") : ("下架"));
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["g"]) ? $context["g"] : null), "created"), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"small ui button\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_goods_show", array("id" => $this->getAttribute((isset($context["g"]) ? $context["g"] : null), "id"))), "html", null, true);
            echo "\" target=\"_blank\">
                        详情
                    </a>
                    <a class=\"small ui green button\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_goods_update", array("id" => $this->getAttribute((isset($context["g"]) ? $context["g"] : null), "id"))), "html", null, true);
            echo "\">
                        修改
                    </a>
                    <a class=\"small ui red button delete\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_goods_delete", array("id" => $this->getAttribute((isset($context["g"]) ? $context["g"] : null), "id"))), "html", null, true);
            echo "\">
                        删除
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
    ";
        // line 41
        echo $context["paging"]->getpaging($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "count"), $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "pages"), (isset($context["page"]) ? $context["page"] : null), "admin_goods");
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/goods/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 41,  105 => 39,  93 => 33,  87 => 30,  81 => 27,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  56 => 20,  53 => 19,  49 => 18,  33 => 4,  30 => 3,  25 => 2,);
    }
}
