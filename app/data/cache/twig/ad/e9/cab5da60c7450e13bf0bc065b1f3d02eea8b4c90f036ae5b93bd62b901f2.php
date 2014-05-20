<?php

/* block/list.twig */
class __TwigTemplate_ade9cab5da60c7450e13bf0bc065b1f3d02eea8b4c90f036ae5b93bd62b901f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["goods_list"] = $this->env->loadTemplate("macro/goods_list.twig");
        // line 2
        echo $context["goods_list"]->getgoods_list($this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "data"));
    }

    public function getTemplateName()
    {
        return "block/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
