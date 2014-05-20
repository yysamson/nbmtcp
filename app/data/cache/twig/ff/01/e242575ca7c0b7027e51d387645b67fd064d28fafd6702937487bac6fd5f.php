<?php

/* admin/goods/add.twig */
class __TwigTemplate_ff01e242575ca7c0b7027e51d387645b67fd064d28fafd6702937487bac6fd5f extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/div_layout.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>添加商品</h1>
    <form class=\"ui form segment\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_goods_add");
        echo "\" method=\"post\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <input class=\"ui green submit button\" type=\"submit\" name=\"submit\" value=\"确定\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "admin/goods/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  33 => 4,  30 => 3,  25 => 2,);
    }
}
