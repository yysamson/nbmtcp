<?php

/* goods_introduction.twig */
class __TwigTemplate_95c728a18eca16447c76c2b2ea5ada21358d28022c57b842a500a4ad18896380 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("goods", array("id" => $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "id"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-chevron-left return1\"></span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "name"), "html", null, true);
        echo "</a>
";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"main\">
        <div class=\"twxq-info\">
            <div class=\"container\">
                <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "name"), "html", null, true);
        echo "</h1>
                ";
        // line 10
        echo $this->getAttribute((isset($context["goods"]) ? $context["goods"] : null), "introduction");
        echo "
            </div>
        </div>
    </div>  <!--main end-->
";
    }

    public function getTemplateName()
    {
        return "goods_introduction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 9,  44 => 6,  41 => 5,  32 => 3,  29 => 2,);
    }
}
